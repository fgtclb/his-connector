<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

use FGTCLB\HisClientFacade\Iterator\PersonCollectionIterator;
use FGTCLB\HisClientFacade\Model\Person;

/**
 * Collection of Persons. Note that this collection isn't immutable because
 * it can either contain Person objects or closures that fetch the relevant
 * data and return a Person object lazily. This allows fetching only the
 * requested records from SOAP transparently.
 *
 * @todo improve/simplify extension once PHP 8.4 is available, which supports
 *       lazy objects
 *
 * @template-implements CollectionInterface<Person>
 */
final class PersonCollection implements CollectionInterface
{
    /**
     * @var list<(\Closure(): Person)|Person>
     */
    private array $items;

    /**
     * @param list<Person>|list<\Closure(): Person> $items
     */
    public static function fromArray(array $items): self
    {
        return new self(...$items);
    }

    private function __construct(Person|\Closure ...$items)
    {
        assert(array_is_list($items));
        $this->items = $items;
    }

    /**
     * @return list<Person>
     */
    public function asArray(): array
    {
        $this->items = array_map(
            fn(Person|\Closure $item) => $item instanceof \Closure ? $item() : $item,
            $this->items,
        );
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
        $first = $this->items[0] ?? null;
        if ($first instanceof \Closure) {
            $this->items[0] = $first = $first();
        }
        return $first;
    }

    public function last(): ?Person
    {
        $i = count($this->items) - 1;
        $last = $this->items[$i] ?? null;
        if ($last instanceof \Closure) {
            $this->items[$i] = $last = $last();
        }
        return $last;
    }

    public static function getItemType(): string
    {
        return Person::class;
    }

    public function slice(int $offset, ?int $length = null): self
    {
        return self::fromArray(array_slice($this->items, $offset, $length));
    }
}
