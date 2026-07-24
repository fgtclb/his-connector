<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateAccount201712 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateAccount201712 extends AbstractStructBase
{
    /**
     * The account
     * @var \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    protected \FGTCLB\HisClient\AccountService\Struct\Account201712 $account;
    /**
     * Constructor method for updateAccount201712
     * @uses UpdateAccount201712::setAccount()
     * @param \FGTCLB\HisClient\AccountService\Struct\Account201712 $account
     */
    public function __construct(\FGTCLB\HisClient\AccountService\Struct\Account201712 $account)
    {
        $this
            ->setAccount($account);
    }
    /**
     * Get account value
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function getAccount(): \FGTCLB\HisClient\AccountService\Struct\Account201712
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param \FGTCLB\HisClient\AccountService\Struct\Account201712 $account
     * @return \FGTCLB\HisClient\AccountService\Struct\UpdateAccount201712
     */
    public function setAccount(\FGTCLB\HisClient\AccountService\Struct\Account201712 $account): self
    {
        $this->account = $account;
        
        return $this;
    }
}
