<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

use FGTCLB\HisClientFacade\Iterator\PostAddressCollectionIterator;
use FGTCLB\HisClientFacade\Model\PostAddress;

/**
 * @template-implements \IteratorAggregate<non-negative-int, PostAddress>
 *
 * @immutable
 */
final readonly class PostAddressCollection implements \IteratorAggregate, CollectionInterface, ValidityAwareCollectionInterface
{
    /**
     * @var list<PostAddress>
     */
    private array $items;

    /**
     * @param list<PostAddress> $items
     */
    public static function fromArray(array $items): self
    {
        return new self(...$items);
    }

    private function __construct(PostAddress ...$items)
    {
        assert(array_is_list($items));
        $this->items = $items;
    }

    /**
     * @return list<PostAddress>
     */
    public function asArray(): array
    {
        return $this->items;
    }

    public function getIterator(): PostAddressCollectionIterator
    {
        return new PostAddressCollectionIterator($this);
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function first(): ?PostAddress
    {
        return array_first($this->items);
    }

    public function last(): ?PostAddress
    {
        return array_last($this->items);
    }

    public function onlyValidAt(\DateTimeInterface $at): self
    {
        return self::fromArray(array_values(array_filter(
            $this->items,
            fn(PostAddress $postAddress) => $postAddress->isValidAt($at),
        )));
    }

    public function notValidAt(\DateTimeInterface $at): self
    {
        return self::fromArray(array_values(array_filter(
            $this->items,
            fn(PostAddress $postAddress) => !$postAddress->isValidAt($at),
        )));
    }

    public static function getItemType(): string
    {
        return PostAddress::class;
    }
}
