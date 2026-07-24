<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAccountResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAccountResponse extends AbstractStructBase
{
    /**
     * The account
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60|null
     */
    protected ?\FGTCLB\HisClient\AccountService\Struct\CompleteAccount60 $account = null;
    /**
     * Constructor method for readAccountResponse
     * @uses ReadAccountResponse::setAccount()
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60 $account
     */
    public function __construct(?\FGTCLB\HisClient\AccountService\Struct\CompleteAccount60 $account = null)
    {
        $this
            ->setAccount($account);
    }
    /**
     * Get account value
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60|null
     */
    public function getAccount(): ?\FGTCLB\HisClient\AccountService\Struct\CompleteAccount60
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60 $account
     * @return \FGTCLB\HisClient\AccountService\Struct\ReadAccountResponse
     */
    public function setAccount(?\FGTCLB\HisClient\AccountService\Struct\CompleteAccount60 $account = null): self
    {
        $this->account = $account;
        
        return $this;
    }
}
