<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

use FGTCLB\HisClientFacade\Iterator\EmailAddressCollectionIterator;
use FGTCLB\HisClientFacade\Model\EmailAddress;

/**
 * @template-implements CollectionInterface<EmailAddress>
 *
 * @immutable
 */
final readonly class EmailAddressCollection implements CollectionInterface
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

    public function first(): ?EmailAddress
    {
        return array_first($this->items);
    }

    public function last(): ?EmailAddress
    {
        return array_last($this->items);
    }

    public function onlyInDomain(string $domain): self
    {
        return self::fromArray(array_values(array_filter(
            $this->items,
            fn(EmailAddress $emailAddress) => $emailAddress->domain === $domain,
        )));
    }

    public function onlyVerified(): self
    {
        return self::fromArray(array_values(array_filter(
            $this->items,
            fn(EmailAddress $emailAddress) => $emailAddress->isVerified,
        )));
    }

    public function onlyNotVerified(): self
    {
        return self::fromArray(array_values(array_filter(
            $this->items,
            fn(EmailAddress $emailAddress) => !$emailAddress->isVerified,
        )));
    }

    public static function getItemType(): string
    {
        return EmailAddress::class;
    }
}
