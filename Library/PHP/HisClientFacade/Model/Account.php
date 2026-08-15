<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class Account implements EntityInterface, ValidityAwareEntityInterface
{
    use ValidityAwareEntityTrait;

    public function __construct(
        public int $id,
        public string $username,
        public bool $isLdapAccount,
        public ?\DateTimeInterface $validFrom,
        public ?\DateTimeInterface $validTo,
    ) {}

    public function getIdentifier(): string
    {
        return (string)$this->id;
    }
}
