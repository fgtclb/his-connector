<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Sync;

interface SyncFieldInterface
{
    public function getName(): string;
    public function getValue(): mixed;
}
