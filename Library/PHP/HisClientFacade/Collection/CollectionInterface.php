<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

interface CollectionInterface extends \Countable
{
    /**
     * @param object[] $items
     */
    public static function fromArray(array $items): self;

    /**
     * @return object[]
     */
    public function asArray(): array;

    public function first(): ?object;

    public function last(): ?object;
}
