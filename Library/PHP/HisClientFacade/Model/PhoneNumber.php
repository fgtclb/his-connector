<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class PhoneNumber
{
    public function __construct(
        public string $phoneNumber,
        public ?string $type,
        public ?string $domain,
    ) {}
}
