<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\EventListener;

use FGTCLB\HisConnector\Configuration\SyncStrategy;
use FGTCLB\HisConnector\Event\AfterSyncRecordsProcessedEvent;
use FGTCLB\HisConnector\Sync\SyncRecord;
use FGTCLB\HisConnector\Sync\SyncRelatedRecords;
use TYPO3\CMS\Core\Attribute\AsEventListener;
use TYPO3\CMS\Core\Database\Connection;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Schema\Capability\FieldCapability;
use TYPO3\CMS\Core\Schema\Capability\SystemInternalFieldCapability;
use TYPO3\CMS\Core\Schema\Capability\TcaSchemaCapability;
use TYPO3\CMS\Core\Schema\TcaSchemaFactory;

/**
 * Applies the "removeDeleted" and "disableDeleted" sync strategies to
 * a storage folder after the sync process has been completed. Note that
 * this implementation does not cover all edge cases, which can lead to
 * unexpected results. This is the reason why "keepDeleted" remains the default
 * strategy.
 *
 * The current approach does NOT:
 * - make sure that records are still valid after the strategy has been
 *   executed (e. g. that "minitems" and "maxitems" constraints are still met)
 * - support multiple syncs with different data sources performed on one storage
 *   folder (each sync disables/removes records from the other sync)
 * - check if relations are still referenced from other TYPO3 records that
 *   aren't part of the sync
 * - delete unused sys_file/sys_file_metadata records
 */
#[AsEventListener(
    identifier: 'his-connector/remove-deleted-records',
)]
final readonly class RemoveDeletedRecordsEventListener
{
    public function __construct(
        private ConnectionPool $connectionPool,
        private TcaSchemaFactory $tcaSchemaFactory,
    ) {}

    public function __invoke(AfterSyncRecordsProcessedEvent $event): void
    {
        $syncStrategy = $event->syncConfiguration->syncStrategy;
        if ($syncStrategy == SyncStrategy::KeepDeleted) {
            return;
        }
        $keepRecords = [];
        foreach ($event->syncedRecords as $syncedRecord) {
            $keepRecords = $this->collectRecordsToKeep($syncedRecord, $keepRecords);
        }
        $this->executeSyncStrategy($keepRecords, $syncStrategy);
    }

    /**
     * @param array<string, array<int, array<string, int[]>>> $keepRecords
     * @return array<string, array<int, array<string, int[]>>>
     */
    private function collectRecordsToKeep(SyncRecord $syncRecord, array $keepRecords = []): array
    {
        if (!is_int($syncRecord->insertUpdateId)) {
            return $keepRecords;
        }
        $keepRecords[$syncRecord->tableName][$syncRecord->storagePage][$syncRecord->syncIdentifier->getName()][] = $syncRecord->insertUpdateId;
        foreach ($syncRecord->getFields() as $field) {
            if ($field instanceof SyncRelatedRecords) {
                foreach ($field->getValue() as $relatedRecord) {
                    $keepRecords = $this->collectRecordsToKeep($relatedRecord, $keepRecords);
                }
            }
        }
        return $keepRecords;
    }

    /**
     * @param array<string, array<int, array<string, int[]>>> $keepRecords
     * @param SyncStrategy $syncStrategy
     */
    private function executeSyncStrategy(array $keepRecords, SyncStrategy $syncStrategy): void
    {
        foreach ($keepRecords as $tableName => $perStoragePage) {
            $tcaSchema = $this->tcaSchemaFactory->get($tableName);
            foreach ($perStoragePage as $storagePage => $perSyncIdentifierColumn) {
                foreach ($perSyncIdentifierColumn as $syncIdentifierColumn => $keepRecordUids) {
                    $queryBuilder = $this->connectionPool->getQueryBuilderForTable($tableName);
                    $queryBuilder->where(
                        $queryBuilder->expr()->eq('pid', $queryBuilder->createNamedParameter($storagePage, Connection::PARAM_INT)),
                        $queryBuilder->expr()->neq($syncIdentifierColumn, $queryBuilder->createNamedParameter('')),
                        $queryBuilder->expr()->notIn('uid', $keepRecordUids),
                    );
                    switch ($syncStrategy) {
                        case SyncStrategy::DisableDeleted:
                            if (!$tcaSchema->hasCapability(TcaSchemaCapability::RestrictionDisabledField)) {
                                continue 2;
                            }
                            /** @var FieldCapability */
                            $capability = $tcaSchema->getCapability(TcaSchemaCapability::RestrictionDisabledField);
                            $queryBuilder
                                ->update($tableName)
                                ->set($capability->getFieldName(), '1');
                            break;

                        case SyncStrategy::RemoveDeleted:
                            if ($tcaSchema->hasCapability(TcaSchemaCapability::SoftDelete)) {
                                /** @var SystemInternalFieldCapability */
                                $capability = $tcaSchema->getCapability(TcaSchemaCapability::SoftDelete);
                                $queryBuilder
                                    ->update($tableName)
                                    ->set($capability->getFieldName(), '1');
                            } else {
                                $queryBuilder->delete($tableName);
                            }
                            break;

                        default:
                            continue 2;
                    }
                    $queryBuilder->executeStatement();
                }
            }
        }
    }
}
