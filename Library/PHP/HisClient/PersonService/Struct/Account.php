<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Account Struct
 * Meta information extracted from the WSDL
 * - documentation: Data of a person's account.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Account extends AbstractStructBase
{
    /**
     * The username
     * @var string
     */
    protected string $username;
    /**
     * The password
     * @var string
     */
    protected string $password;
    /**
     * The blocked
     * @var int
     */
    protected int $blocked;
    /**
     * The accountauth
     * @var int
     */
    protected int $accountauth;
    /**
     * The isInitialpassword
     * Meta information extracted from the WSDL
     * - documentation: The user will be required to change the initial password upon login.
     * @var bool
     */
    protected bool $isInitialpassword;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: The technical database-ID.
     * - nillable: true
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for Account
     * @uses Account::setUsername()
     * @uses Account::setPassword()
     * @uses Account::setBlocked()
     * @uses Account::setAccountauth()
     * @uses Account::setIsInitialpassword()
     * @uses Account::setId()
     * @uses Account::setValidFrom()
     * @uses Account::setValidTo()
     * @param string $username
     * @param string $password
     * @param int $blocked
     * @param int $accountauth
     * @param bool $isInitialpassword
     * @param int $id
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(string $username, string $password, int $blocked, int $accountauth, bool $isInitialpassword, ?int $id = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setBlocked($blocked)
            ->setAccountauth($accountauth)
            ->setIsInitialpassword($isInitialpassword)
            ->setId($id)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get username value
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
    /**
     * Set username value
     * @param string $username
     * @return \FGTCLB\HisClient\PersonService\Struct\Account
     */
    public function setUsername(string $username): self
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->username = $username;
        
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Account
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
    /**
     * Get blocked value
     * @return int
     */
    public function getBlocked(): int
    {
        return $this->blocked;
    }
    /**
     * Set blocked value
     * @param int $blocked
     * @return \FGTCLB\HisClient\PersonService\Struct\Account
     */
    public function setBlocked(int $blocked): self
    {
        // validation for constraint: int
        if (!is_null($blocked) && !(is_int($blocked) || ctype_digit($blocked))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($blocked, true), gettype($blocked)), __LINE__);
        }
        $this->blocked = $blocked;
        
        return $this;
    }
    /**
     * Get accountauth value
     * @return int
     */
    public function getAccountauth(): int
    {
        return $this->accountauth;
    }
    /**
     * Set accountauth value
     * @param int $accountauth
     * @return \FGTCLB\HisClient\PersonService\Struct\Account
     */
    public function setAccountauth(int $accountauth): self
    {
        // validation for constraint: int
        if (!is_null($accountauth) && !(is_int($accountauth) || ctype_digit($accountauth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountauth, true), gettype($accountauth)), __LINE__);
        }
        $this->accountauth = $accountauth;
        
        return $this;
    }
    /**
     * Get isInitialpassword value
     * @return bool
     */
    public function getIsInitialpassword(): bool
    {
        return $this->isInitialpassword;
    }
    /**
     * Set isInitialpassword value
     * @param bool $isInitialpassword
     * @return \FGTCLB\HisClient\PersonService\Struct\Account
     */
    public function setIsInitialpassword(bool $isInitialpassword): self
    {
        // validation for constraint: boolean
        if (!is_null($isInitialpassword) && !is_bool($isInitialpassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInitialpassword, true), gettype($isInitialpassword)), __LINE__);
        }
        $this->isInitialpassword = $isInitialpassword;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \FGTCLB\HisClient\PersonService\Struct\Account
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \FGTCLB\HisClient\PersonService\Struct\Account
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \FGTCLB\HisClient\PersonService\Struct\Account
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
}
