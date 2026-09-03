<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Configuration;

use FGTCLB\HisConnector\Exception\InvalidConfigurationException;

final readonly class MappingConfiguration
{
    public const DEFAULT_IDENTIFIER_FIELD = 'hisconnector_identifier';

    /**
     * @param class-string $entityClassName
     * @param array<string, FieldMapping> $fields
     */
    private function __construct(
        public string $entityClassName,
        public string $tableName,
        public string $identifierField,
        public ?string $skipField,
        public array $fields,
    ) {}

    /**
     * @param mixed[] $config
     */
    public static function fromConfig(array $config): self
    {
        if (!isset($config['entityClassName']) || !isset($config['tableName'])) {
            throw new InvalidConfigurationException(
                'Invalid mapping configuration supplied, "entityClassName", "tableName" and "identifierField" need to be supplied.',
                1786904651
            );
        }
        $entityClassName = (string)$config['entityClassName'];
        if (!class_exists($entityClassName)) {
            throw new InvalidConfigurationException('Specified entityClassName does not exist: ' . $entityClassName, 1788198253);
        }
        $tableName = (string)$config['tableName'];
        $fieldMappings = [];
        foreach ($config['fields'] ?? [] as $fieldName => $fieldMapping) {
            $fieldMappings[$fieldName] = FieldMapping::fromConfig($fieldMapping, $tableName, (string)$fieldName);
        }
        return new self(
            entityClassName: $entityClassName,
            tableName: $tableName,
            identifierField: (string)($config['identifierField'] ?? self::DEFAULT_IDENTIFIER_FIELD),
            skipField: isset($config['skipField']) ? (string)$config['skipField'] : null,
            fields: $fieldMappings,
        );
    }

    public function usesDefaultIdentifierField(): bool
    {
        return $this->identifierField === self::DEFAULT_IDENTIFIER_FIELD;
    }
}
