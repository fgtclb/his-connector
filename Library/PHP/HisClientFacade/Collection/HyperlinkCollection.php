<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

use FGTCLB\HisClientFacade\Iterator\HyperlinkCollectionIterator;
use FGTCLB\HisClientFacade\Model\Hyperlink;

/**
 * @template-implements \IteratorAggregate<non-negative-int, Hyperlink>
 *
 * @immutable
 */
final readonly class HyperlinkCollection implements \IteratorAggregate, \Countable
{
    /**
     * @var list<Hyperlink>
     */
    private array $items;

    /**
     * @param list<Hyperlink> $items
     */
    public static function fromArray(array $items): self
    {
        return new self(...$items);
    }

    private function __construct(Hyperlink ...$items)
    {
        assert(array_is_list($items));
        $this->items = $items;
    }

    /**
     * @return list<Hyperlink>
     */
    public function asArray(): array
    {
        return $this->items;
    }

    public function getIterator(): HyperlinkCollectionIterator
    {
        return new HyperlinkCollectionIterator($this);
    }

    public function count(): int
    {
        return count($this->items);
    }
}
