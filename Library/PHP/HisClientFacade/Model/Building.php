<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class Building implements EntityInterface
{
    public function __construct(
        public int $id,
        public string $building,
        public string $campus,
        public ?PostAddress $postAddress,
    ) {}

    public function getIdentifier(): string
    {
        return sprintf('building-%d', $this->id);
    }
}
