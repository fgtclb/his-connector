<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

/**
 * @template TValue of object
 * @template-extends \IteratorAggregate<non-negative-int, TValue>
 */
interface CollectionInterface extends \IteratorAggregate, \Countable
{
    /**
     * @return \Traversable<non-negative-int, TValue>
     */
    public function getIterator(): \Traversable;

    /**
     * @param TValue[] $items
     * @return self<TValue>
     */
    public static function fromArray(array $items): self;

    /**
     * @return TValue[]
     */
    public function asArray(): array;

    /**
     * @return ?TValue
     */
    public function first(): ?object;

    /**
     * @return ?TValue
     */
    public function last(): ?object;

    /**
     * @return class-string<TValue>
     */
    public static function getItemType(): string;
}
