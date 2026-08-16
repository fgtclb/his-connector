<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Schema;

final readonly class ValueType implements SchemaTypeInterface
{
    public function __construct(
        public string $type,
    ) {}
}
