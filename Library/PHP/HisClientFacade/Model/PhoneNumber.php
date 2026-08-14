<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class PhoneNumber implements EntityInterface
{
    public function __construct(
        public int $id,
        public string $phoneNumber,
        public ?string $type,
        public ?string $domain,
    ) {}

    public function getIdentifier(): string
    {
        return (string)$this->id;
    }
}
