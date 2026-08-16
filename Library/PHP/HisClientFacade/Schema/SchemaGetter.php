<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Schema;

final readonly class SchemaGetter
{
    public function __construct(
        public string $methodName,
        public string $propertyName,
        public SchemaTypeInterface $type,
        public bool $isNullable,
    ) {}
}
