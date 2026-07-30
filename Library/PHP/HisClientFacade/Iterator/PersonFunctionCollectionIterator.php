<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Iterator;

use FGTCLB\HisClientFacade\Collection\PersonFunctionCollection;
use FGTCLB\HisClientFacade\Model\PersonFunction;

/**
 * @template-implements \Iterator<non-negative-int, PersonFunction>
 */
final class PersonFunctionCollectionIterator implements \Iterator
{
    /**
     * @var list<PersonFunction>
     */
    private readonly array $items;

    /**
     * @var non-negative-int
     */
    private int $position = 0;

    public function __construct(PersonFunctionCollection $collection)
    {
        $this->items = $collection->asArray();
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return isset($this->items[$this->position]);
    }

    /**
     * @return non-negative-int
     */
    public function key(): int
    {
        return $this->position;
    }

    public function current(): PersonFunction
    {
        assert(isset($this->items[$this->position]));

        return $this->items[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }
}
