<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Sync;

use FGTCLB\HisClientFacade\Collection\CollectionInterface;
use FGTCLB\HisClientFacade\Model\EntityInterface;
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
     * @param array<int, array<string, array<string, int|string>>> $insertUpdateIds
     */
    public function create(
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
        $syncRecord = $syncRecord->withInsertUpdateId(
            $this->getInsertUpdateId($insertUpdateIds, $syncRecord) ?? $this->statusChecker->determineInsertUpdateIdFromDatabase($syncRecord) ?? StringUtility::getUniqueId('NEW')
        );
        if ($this->statusChecker->recordShouldBeSkipped($syncRecord, $mappingConfig)) {
            return null;
        }
        $insertUpdateIds = $this->addInsertUpdateId($insertUpdateIds, $syncRecord);

        $variableName = $this->mappingUtility->createExpressionVariableName($mappingConfig->entityClassName);
        $schema = $this->tcaSchemaFactory->get($mappingConfig->tableName);
        foreach ($mappingConfig->fields as $targetField => $fieldMapping) {
            $sourceValue = $this->fieldMapper->applyFieldMapping(
                $fieldMapping,
                [...$availableVariables, $variableName => $syncSource]
            );

            if ($sourceValue instanceof CollectionInterface || $sourceValue instanceof EntityInterface) {
                $subType = $sourceValue instanceof CollectionInterface ? $sourceValue::getItemType() : get_class($sourceValue);
                [$fieldRelation, $subMapping] = $this->determineRelationMapping($schema->getField($targetField), $subType, $config);
                if ($fieldRelation === null || $subMapping === null) {
                    throw new SyncException(sprintf(
                        'Cannot map collection/entity "%s" to non-relation field "%s.%s".',
                        get_class($sourceValue),
                        $mappingConfig->tableName,
                        $targetField,
                    ), 1788609450);
                }
                $relation = $fieldRelation->toField() ? new SyncField($fieldRelation->toField(), $syncRecord->insertUpdateId) : null;
                $syncCollection = $sourceValue instanceof EntityInterface ? [$sourceValue] : $sourceValue;
                $relatedRecords = [];
                foreach ($syncCollection as $item) {
                    $relatedRecord = $this->create(
                        $item,
                        $config,
                        $subMapping,
                        [...$availableVariables, $variableName => $syncSource],
                        $insertUpdateIds,
                        $relation
                    );
                    if ($relatedRecord !== null) {
                        $relatedRecords[] = $relatedRecord;
                    }
                }
                $syncRecord = $syncRecord->withField(new SyncRelatedRecords($targetField, $relatedRecords));
            } else {
                $syncRecord = $syncRecord->withField(new SyncField($targetField, $sourceValue));
            }
        }

        return $syncRecord;
    }

    /**
     * Tracks synced records and their ids to be able to re-use and reference
     * them through the sync process. Note that this makes the object mutable,
     * but simplifies the sync code.
     *
     * @param array<int, array<string, array<string, int|string>>> $insertUpdateIds
     * @return array<int, array<string, array<string, int|string>>>
     */
    private function addInsertUpdateId($insertUpdateIds, SyncRecord $record): array
    {
        if ($record->insertUpdateId !== null) {
            $insertUpdateIds[$record->storagePage][$record->tableName][$record->syncIdentifier->value] = $record->insertUpdateId;
        }
        return $insertUpdateIds;
    }

    /**
     * @param array<int, array<string, array<string, int|string>>> $insertUpdateIds
     */
    private function getInsertUpdateId($insertUpdateIds, SyncRecord $record): string|int|null
    {
        return $insertUpdateIds[$record->storagePage][$record->tableName][$record->syncIdentifier->value] ?? null;
    }

    /**
     * @return array{0: ActiveRelation, 1: MappingConfiguration}|array{0: null, 1: null}
     */
    private function determineRelationMapping(
        FieldTypeInterface $field,
        string $entityClassName,
        SyncConfiguration $syncConfig
    ): array {
        if (!$field instanceof RelationalFieldTypeInterface) {
            return [null, null];
        }
        foreach ($field->getRelations() as $relation) {
            $mappingConfig = $syncConfig->getMappingForClassNameAndTableName($entityClassName, $relation->toTable());
            if ($mappingConfig instanceof MappingConfiguration) {
                return [$relation, $mappingConfig];
            }
        }
        return [null, null];
    }
}
