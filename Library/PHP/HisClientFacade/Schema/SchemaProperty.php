<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Schema;

final readonly class SchemaProperty
{
    public function __construct(
        public string $propertyName,
        public SchemaTypeInterface $type,
        public bool $isNullable,
    ) {}
}
