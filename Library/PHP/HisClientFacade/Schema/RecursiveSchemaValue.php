<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Schema;

final readonly class RecursiveSchemaValue implements SchemaTypeInterface
{
    public function __construct(
        public string $className,
    ) {}
}
