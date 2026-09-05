<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Sync;

use FGTCLB\HisConnector\Configuration\MappingConfiguration;

interface SyncRecordStatusCheckerInterface
{
    public function recordShouldBeSkipped(SyncRecord $syncRecord, MappingConfiguration $mappingConfig): bool;

    public function determineInsertUpdateIdFromDatabase(SyncRecord $syncRecord): ?int;
}
