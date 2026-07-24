<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchAccountForPersonResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchAccountForPersonResponse extends AbstractStructBase
{
    /**
     * The completeAccounts
     * Meta information extracted from the WSDL
     * - documentation: A list of accounts.
     * @var \FGTCLB\HisClient\AccountService\Struct\CompleteAccountsType
     */
    protected \FGTCLB\HisClient\AccountService\Struct\CompleteAccountsType $completeAccounts;
    /**
     * Constructor method for searchAccountForPersonResponse
     * @uses SearchAccountForPersonResponse::setCompleteAccounts()
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccountsType $completeAccounts
     */
    public function __construct(\FGTCLB\HisClient\AccountService\Struct\CompleteAccountsType $completeAccounts)
    {
        $this
            ->setCompleteAccounts($completeAccounts);
    }
    /**
     * Get completeAccounts value
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccountsType
     */
    public function getCompleteAccounts(): \FGTCLB\HisClient\AccountService\Struct\CompleteAccountsType
    {
        return $this->completeAccounts;
    }
    /**
     * Set completeAccounts value
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccountsType $completeAccounts
     * @return \FGTCLB\HisClient\AccountService\Struct\SearchAccountForPersonResponse
     */
    public function setCompleteAccounts(\FGTCLB\HisClient\AccountService\Struct\CompleteAccountsType $completeAccounts): self
    {
        $this->completeAccounts = $completeAccounts;
        
        return $this;
    }
}
