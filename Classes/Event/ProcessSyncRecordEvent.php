<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Event;

use FGTCLB\HisClientFacade\Model\EntityInterface;
use FGTCLB\HisConnector\Configuration\MappingConfiguration;
use FGTCLB\HisConnector\Configuration\SyncConfiguration;
use FGTCLB\HisConnector\Sync\SyncRecord;
use Psr\EventDispatcher\StoppableEventInterface;

final class ProcessSyncRecordEvent implements StoppableEventInterface
{
    public function __construct(
        public SyncRecord $syncRecord,
        public readonly MappingConfiguration $mappingConfiguration,
        public readonly SyncConfiguration $syncConfiguration,
        public readonly EntityInterface $originalEntity,
        public bool $skipRecord = false,
    ) {}

    public function isPropagationStopped(): bool
    {
        return $this->skipRecord;
    }
}
