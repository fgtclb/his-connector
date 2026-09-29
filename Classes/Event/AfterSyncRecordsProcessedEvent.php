<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Event;

use FGTCLB\HisConnector\Configuration\SyncConfiguration;
use FGTCLB\HisConnector\Sync\SyncRecord;

final class AfterSyncRecordsProcessedEvent
{
    /**
     * @param SyncRecord[] $syncedRecords
     */
    public function __construct(
        public readonly array $syncedRecords,
        public readonly SyncConfiguration $syncConfiguration,
    ) {}
}
