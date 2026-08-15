<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class OrgUnit implements EntityInterface, ValidityAwareEntityInterface
{
    use ValidityAwareEntityTrait;

    public function __construct(
        public int $lid,
        public string $displayText,
        public string $shortText,
        public string $longText,
        public string $uniquename,
        public ?OrgUnit $parent,
        public ?\DateTimeInterface $validFrom,
        public ?\DateTimeInterface $validTo,
    ) {}

    public function getIdentifier(): string
    {
        return (string)$this->lid;
    }
}
