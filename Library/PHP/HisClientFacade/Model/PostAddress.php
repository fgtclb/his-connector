<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

use FGTCLB\HisClient\KeyvalueService\Struct\CountryValue;

final readonly class PostAddress implements EntityInterface, ValidityAwareEntityInterface
{
    use ValidityAwareEntityTrait;

    public function __construct(
        public int $id,
        public string $postcode,
        public string $street,
        public string $city,
        public ?string $addressaddition,
        public ?string $postofficebox,
        public ?string $company,
        public ?string $state,
        public ?CountryValue $country,
        public ?string $domain,
        public ?\DateTimeInterface $validFrom,
        public ?\DateTimeInterface $validTo,
    ) {}

    public function getIdentifier(): string
    {
        return sprintf('postAddress-%d', $this->id);
    }
}
