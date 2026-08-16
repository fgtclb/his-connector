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
final readonly class PhoneNumberCollection implements \IteratorAggregate, CollectionInterface
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

    public function first(): ?PhoneNumber
    {
        return array_first($this->items);
    }

    public function last(): ?PhoneNumber
    {
        return array_last($this->items);
    }

    public function onlyInDomain(string $domain): self
    {
        return self::fromArray(array_values(array_filter(
            $this->items,
            fn(PhoneNumber $phoneNumber) => $phoneNumber->domain === $domain,
        )));
    }

    public function onlyOfType(string $type): self
    {
        return self::fromArray(array_values(array_filter(
            $this->items,
            fn(PhoneNumber $phoneNumber) => $phoneNumber->type === $type,
        )));
    }

    public static function getItemType(): string
    {
        return PhoneNumber::class;
    }
}
