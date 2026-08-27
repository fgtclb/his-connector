<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Configuration;

final readonly class SyncConfiguration
{
    /**
     * @param MappingConfiguration[] $mapping
     */
    private function __construct(
        public string $name,
        public string $description,
        public string $version,
        public string $schema,
        public DataSource $source,
        public array $mapping,
        public ?string $originalFile,
    ) {}

    /**
     * @param mixed[] $config
     */
    public static function fromConfig(array $config, ?string $originalFile = null): self
    {
        // TODO validate that there are no duplicate mappings (entity+table combinations)
        return new self(
            name: (string)($config['name'] ?? ($originalFile ? basename($originalFile) : '')),
            description: (string)($config['description'] ?? ''),
            version: (string)($config['version'] ?? ''),
            schema: (string)($config['schema'] ?? ''),
            source: DataSource::fromConfig($config['source'] ?? []),
            mapping: array_map(MappingConfiguration::fromConfig(...), $config['mapping'] ?? []),
            originalFile: $originalFile,
        );
    }

    public function getMappingForClassNameAndTableName(string $className, string $tableName): ?MappingConfiguration
    {
        return array_find(
            $this->mapping,
            fn(MappingConfiguration $mapping) => $mapping->entityClassName === $className && $mapping->tableName === $tableName,
        );
    }

    /**
     * @return MappingConfiguration[]
     */
    public function getMappingsForClassName(string $className): array
    {
        return array_filter(
            $this->mapping,
            fn(MappingConfiguration $mapping) => $mapping->entityClassName === $className,
        );
    }
}
