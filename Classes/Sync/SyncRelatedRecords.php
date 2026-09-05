<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Sync;

final readonly class SyncRelatedRecords
{
    /**
     * @param SyncRecord[] $value
     */
    public function __construct(
        public string $name,
        public array $value,
    ) {}
}
