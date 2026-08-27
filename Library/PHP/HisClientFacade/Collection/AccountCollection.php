<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

use FGTCLB\HisClientFacade\Iterator\AccountCollectionIterator;
use FGTCLB\HisClientFacade\Model\Account;

/**
 * @template-implements CollectionInterface<Account>
 * @template-implements ValidityAwareCollectionInterface<Account>
 *
 * @immutable
 */
final readonly class AccountCollection implements CollectionInterface, ValidityAwareCollectionInterface
{
    /**
     * @var list<Account>
     */
    private array $items;

    /**
     * @param list<Account> $items
     */
    public static function fromArray(array $items): self
    {
        return new self(...$items);
    }

    private function __construct(Account ...$items)
    {
        assert(array_is_list($items));
        $this->items = $items;
    }

    /**
     * @return list<Account>
     */
    public function asArray(): array
    {
        return $this->items;
    }

    public function getIterator(): AccountCollectionIterator
    {
        return new AccountCollectionIterator($this);
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function first(): ?Account
    {
        return array_first($this->items);
    }

    public function last(): ?Account
    {
        return array_last($this->items);
    }

    public function slice(int $offset, ?int $length = null): self
    {
        return self::fromArray(array_slice($this->items, $offset, $length));
    }

    public function onlyValidAt(\DateTimeInterface $at): self
    {
        return self::fromArray(array_values(array_filter(
            $this->items,
            fn(Account $account) => $account->isValidAt($at),
        )));
    }

    public function notValidAt(\DateTimeInterface $at): self
    {
        return self::fromArray(array_values(array_filter(
            $this->items,
            fn(Account $account) => !$account->isValidAt($at),
        )));
    }

    public function onlyLdap(): self
    {
        return self::fromArray(array_values(array_filter(
            $this->items,
            fn(Account $account) => $account->isLdapAccount,
        )));
    }

    public static function getItemType(): string
    {
        return Account::class;
    }
}
