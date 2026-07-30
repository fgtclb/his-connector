<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

use FGTCLB\HisClientFacade\Iterator\EmailAddressCollectionIterator;
use FGTCLB\HisClientFacade\Model\EmailAddress;

/**
 * @template-implements \IteratorAggregate<non-negative-int, EmailAddress>
 *
 * @immutable
 */
final readonly class EmailAddressCollection implements \IteratorAggregate, \Countable
{
    /**
     * @var list<EmailAddress>
     */
    private array $items;

    /**
     * @param list<EmailAddress> $items
     */
    public static function fromArray(array $items): self
    {
        return new self(...$items);
    }

    private function __construct(EmailAddress ...$items)
    {
        assert(array_is_list($items));
        $this->items = $items;
    }

    /**
     * @return list<EmailAddress>
     */
    public function asArray(): array
    {
        return $this->items;
    }

    public function getIterator(): EmailAddressCollectionIterator
    {
        return new EmailAddressCollectionIterator($this);
    }

    public function count(): int
    {
        return count($this->items);
    }
}
