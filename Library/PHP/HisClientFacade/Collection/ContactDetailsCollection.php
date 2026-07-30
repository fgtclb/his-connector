<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

use FGTCLB\HisClientFacade\Iterator\ContactDetailsCollectionIterator;
use FGTCLB\HisClientFacade\Model\ContactDetails;

/**
 * @template-implements \IteratorAggregate<non-negative-int, ContactDetails>
 *
 * @immutable
 */
final readonly class ContactDetailsCollection implements \IteratorAggregate, \Countable
{
    /**
     * @var list<ContactDetails>
     */
    private array $items;

    /**
     * @param list<ContactDetails> $items
     */
    public static function fromArray(array $items): self
    {
        return new self(...$items);
    }

    private function __construct(ContactDetails ...$items)
    {
        assert(array_is_list($items));
        $this->items = $items;
    }

    /**
     * @return list<ContactDetails>
     */
    public function asArray(): array
    {
        return $this->items;
    }

    public function getIterator(): ContactDetailsCollectionIterator
    {
        return new ContactDetailsCollectionIterator($this);
    }

    public function count(): int
    {
        return count($this->items);
    }
}
