<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Schema;

final readonly class CollectionType implements SchemaTypeInterface
{
    public function __construct(
        public string $className,
        public ModelType $itemType,
    ) {}
}
