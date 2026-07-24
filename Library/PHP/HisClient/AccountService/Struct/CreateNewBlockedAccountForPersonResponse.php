<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createNewBlockedAccountForPersonResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateNewBlockedAccountForPersonResponse extends AbstractStructBase
{
    /**
     * The accountId
     * @var int
     */
    protected int $accountId;
    /**
     * Constructor method for createNewBlockedAccountForPersonResponse
     * @uses CreateNewBlockedAccountForPersonResponse::setAccountId()
     * @param int $accountId
     */
    public function __construct(int $accountId)
    {
        $this
            ->setAccountId($accountId);
    }
    /**
     * Get accountId value
     * @return int
     */
    public function getAccountId(): int
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param int $accountId
     * @return \FGTCLB\HisClient\AccountService\Struct\CreateNewBlockedAccountForPersonResponse
     */
    public function setAccountId(int $accountId): self
    {
        // validation for constraint: int
        if (!is_null($accountId) && !(is_int($accountId) || ctype_digit($accountId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
}
