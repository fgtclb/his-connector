<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class Hyperlink
{
    public function __construct(
        public string $hyperlink,
        public ?string $type,
        public ?string $domain,
    ) {}
}
