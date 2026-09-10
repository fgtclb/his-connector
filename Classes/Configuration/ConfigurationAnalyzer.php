<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Configuration;

use FGTCLB\HisClientFacade\Model\EntityInterface;
use FGTCLB\HisClientFacade\Schema\CollectionType;
use FGTCLB\HisClientFacade\Schema\ModelType;
use FGTCLB\HisClientFacade\Schema\SchemaFactory;
use FGTCLB\HisClientFacade\Schema\SchemaTypeInterface;
use FGTCLB\HisConnector\Exception\AnalyzerException;
use FGTCLB\HisConnector\Service\FieldMapper;
use FGTCLB\HisConnector\Service\RepositoryRegistry;
use FGTCLB\HisConnector\Utility\MappingUtility;
use TYPO3\CMS\Core\Schema\Capability\TcaSchemaCapability;
use TYPO3\CMS\Core\Schema\Field\FieldCollection;
use TYPO3\CMS\Core\Schema\Field\FieldTypeInterface;
use TYPO3\CMS\Core\Schema\Field\RelationalFieldTypeInterface;
use TYPO3\CMS\Core\Schema\Field\SystemInternalFieldType;
use TYPO3\CMS\Core\Schema\TcaSchema;
use TYPO3\CMS\Core\Schema\TcaSchemaFactory;

/**
 * Validates a mapping configuration against the source (HIS) and target
 * (TCA) schemas and creates a data structure that collects all available
 * information. Optionally, example data can be provided to be able to
 * visualize the mapping configuration.
 */
final readonly class ConfigurationAnalyzer
{
    public function __construct(
        private TcaSchemaFactory $tcaSchemaFactory,
        private SchemaFactory $schemaFactory,
        private MappingUtility $mappingUtility,
        private FieldMapper $fieldMapper,
        private RepositoryRegistry $repositoryRegistry,
    ) {}

    /**
     * @return mixed[]
     */
    public function analyze(SyncConfiguration $config, ?EntityInterface $example = null): array
    {
        $repository = $this->repositoryRegistry->getByVariableName($config->source->repository);
        if ($repository === null) {
            throw new AnalyzerException(sprintf(
                'Invalid repository specified: %s',
                $config->source->repository,
            ), 1787160847);
        }
        return $this->analyzeMapping($repository->getObjectType(), $config, $example);
    }

    /**
     * @param array<string, mixed> $availableVariables
     * @param array<string, ?SchemaTypeInterface> $availableSchemas
     * @return mixed[]
     */
    private function analyzeMapping(string $className, SyncConfiguration $config, ?EntityInterface $example = null, $availableVariables = [], $availableSchemas = []): array
    {
        $mappingConfigs = $config->getMappingsForClassName($className);
        if (count($mappingConfigs) === 0) {
            throw new AnalyzerException(sprintf(
                'Mapping of referenced object "%s" not specified.',
                $className,
            ), 1787160848);
        }
        if (count($mappingConfigs) > 1) {
            // TODO multiple mappings should be supported
            throw new AnalyzerException(sprintf(
                'Ambiguous mapping configuration: Multiple mappings exist for referenced object "%s".',
                $className,
            ), 1787829783);
        }
        $mappingConfig = array_first($mappingConfigs);
        if (!$this->tcaSchemaFactory->has($mappingConfig->tableName)) {
            throw new AnalyzerException(sprintf(
                'Mapped database table "%s" does not exist.',
                $mappingConfig->tableName,
            ), 1787160849);
        }
        $tcaSchema = $this->tcaSchemaFactory->get($mappingConfig->tableName);
        if (!$tcaSchema->hasField($mappingConfig->identifierField)) {
            throw new AnalyzerException(sprintf(
                'Invalid identifier field "%s" specified for database table "%s".',
                $mappingConfig->identifierField,
                $mappingConfig->tableName,
            ), 1787160850);
        }
        $result = [
            'title' => $tcaSchema->getTitle(),
            'className' => $className,
            'tableName' => $mappingConfig->tableName,
            'identifierField' => $mappingConfig->identifierField,
            'usesDefaultIdentifierFields' => $mappingConfig->usesDefaultIdentifierField(),
            'skipField' => $mappingConfig->skipField,
            'fields' => [],
        ];
        $variableName = $this->mappingUtility->createExpressionVariableName($mappingConfig->entityClassName);
        $availableSchemas[$variableName] ??= $this->schemaFactory->create($mappingConfig->entityClassName);
        $availableVariables[$variableName] = $example;
        foreach ($mappingConfig->fields as $field) {
            if (!$tcaSchema->hasField($field->fieldName)) {
                throw new AnalyzerException(sprintf(
                    'Mapped field "%s" does not exist in table "%s".',
                    $field->fieldName,
                    $mappingConfig->tableName,
                ), 1787160851);
            }
        }

        foreach ($this->getRelevantTcaFields($tcaSchema) as $tcaField) {
            $fieldMapping = $mappingConfig->fields[$tcaField->getName()] ?? null;
            if ($fieldMapping === null) {
                // TCA field isn't mapped
                $result['fields'][] = [
                    'tcaField' => $tcaField,
                ];
                continue;
            }
            if ($fieldMapping->sourceField instanceof SourceExpression) {
                $exampleValue = null;
                if ($example) {
                    $exampleValue = $this->fieldMapper->applyFieldMapping($fieldMapping, $availableVariables);
                }
                // No way to analyze expressions currently
                $result['fields'][] = [
                    'fieldMapping' => $fieldMapping,
                    'tcaField' => $tcaField,
                    'example' => $this->prepareExampleValue($exampleValue),
                ];
                continue;
            }
            $hisSchema = $availableSchemas[$fieldMapping->sourceField->variableName] ?? null;
            if ($hisSchema === null) {
                throw new AnalyzerException(sprintf(
                    'Invalid variable name "%s" used in mapping for "%s.%s".',
                    $fieldMapping->sourceField->variableName,
                    $mappingConfig->tableName,
                    $fieldMapping->fieldName,
                ), 1787160852);
            }
            foreach ($fieldMapping->sourceField->accessorPath as $propertyName) {
                $property = $hisSchema instanceof ModelType ? $hisSchema->getPropertyOrGetter($propertyName) : null;
                if ($property === null) {
                    throw new AnalyzerException(sprintf(
                        'Invalid property "%s" in accessor "%s in mapping for "%s.%s".',
                        $propertyName,
                        (string)$fieldMapping->sourceField,
                        $mappingConfig->tableName,
                        $fieldMapping->fieldName,
                    ), 1787160853);
                }
                $hisSchema = $property->type;
            }
            $subResult = $exampleValue = null;
            if (isset($example)) {
                $exampleValue = $this->fieldMapper->applyFieldMapping($fieldMapping, $availableVariables);
            }
            if ($hisSchema instanceof CollectionType) {
                $subType = $hisSchema->className::getItemType();
                if (!$tcaField instanceof RelationalFieldTypeInterface) {
                    throw new AnalyzerException(sprintf(
                        'Entity collection "%s" mapped to non-relational database field "%s.%s".',
                        $hisSchema->className,
                        $mappingConfig->tableName,
                        $fieldMapping->fieldName,
                    ), 1787160854);
                }
                // TODO check if TCA relation matches mapping
                $subResult = $this->analyzeMapping($subType, $config, $exampleValue?->first(), $availableVariables, $availableSchemas);
            } elseif ($hisSchema instanceof ModelType) {
                if (!$tcaField instanceof RelationalFieldTypeInterface) {
                    throw new AnalyzerException(sprintf(
                        'Entity "%s" mapped to non-relational database field "%s.%s".',
                        $hisSchema->className,
                        $mappingConfig->tableName,
                        $fieldMapping->fieldName,
                    ), 1787160855);
                }
                // TODO check if TCA relation matches mapping
                $subResult = $this->analyzeMapping($hisSchema->className, $config, $exampleValue, $availableVariables, $availableSchemas);
            }
            $result['fields'][] = [
                'fieldMapping' => $fieldMapping,
                'hisSchema' => $hisSchema,
                'tcaField' => $tcaField,
                'subFields' => $subResult,
                'example' => $this->prepareExampleValue($exampleValue),
            ];
            if (!$result['usesDefaultIdentifierFields'] && $subResult && $subResult['usesDefaultIdentifierFields']) {
                $result['usesDefaultIdentifierFields'] = true;
            }
        }
        return $result;
    }

    private function prepareExampleValue(mixed $exampleValue): string
    {
        if (is_scalar($exampleValue)) {
            return (string)$exampleValue;
        }
        if ($exampleValue instanceof \DateTimeInterface) {
            return $exampleValue->format('Y-m-d H:i:s');
        }
        if (is_object($exampleValue)) {
            return get_class($exampleValue);
        }
        return '';
    }

    /**
     * Returns all fields from a TCA schema for which a mapping could make sense
     */
    private function getRelevantTcaFields(TcaSchema $tcaSchema): FieldCollection
    {
        $languageCapability = $tcaSchema->hasCapability(TcaSchemaCapability::Language)
            ? $tcaSchema->getCapability(TcaSchemaCapability::Language)
            : null;
        $restrictionCapability = $tcaSchema->hasCapability(TcaSchemaCapability::RestrictionUserGroup)
            ? $tcaSchema->getCapability(TcaSchemaCapability::RestrictionUserGroup)
            : null;
        $sortingCapability = $tcaSchema->hasCapability(TcaSchemaCapability::SortByField)
            ? $tcaSchema->getCapability(TcaSchemaCapability::SortByField)
            : null;
        return $tcaSchema->getFields(
            fn(FieldTypeInterface $field) => !$field instanceof SystemInternalFieldType
                && $field !== $languageCapability?->getTranslationOriginPointerField()
                && $field !== $languageCapability?->getLanguageField()
                && $field !== $languageCapability?->getTranslationSourceField()
                && $field !== $languageCapability?->getDiffSourceField()
                && $field->getName() !== $restrictionCapability?->getFieldName()
                && $field->getName() !== $sortingCapability?->getFieldName()
        );
    }
}
