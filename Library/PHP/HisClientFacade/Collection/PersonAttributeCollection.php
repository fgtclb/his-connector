<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

use FGTCLB\HisClientFacade\Iterator\PersonAttributeCollectionIterator;
use FGTCLB\HisClientFacade\Model\PersonAttribute;

/**
 * @template-implements \IteratorAggregate<non-negative-int, PersonAttribute>
 *
 * @immutable
 */
final readonly class PersonAttributeCollection implements \IteratorAggregate, \Countable
{
    /**
     * @var list<PersonAttribute>
     */
    private array $items;

    /**
     * @param list<PersonAttribute> $items
     */
    public static function fromArray(array $items): self
    {
        return new self(...$items);
    }

    private function __construct(PersonAttribute ...$items)
    {
        assert(array_is_list($items));
        $this->items = $items;
    }

    /**
     * @return list<PersonAttribute>
     */
    public function asArray(): array
    {
        return $this->items;
    }

    public function getIterator(): PersonAttributeCollectionIterator
    {
        return new PersonAttributeCollectionIterator($this);
    }

    public function count(): int
    {
        return count($this->items);
    }
}
