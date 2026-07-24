<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createAccount Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateAccount extends AbstractStructBase
{
    /**
     * The account
     * @var \FGTCLB\HisClient\AccountService\Struct\NewAccount
     */
    protected \FGTCLB\HisClient\AccountService\Struct\NewAccount $account;
    /**
     * Constructor method for createAccount
     * @uses CreateAccount::setAccount()
     * @param \FGTCLB\HisClient\AccountService\Struct\NewAccount $account
     */
    public function __construct(\FGTCLB\HisClient\AccountService\Struct\NewAccount $account)
    {
        $this
            ->setAccount($account);
    }
    /**
     * Get account value
     * @return \FGTCLB\HisClient\AccountService\Struct\NewAccount
     */
    public function getAccount(): \FGTCLB\HisClient\AccountService\Struct\NewAccount
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param \FGTCLB\HisClient\AccountService\Struct\NewAccount $account
     * @return \FGTCLB\HisClient\AccountService\Struct\CreateAccount
     */
    public function setAccount(\FGTCLB\HisClient\AccountService\Struct\NewAccount $account): self
    {
        $this->account = $account;
        
        return $this;
    }
}
