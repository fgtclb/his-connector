<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Configuration;

final readonly class ValueMapping
{
    private function __construct(public mixed $source, public mixed $target) {}

    /**
     * @param mixed[] $config
     */
    public static function fromConfig(array $config): self
    {
        return new self(
            source: $config['source'] ?? null,
            target: $config['target'] ?? null,
        );
    }
}
