<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

use FGTCLB\HisClient\KeyvalueService\Struct\CountryValue;

final readonly class PostAddress
{
    public function __construct(
        public string $postcode,
        public string $street,
        public string $city,
        public ?string $addressaddition,
        public ?string $postofficebox,
        public ?string $company,
        public ?string $state,
        public ?CountryValue $country,
        public ?string $domain,
    ) {}
}
