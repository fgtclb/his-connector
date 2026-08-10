<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class EmailAddress
{
    public function __construct(
        public string $email,
        public bool $isVerified,
        public ?string $domain,
    ) {}
}
