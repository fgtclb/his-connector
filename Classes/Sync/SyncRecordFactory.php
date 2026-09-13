<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Sync;

use FGTCLB\HisClientFacade\Collection\CollectionInterface;
use FGTCLB\HisClientFacade\Model\EntityInterface;
use FGTCLB\HisClientFacade\Model\FileEntityInterface;
use FGTCLB\HisConnector\Configuration\FieldMapping;
use FGTCLB\HisConnector\Configuration\MappingConfiguration;
use FGTCLB\HisConnector\Configuration\SyncConfiguration;
use FGTCLB\HisConnector\Exception\SyncException;
use FGTCLB\HisConnector\Service\FieldMapper;
use FGTCLB\HisConnector\Utility\MappingUtility;
use TYPO3\CMS\Core\Schema\ActiveRelation;
use TYPO3\CMS\Core\Schema\Field\FieldTypeInterface;
use TYPO3\CMS\Core\Schema\Field\RelationalFieldTypeInterface;
use TYPO3\CMS\Core\Schema\TcaSchemaFactory;
use TYPO3\CMS\Core\Utility\StringUtility;

final readonly class SyncRecordFactory
{
    public function __construct(
        private SyncRecordStatusCheckerInterface $statusChecker,
        private TcaSchemaFactory $tcaSchemaFactory,
        private MappingUtility $mappingUtility,
        private FieldMapper $fieldMapper,
    ) {}

    /**
     * Creates a record with all necessary data to insert/update the provided sync source
     * in the mapped database tables; If the mapping configuration has a skip flag configured
     * and a record already exists which sets that flag, the process will stop early and
     * return null instead of the record.
     *
     * @param array<string, mixed> $availableVariables
     * @param array<int, array<string, array<string, array<string, int|string>>>> $insertUpdateIds
     */
    public function createRecord(
        EntityInterface $syncSource,
        SyncConfiguration $config,
        MappingConfiguration $mappingConfig,
        array $availableVariables = [],
        array &$insertUpdateIds = [],
        ?SyncField $parentRelation = null,
    ): ?SyncRecord {
        if ($config->storagePage === null) {
            throw new SyncException('Storage page not specified in sync configuration.', 1788609240);
        }
        $syncRecord = new SyncRecord(
            tableName: $mappingConfig->tableName,
            storagePage: $config->storagePage,
            syncIdentifier: new SyncField($mappingConfig->identifierField, $syncSource->getIdentifier()),
            relation: $parentRelation,
        );
        $insertUpdateId = $this->determineInsertUpdateId($syncRecord, $insertUpdateIds);
        $syncRecord = $syncRecord->withInsertUpdateId($insertUpdateId);
        if ($this->statusChecker->recordShouldBeSkipped($syncRecord, $mappingConfig)) {
            return null;
        }

        $variableName = $this->mappingUtility->createExpressionVariableName($mappingConfig->entityClassName);
        $fields = [];
        foreach ($mappingConfig->fields as $fieldMapping) {
            $fields[] = $this->createField(
                $insertUpdateId,
                $config,
                $fieldMapping,
                [...$availableVariables, $variableName => $syncSource],
                $insertUpdateIds
            );
        }
        return $syncRecord->withFields(...$fields);
    }

    /**
     * Creates the representation of a field within a SyncRecord. Related records and
     * related files receive special treatment and result in different representations
     * than simple fields with values.
     *
     * @param array<string, mixed> $availableVariables
     * @param array<int, array<string, array<string, array<string, int|string>>>> $insertUpdateIds
     */
    private function createField(
        int|string $parentId,
        SyncConfiguration $config,
        FieldMapping $fieldMapping,
        array $availableVariables,
        array &$insertUpdateIds,
    ): SyncFieldInterface {
        // Fetch raw value from source object
        $sourceValue = $this->fieldMapper->applyFieldMapping($fieldMapping, $availableVariables);
        // Simple values don't need special treatment
        if (!$sourceValue instanceof CollectionInterface && !$sourceValue instanceof EntityInterface) {
            return new SyncField($fieldMapping->fieldName, $sourceValue);
        }
        // Determine if collection or entity is compatible with the mapped TCA schema
        $subType = $sourceValue instanceof CollectionInterface ? $sourceValue::getItemType() : get_class($sourceValue);
        $schema = $this->tcaSchemaFactory->get($fieldMapping->tableName);
        [$fieldRelation, $subMapping] = $this->determineRelationMapping($schema->getField($fieldMapping->fieldName), $subType, $config, $fieldMapping->tableName);
        // Special treatment for file references
        if (is_a($subType, FileEntityInterface::class, true)) {
            if ($fieldRelation === null) {
                throw new SyncException(sprintf(
                    'Cannot map file collection/entity "%s" to field "%s.%s" because it cannot contain file references.',
                    get_class($sourceValue),
                    $fieldMapping->tableName,
                    $fieldMapping->fieldName,
                ), 1788965249);
            }
            if ($config->fileStorageFolder === null) {
                // We only validate the file storage if it's actually used, in contrast to the storagePage,
                // which is a strict requirement
                throw new SyncException(sprintf(
                    'File storage folder needs to be specified to map file collection/entity "%s" to field "%s.%s".',
                    get_class($sourceValue),
                    $fieldMapping->tableName,
                    $fieldMapping->fieldName,
                ), 1788965433);
            }
            /** @var (EntityInterface&FileEntityInterface)[] */
            $fileCollection = $sourceValue instanceof EntityInterface ? [$sourceValue] : $sourceValue;
            $relatedFiles = [];
            foreach ($fileCollection as $item) {
                $relatedFiles[] = new SyncFile(
                    fileStorageFolder: $config->fileStorageFolder,
                    syncIdentifier: $item->getIdentifier(),
                    fileContents: $item->getFileContents(),
                    mimeType: $item->getMimeType(),
                    originalFileName: $item->getOriginalFileName(),
                    description: $item->getDescription(),
                );
            }
            return new SyncRelatedFiles($fieldMapping->fieldName, $relatedFiles);
        }
        if ($fieldRelation === null || $subMapping === null) {
            throw new SyncException(sprintf(
                'Cannot map collection/entity "%s" to non-relation field "%s.%s".',
                get_class($sourceValue),
                $fieldMapping->tableName,
                $fieldMapping->fieldName,
            ), 1788609450);
        }
        // Create a relation to the parent record for 1:n relations
        $parentRelation = $fieldRelation->toField() ? new SyncField($fieldRelation->toField(), $parentId) : null;
        if ($sourceValue instanceof EntityInterface) {
            $relatedRecord = $this->createRecord($sourceValue, $config, $subMapping, $availableVariables, $insertUpdateIds, $parentRelation);
            return new SyncRelatedRecords(
                $fieldMapping->fieldName,
                $relatedRecord ? [$relatedRecord] : []
            );
        }
        $relatedRecords = [];
        foreach ($sourceValue as $item) {
            $relatedRecord = $this->createRecord($item, $config, $subMapping, $availableVariables, $insertUpdateIds, $parentRelation);
            if ($relatedRecord !== null) {
                $relatedRecords[] = $relatedRecord;
            }
        }
        return new SyncRelatedRecords($fieldMapping->fieldName, $relatedRecords);
    }

    /**
     * Determines the uid of a sync record. The database is checked for existing records first.
     * If there is no existing record, a unique NEW id is created as a fallback. Determined
     * uids are stored in a hash map ($insertUpdateIds) throughout the whole mapping process,
     * which reduces database queries and allows referencing newly created records multiple
     * times without creating duplicates.
     *
     * @param array<int, array<string, array<string, array<string, int|string>>>> $insertUpdateIds
     */
    private function determineInsertUpdateId(SyncRecord $record, &$insertUpdateIds): string|int
    {
        $idField = $record->syncIdentifier->getName();
        $idValue = (string)$record->syncIdentifier->getValue();
        $insertUpdateIds[$record->storagePage][$record->tableName][$idField][$idValue] ??=
            $this->statusChecker->determineInsertUpdateIdFromDatabase($record) ?? StringUtility::getUniqueId('NEW');
        return $insertUpdateIds[$record->storagePage][$record->tableName][$idField][$idValue];
    }

    /**
     * Fetches the relevant information both from the TCA schema and from the mapping
     * configuration to be able to determine if a field contains relations and if the
     * mapping is compatible with the TCA schema. Special handling is in place for
     * file references, which are not mapped on a table level, but rather directly
     * to the relation field because the underlying database structure is known
     * (sys_file, sys_file_metadata and sys_file_reference).
     *
     * @return array{0: ActiveRelation|null, 1: MappingConfiguration|null}
     */
    private function determineRelationMapping(
        FieldTypeInterface $field,
        string $entityClassName,
        SyncConfiguration $syncConfig,
        string $fromTable,
    ): array {
        if (!$field instanceof RelationalFieldTypeInterface) {
            return [null, null];
        }
        if (is_a($entityClassName, FileEntityInterface::class, true)) {
            foreach ($field->getRelations() as $relation) {
                if ($relation->toTable() === 'sys_file_reference') {
                    return [$relation, null];
                }
            }
            return [null, null];
        }
        foreach ($field->getRelations() as $relation) {
            $mappingConfig = $syncConfig->getMappingForClassNameAndTableName($entityClassName, $relation->toTable());
            if ($mappingConfig instanceof MappingConfiguration) {
                return [$relation, $mappingConfig];
            }
        }
        // Because https://review.typo3.org/c/Packages/TYPO3.CMS/+/94976 hasn't been backported to 13.4,
        // we try to determine a relation from the other direction to resolve mm table relations correctly.
        foreach ($syncConfig->getMappingsForClassName($entityClassName) as $mappingCandidate) {
            $targetSchema = $this->tcaSchemaFactory->get($mappingCandidate->tableName);
            foreach ($targetSchema->getPassiveRelations() as $relation) {
                if ($relation->fromField() === $field->getName() && $relation->fromTable() === $fromTable) {
                    return [new ActiveRelation($fromTable, null), $mappingCandidate];
                }
            }
        }
        return [null, null];
    }
}
