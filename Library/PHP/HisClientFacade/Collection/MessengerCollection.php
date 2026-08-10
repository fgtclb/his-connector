<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

use FGTCLB\HisClientFacade\Iterator\MessengerCollectionIterator;
use FGTCLB\HisClientFacade\Model\Messenger;

/**
 * @template-implements \IteratorAggregate<non-negative-int, Messenger>
 *
 * @immutable
 */
final readonly class MessengerCollection implements \IteratorAggregate, CollectionInterface
{
    /**
     * @var list<Messenger>
     */
    private array $items;

    /**
     * @param list<Messenger> $items
     */
    public static function fromArray(array $items): self
    {
        return new self(...$items);
    }

    private function __construct(Messenger ...$items)
    {
        assert(array_is_list($items));
        $this->items = $items;
    }

    /**
     * @return list<Messenger>
     */
    public function asArray(): array
    {
        return $this->items;
    }

    public function getIterator(): MessengerCollectionIterator
    {
        return new MessengerCollectionIterator($this);
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function first(): ?Messenger
    {
        return array_first($this->items);
    }

    public function last(): ?Messenger
    {
        return array_last($this->items);
    }
}
