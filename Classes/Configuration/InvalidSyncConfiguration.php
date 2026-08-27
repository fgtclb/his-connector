<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Configuration;

final readonly class InvalidSyncConfiguration
{
    public function __construct(
        public \Exception $exception,
        public ?string $originalFile,
    ) {}
}
