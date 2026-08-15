<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class Room implements EntityInterface
{
    public function __construct(
        public int $id,
        public string $defaultText,
        public string $shortText,
        public string $longText,
        public string $uniquename,
        public ?Building $building,
    ) {}

    public function getIdentifier(): string
    {
        return (string)$this->id;
    }
}
