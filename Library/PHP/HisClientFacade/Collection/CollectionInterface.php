<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

use FGTCLB\HisClientFacade\Model\EntityInterface;

/**
 * @template TValue of EntityInterface
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
     * @return self<TValue>
     */
    public function slice(int $offset, ?int $length = null): self;

    /**
     * @return ?TValue
     */
    public function first(): ?EntityInterface;

    /**
     * @return ?TValue
     */
    public function last(): ?EntityInterface;

    /**
     * @return class-string<TValue>
     */
    public static function getItemType(): string;
}
