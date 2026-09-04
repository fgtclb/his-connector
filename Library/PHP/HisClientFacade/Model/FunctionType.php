<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class FunctionType implements EntityInterface
{
    public function __construct(
        public int $id,
        public string $uniquename,
        public string $shortText,
        public string $defaultText,
        public string $longText,
    ) {}

    public function getIdentifier(): string
    {
        return sprintf('functionType-%d', $this->id);
    }
}
