<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Sync;

final readonly class SyncField
{
    public function __construct(
        public string $name,
        public mixed $value,
    ) {}
}
