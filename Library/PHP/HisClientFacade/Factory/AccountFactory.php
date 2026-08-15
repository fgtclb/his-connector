<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Factory;

use FGTCLB\HisClient\AccountService\Struct\CompleteAccount;
use FGTCLB\HisClientFacade\Model\Account;
use FGTCLB\HisClientFacade\Utility\DateTimeConverter;

readonly class AccountFactory
{
    public function __construct(private DateTimeConverter $dateTimeConverter) {}

    public function create(CompleteAccount $account): Account
    {
        return new Account(
            id: $account->getId(),
            username: $account->getUsername(),
            isLdapAccount: $account->getIsLdapAccount() ?? false,
            validFrom: $this->dateTimeConverter->convert($account->getValidFrom()),
            validTo: $this->dateTimeConverter->convert($account->getValidTo()),
        );
    }
}
