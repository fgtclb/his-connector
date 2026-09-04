<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class Messenger implements EntityInterface
{
    public function __construct(
        public int $id,
        public string $account,
        public ?string $type,
        public ?string $domain,
    ) {}

    public function getIdentifier(): string
    {
        return sprintf('messenger-%d', $this->id);
    }
}
