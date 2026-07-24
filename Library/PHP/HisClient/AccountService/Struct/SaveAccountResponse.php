<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveAccountResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAccountResponse extends AbstractStructBase
{
    /**
     * The savedAccounts
     * Meta information extracted from the WSDL
     * - documentation: A list of accounts.
     * @var \FGTCLB\HisClient\AccountService\Struct\SavedAccountsType
     */
    protected \FGTCLB\HisClient\AccountService\Struct\SavedAccountsType $savedAccounts;
    /**
     * Constructor method for saveAccountResponse
     * @uses SaveAccountResponse::setSavedAccounts()
     * @param \FGTCLB\HisClient\AccountService\Struct\SavedAccountsType $savedAccounts
     */
    public function __construct(\FGTCLB\HisClient\AccountService\Struct\SavedAccountsType $savedAccounts)
    {
        $this
            ->setSavedAccounts($savedAccounts);
    }
    /**
     * Get savedAccounts value
     * @return \FGTCLB\HisClient\AccountService\Struct\SavedAccountsType
     */
    public function getSavedAccounts(): \FGTCLB\HisClient\AccountService\Struct\SavedAccountsType
    {
        return $this->savedAccounts;
    }
    /**
     * Set savedAccounts value
     * @param \FGTCLB\HisClient\AccountService\Struct\SavedAccountsType $savedAccounts
     * @return \FGTCLB\HisClient\AccountService\Struct\SaveAccountResponse
     */
    public function setSavedAccounts(\FGTCLB\HisClient\AccountService\Struct\SavedAccountsType $savedAccounts): self
    {
        $this->savedAccounts = $savedAccounts;
        
        return $this;
    }
}
