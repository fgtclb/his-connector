<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class EmailAddress implements EntityInterface
{
    public function __construct(
        public int $id,
        public string $email,
        public bool $isVerified,
        public ?string $domain,
    ) {}

    public function getIdentifier(): string
    {
        return (string)$this->id;
    }
}
