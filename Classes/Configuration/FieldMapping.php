<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Configuration;

use FGTCLB\HisConnector\Exception\InvalidConfigurationException;

final readonly class FieldMapping
{
    /**
     * @param mixed $fallbackValue Can be used to set a default if the result of the mapping process leads to "null"
     * @param ValueMapping[]|null $valueMapping
     * @param mixed $valueMappingDefault Will be used if none of the value mapping options match the source value
     */
    private function __construct(
        public string $tableName,
        public string $fieldName,
        public SourceField|SourceExpression $sourceField,
        public mixed $fallbackValue,
        public ?array $valueMapping,
        public mixed $valueMappingDefault,
    ) {}

    /**
     * @param mixed[] $config
     */
    public static function fromConfig(array $config, string $tableName, string $fieldName): self
    {
        if (!isset($config['sourceExpression']) && !isset($config['sourceField'])) {
            throw new InvalidConfigurationException(
                'Invalid field mapping supplied, either "sourceExpression" or "sourceField" need to be supplied.',
                1786904652
            );
        }
        if (isset($config['sourceExpression']) && isset($config['sourceField'])) {
            throw new InvalidConfigurationException(
                'Only "sourceExpression" or "sourceField" can be supplied.',
                1787837443
            );
        }
        return new self(
            tableName: $tableName,
            fieldName: $fieldName,
            sourceField: isset($config['sourceExpression'])
                ? new SourceExpression((string)$config['sourceExpression'])
                : new SourceField((string)$config['sourceField']),
            fallbackValue: $config['fallbackValue'] ?? null,
            valueMapping: isset($config['valueMapping']) && is_array($config['valueMapping'])
                ? array_map(ValueMapping::fromConfig(...), $config['valueMapping'])
                : null,
            valueMappingDefault: $config['valueMappingDefault'] ?? null,
        );
    }
}
