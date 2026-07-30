<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Iterator;

use FGTCLB\HisClientFacade\Collection\PersonCollection;
use FGTCLB\HisClientFacade\Model\Person;

/**
 * @template-implements \Iterator<non-negative-int, Person>
 */
final class PersonCollectionIterator implements \Iterator
{
    /**
     * @var list<Person>
     */
    private readonly array $items;

    /**
     * @var non-negative-int
     */
    private int $position = 0;

    public function __construct(PersonCollection $collection)
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

    public function current(): Person
    {
        assert(isset($this->items[$this->position]));

        return $this->items[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }
}
