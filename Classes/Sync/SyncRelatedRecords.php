<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Sync;

final readonly class SyncRelatedRecords implements SyncFieldInterface
{
    /**
     * @param SyncRecord[] $value
     */
    public function __construct(
        private string $name,
        private array $value,
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return SyncRecord[]
     */
    public function getValue(): array
    {
        return $this->value;
    }
}
