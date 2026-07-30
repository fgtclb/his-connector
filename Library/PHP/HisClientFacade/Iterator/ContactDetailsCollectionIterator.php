<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Iterator;

use FGTCLB\HisClientFacade\Collection\ContactDetailsCollection;
use FGTCLB\HisClientFacade\Model\ContactDetails;

/**
 * @template-implements \Iterator<non-negative-int, ContactDetails>
 */
final class ContactDetailsCollectionIterator implements \Iterator
{
    /**
     * @var list<ContactDetails>
     */
    private readonly array $items;

    /**
     * @var non-negative-int
     */
    private int $position = 0;

    public function __construct(ContactDetailsCollection $collection)
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

    public function current(): ContactDetails
    {
        assert(isset($this->items[$this->position]));

        return $this->items[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }
}
