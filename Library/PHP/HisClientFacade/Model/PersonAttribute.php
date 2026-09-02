<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class PersonAttribute implements EntityInterface
{
    public function __construct(
        public int $personId,
        public string $name,
        public ?string $value,
    ) {}

    public function getIdentifier(): string
    {
        return sprintf('personAttribute-%s-%d', $this->name, $this->personId);
    }
}
