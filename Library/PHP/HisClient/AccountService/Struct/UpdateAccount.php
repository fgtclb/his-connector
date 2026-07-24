<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateAccount Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateAccount extends AbstractStructBase
{
    /**
     * The account
     * @var \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60
     */
    protected \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60 $account;
    /**
     * Constructor method for updateAccount
     * @uses UpdateAccount::setAccount()
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60 $account
     */
    public function __construct(\FGTCLB\HisClient\AccountService\Struct\CompleteAccount60 $account)
    {
        $this
            ->setAccount($account);
    }
    /**
     * Get account value
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60
     */
    public function getAccount(): \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60 $account
     * @return \FGTCLB\HisClient\AccountService\Struct\UpdateAccount
     */
    public function setAccount(\FGTCLB\HisClient\AccountService\Struct\CompleteAccount60 $account): self
    {
        $this->account = $account;
        
        return $this;
    }
}
