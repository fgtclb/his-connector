<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

use FGTCLB\HisClientFacade\Iterator\PersonCollectionIterator;
use FGTCLB\HisClientFacade\Model\Person;

/**
 * @template-implements CollectionInterface<Person>
 *
 * @immutable
 */
final readonly class PersonCollection implements CollectionInterface
{
    /**
     * @var list<Person>
     */
    private array $items;

    /**
     * @param list<Person> $items
     */
    public static function fromArray(array $items): self
    {
        return new self(...$items);
    }

    private function __construct(Person ...$items)
    {
        assert(array_is_list($items));
        $this->items = $items;
    }

    /**
     * @return list<Person>
     */
    public function asArray(): array
    {
        return $this->items;
    }

    public function getIterator(): PersonCollectionIterator
    {
        return new PersonCollectionIterator($this);
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function first(): ?Person
    {
        return array_first($this->items);
    }

    public function last(): ?Person
    {
        return array_last($this->items);
    }

    public static function getItemType(): string
    {
        return Person::class;
    }
}
