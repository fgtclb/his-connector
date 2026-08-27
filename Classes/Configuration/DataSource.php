<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Configuration;

use FGTCLB\HisConnector\Exception\InvalidConfigurationException;

final readonly class DataSource
{
    /**
     * @param array<string, mixed> $filter
     */
    private function __construct(
        public string $repository,
        public string $fetch,
        public array $filter,
    ) {}

    /**
     * @param mixed[] $config
     */
    public static function fromConfig(array $config): self
    {
        if (!isset($config['repository']) || !isset($config['fetch'])) {
            throw new InvalidConfigurationException(
                'Invalid data source supplied, both "repository" and "fetch" need to be supplied.',
                1786904650
            );
        }
        return new self(
            repository: (string)$config['repository'],
            fetch: (string)$config['fetch'],
            filter: $config['filter'] ?? [],
        );
    }
}
