<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveAccount Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAccount extends AbstractStructBase
{
    /**
     * The completeAccounts
     * Meta information extracted from the WSDL
     * - documentation: A list of accounts.
     * @var \FGTCLB\HisClient\AccountService\Struct\CompleteAccountsType
     */
    protected \FGTCLB\HisClient\AccountService\Struct\CompleteAccountsType $completeAccounts;
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * Constructor method for saveAccount
     * @uses SaveAccount::setCompleteAccounts()
     * @uses SaveAccount::setPersonId()
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccountsType $completeAccounts
     * @param int $personId
     */
    public function __construct(\FGTCLB\HisClient\AccountService\Struct\CompleteAccountsType $completeAccounts, int $personId)
    {
        $this
            ->setCompleteAccounts($completeAccounts)
            ->setPersonId($personId);
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
     * @return \FGTCLB\HisClient\AccountService\Struct\SaveAccount
     */
    public function setCompleteAccounts(\FGTCLB\HisClient\AccountService\Struct\CompleteAccountsType $completeAccounts): self
    {
        $this->completeAccounts = $completeAccounts;
        
        return $this;
    }
    /**
     * Get personId value
     * @return int
     */
    public function getPersonId(): int
    {
        return $this->personId;
    }
    /**
     * Set personId value
     * @param int $personId
     * @return \FGTCLB\HisClient\AccountService\Struct\SaveAccount
     */
    public function setPersonId(int $personId): self
    {
        // validation for constraint: int
        if (!is_null($personId) && !(is_int($personId) || ctype_digit($personId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personId, true), gettype($personId)), __LINE__);
        }
        $this->personId = $personId;
        
        return $this;
    }
}
