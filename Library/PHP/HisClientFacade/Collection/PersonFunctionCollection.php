<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

use FGTCLB\HisClientFacade\Iterator\PersonFunctionCollectionIterator;
use FGTCLB\HisClientFacade\Model\PersonFunction;

/**
 * @template-implements CollectionInterface<PersonFunction>
 * @template-implements ValidityAwareCollectionInterface<PersonFunction>
 *
 * @immutable
 */
final readonly class PersonFunctionCollection implements CollectionInterface, ValidityAwareCollectionInterface
{
    /**
     * @var list<PersonFunction>
     */
    private array $items;

    /**
     * @param list<PersonFunction> $items
     */
    public static function fromArray(array $items): self
    {
        return new self(...$items);
    }

    private function __construct(PersonFunction ...$items)
    {
        assert(array_is_list($items));
        $this->items = $items;
    }

    /**
     * @return list<PersonFunction>
     */
    public function asArray(): array
    {
        return $this->items;
    }

    public function getIterator(): PersonFunctionCollectionIterator
    {
        return new PersonFunctionCollectionIterator($this);
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function first(): ?PersonFunction
    {
        return array_first($this->items);
    }

    public function last(): ?PersonFunction
    {
        return array_last($this->items);
    }

    public function onlyValidAt(\DateTimeInterface $at): self
    {
        return self::fromArray(array_values(array_filter(
            $this->items,
            fn(PersonFunction $personFunction) => $personFunction->isValidAt($at),
        )));
    }

    public function notValidAt(\DateTimeInterface $at): self
    {
        return self::fromArray(array_values(array_filter(
            $this->items,
            fn(PersonFunction $personFunction) => !$personFunction->isValidAt($at),
        )));
    }

    public static function getItemType(): string
    {
        return PersonFunction::class;
    }
}
