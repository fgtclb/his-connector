<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Iterator;

use FGTCLB\HisClientFacade\Collection\PersonAttributeCollection;
use FGTCLB\HisClientFacade\Model\PersonAttribute;

/**
 * @template-implements \Iterator<non-negative-int, PersonAttribute>
 */
final class PersonAttributeCollectionIterator implements \Iterator
{
    /**
     * @var list<PersonAttribute>
     */
    private readonly array $items;

    /**
     * @var non-negative-int
     */
    private int $position = 0;

    public function __construct(PersonAttributeCollection $collection)
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

    public function current(): PersonAttribute
    {
        assert(isset($this->items[$this->position]));

        return $this->items[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }
}
