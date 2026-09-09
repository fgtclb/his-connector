<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Sync;

final readonly class SyncRelatedFiles implements SyncFieldInterface
{
    /**
     * @param SyncFile[] $value
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
     * @return SyncFile[]
     */
    public function getValue(): array
    {
        return $this->value;
    }
}
