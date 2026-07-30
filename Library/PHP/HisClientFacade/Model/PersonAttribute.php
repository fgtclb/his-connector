<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class PersonAttribute
{
    public function __construct(
        public string $name,
        public ?string $value,
    ) {}
}
