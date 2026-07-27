<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class Messenger
{
    public function __construct(
        public string $account,
        public ?string $type,
        public ?string $domain,
    ) {}
}
