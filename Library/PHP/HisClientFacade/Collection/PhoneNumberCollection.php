<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

use FGTCLB\HisClientFacade\Iterator\PhoneNumberCollectionIterator;
use FGTCLB\HisClientFacade\Model\PhoneNumber;

/**
 * @template-implements \IteratorAggregate<non-negative-int, PhoneNumber>
 *
 * @immutable
 */
final readonly class PhoneNumberCollection implements \IteratorAggregate, \Countable
{
    /**
     * @var list<PhoneNumber>
     */
    private array $items;

    /**
     * @param list<PhoneNumber> $items
     */
    public static function fromArray(array $items): self
    {
        return new self(...$items);
    }

    private function __construct(PhoneNumber ...$items)
    {
        assert(array_is_list($items));
        $this->items = $items;
    }

    /**
     * @return list<PhoneNumber>
     */
    public function asArray(): array
    {
        return $this->items;
    }

    public function getIterator(): PhoneNumberCollectionIterator
    {
        return new PhoneNumberCollectionIterator($this);
    }

    public function count(): int
    {
        return count($this->items);
    }
}
