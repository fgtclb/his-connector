<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Service;

use FGTCLB\HisClientFacade\Model\EntityInterface;
use FGTCLB\HisConnector\Configuration\SyncConfiguration;
use FGTCLB\HisConnector\Event\ProcessSyncRecordEvent;
use FGTCLB\HisConnector\Exception\SyncException;
use FGTCLB\HisConnector\Sync\SyncRecord;
use FGTCLB\HisConnector\Sync\SyncRecordFactory;
use Psr\EventDispatcher\EventDispatcherInterface;

final readonly class DataSynchronizer
{
    public function __construct(
        private EventDispatcherInterface $eventDispatcher,
        private SyncRecordFactory $syncRecordFactory,
    ) {}

    /**
     * Processes an entity according to the sync configuration. Based on the entity
     * type, one or multiple mappings to database tables can be specified in the configuration,
     * which will be used to create intermediary SyncRecord objects. These are then processed
     * by event listeners. The result is an array of SyncRecords that have been processed.
     * Skipped records are not part of the result.
     *
     * @return SyncRecord[]
     */
    public function processEntity(EntityInterface $syncEntity, SyncConfiguration $config): array
    {
        $mappingConfigs = $config->getMappingsForClassName(get_class($syncEntity));
        if (count($mappingConfigs) === 0) {
            throw new SyncException(sprintf(
                'No mapping configuration found for "%s"',
                get_class($syncEntity),
            ), 1786908182);
        }
        $syncedRecords = [];
        foreach ($mappingConfigs as $mappingConfig) {
            $syncRecord = $this->syncRecordFactory->createRecord($syncEntity, $config, $mappingConfig);
            if ($syncRecord === null) {
                // Record should be skipped based on flag in database table
                continue;
            }
            $event = new ProcessSyncRecordEvent($syncRecord, $mappingConfig, $config, $syncEntity);
            $this->eventDispatcher->dispatch($event);
            if (!$event->skipRecord) {
                $syncedRecords[] = $event->syncRecord;
            }
        }
        return $syncedRecords;
    }
}
