<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Configuration;

use FGTCLB\HisConnector\Exception\InvalidConfigurationException;

final readonly class MappingConfiguration
{
    /**
     * @param array<string, FieldMapping> $fields
     */
    private function __construct(
        public string $entityClassName,
        public string $tableName,
        public string $identifierField,
        public array $fields,
    ) {}

    /**
     * @param mixed[] $config
     */
    public static function fromConfig(array $config): self
    {
        if (!isset($config['entityClassName']) || !isset($config['tableName']) || !isset($config['identifierField'])) {
            throw new InvalidConfigurationException(
                'Invalid mapping configuration supplied, "entityClassName", "tableName" and "identifierField" need to be supplied.',
                1786904651
            );
        }
        $tableName = (string)$config['tableName'];
        $entityClassName = (string)$config['entityClassName'];
        $fieldMappings = [];
        foreach ($config['fields'] ?? [] as $fieldName => $fieldMapping) {
            $fieldMappings[$fieldName] = FieldMapping::fromConfig($fieldMapping, $tableName, (string)$fieldName);
        }
        return new self(
            entityClassName: $entityClassName,
            tableName: $tableName,
            identifierField: (string)$config['identifierField'],
            fields: $fieldMappings,
        );
    }
}
