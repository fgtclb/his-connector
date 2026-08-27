<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

use FGTCLB\HisClientFacade\Iterator\HyperlinkCollectionIterator;
use FGTCLB\HisClientFacade\Model\Hyperlink;

/**
 * @template-implements CollectionInterface<Hyperlink>
 *
 * @immutable
 */
final readonly class HyperlinkCollection implements CollectionInterface
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

    public function first(): ?Hyperlink
    {
        return array_first($this->items);
    }

    public function last(): ?Hyperlink
    {
        return array_last($this->items);
    }

    public function slice(int $offset, ?int $length = null): self
    {
        return self::fromArray(array_slice($this->items, $offset, $length));
    }

    public function onlyInDomain(string $domain): self
    {
        return self::fromArray(array_values(array_filter(
            $this->items,
            fn(Hyperlink $hyperlink) => $hyperlink->domain === $domain,
        )));
    }

    public function onlyOfType(string $type): self
    {
        return self::fromArray(array_values(array_filter(
            $this->items,
            fn(Hyperlink $hyperlink) => $hyperlink->type === $type,
        )));
    }

    public static function getItemType(): string
    {
        return Hyperlink::class;
    }
}
