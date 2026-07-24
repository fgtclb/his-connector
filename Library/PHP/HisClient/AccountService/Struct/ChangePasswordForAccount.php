<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for changePasswordForAccount Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ChangePasswordForAccount extends AbstractStructBase
{
    /**
     * The accountId
     * @var int
     */
    protected int $accountId;
    /**
     * The password
     * @var string
     */
    protected string $password;
    /**
     * Constructor method for changePasswordForAccount
     * @uses ChangePasswordForAccount::setAccountId()
     * @uses ChangePasswordForAccount::setPassword()
     * @param int $accountId
     * @param string $password
     */
    public function __construct(int $accountId, string $password)
    {
        $this
            ->setAccountId($accountId)
            ->setPassword($password);
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
     * @return \FGTCLB\HisClient\AccountService\Struct\ChangePasswordForAccount
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
    /**
     * Get password value
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \FGTCLB\HisClient\AccountService\Struct\ChangePasswordForAccount
     */
    public function setPassword(string $password): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
}
