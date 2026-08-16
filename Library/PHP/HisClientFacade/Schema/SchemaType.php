<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Schema;

final readonly class SchemaType implements SchemaTypeInterface
{
    /**
     * @param array<string, SchemaProperty> $properties
     * @param array<string, SchemaGetter> $getters
     */
    public function __construct(
        public string $className,
        public array $properties,
        public array $getters,
    ) {}

    public function getPropertyOrGetter(string $name): SchemaProperty|SchemaGetter|null
    {
        return $this->getters[$name] ?? $this->properties[$name] ?? null;
    }
}
