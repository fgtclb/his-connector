<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

use FGTCLB\HisClientFacade\Iterator\PersonPictureCollectionIterator;
use FGTCLB\HisClientFacade\Model\PersonPicture;

/**
 * @template-implements CollectionInterface<PersonPicture>
 *
 * @immutable
 */
final readonly class PersonPictureCollection implements CollectionInterface
{
    /**
     * @var list<PersonPicture>
     */
    private array $items;

    /**
     * @param list<PersonPicture> $items
     */
    public static function fromArray(array $items): self
    {
        return new self(...$items);
    }

    private function __construct(PersonPicture ...$items)
    {
        assert(array_is_list($items));
        $this->items = $items;
    }

    /**
     * @return list<PersonPicture>
     */
    public function asArray(): array
    {
        return $this->items;
    }

    public function getIterator(): PersonPictureCollectionIterator
    {
        return new PersonPictureCollectionIterator($this);
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function first(): ?PersonPicture
    {
        return array_first($this->items);
    }

    public function last(): ?PersonPicture
    {
        return array_last($this->items);
    }

    public function slice(int $offset, ?int $length = null): self
    {
        return self::fromArray(array_slice($this->items, $offset, $length));
    }

    public static function getItemType(): string
    {
        return PersonPicture::class;
    }
}
