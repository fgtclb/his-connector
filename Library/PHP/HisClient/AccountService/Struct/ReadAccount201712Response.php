<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAccount201712Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAccount201712Response extends AbstractStructBase
{
    /**
     * The account
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\AccountService\Struct\Account201712|null
     */
    protected ?\FGTCLB\HisClient\AccountService\Struct\Account201712 $account = null;
    /**
     * Constructor method for readAccount201712Response
     * @uses ReadAccount201712Response::setAccount()
     * @param \FGTCLB\HisClient\AccountService\Struct\Account201712 $account
     */
    public function __construct(?\FGTCLB\HisClient\AccountService\Struct\Account201712 $account = null)
    {
        $this
            ->setAccount($account);
    }
    /**
     * Get account value
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712|null
     */
    public function getAccount(): ?\FGTCLB\HisClient\AccountService\Struct\Account201712
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param \FGTCLB\HisClient\AccountService\Struct\Account201712 $account
     * @return \FGTCLB\HisClient\AccountService\Struct\ReadAccount201712Response
     */
    public function setAccount(?\FGTCLB\HisClient\AccountService\Struct\Account201712 $account = null): self
    {
        $this->account = $account;
        
        return $this;
    }
}
