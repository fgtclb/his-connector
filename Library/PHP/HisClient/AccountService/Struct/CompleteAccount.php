<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteAccount Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CompleteAccount extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: Account database id.
     * @var int
     */
    protected int $id;
    /**
     * The isInitialpassword
     * @var bool
     */
    protected bool $isInitialpassword;
    /**
     * The passwordhash
     * Meta information extracted from the WSDL
     * - documentation: Passwordhash of Account.
     * @var string
     */
    protected string $passwordhash;
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * The username
     * Meta information extracted from the WSDL
     * - documentation: Username of Account.
     * @var string
     */
    protected string $username;
    /**
     * The validFrom
     * @var string
     */
    protected string $validFrom;
    /**
     * The validTo
     * @var string
     */
    protected string $validTo;
    /**
     * The accountauthId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $accountauthId = null;
    /**
     * The authinfo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $authinfo = null;
    /**
     * The blockedId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $blockedId = null;
    /**
     * The externalsystemId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $externalsystemId = null;
    /**
     * The isLdapAccount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $isLdapAccount = null;
    /**
     * The optincookie
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $optincookie = null;
    /**
     * The passwordValidTo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $passwordValidTo = null;
    /**
     * The sourcefilter
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $sourcefilter = null;
    /**
     * Constructor method for CompleteAccount
     * @uses CompleteAccount::setId()
     * @uses CompleteAccount::setIsInitialpassword()
     * @uses CompleteAccount::setPasswordhash()
     * @uses CompleteAccount::setPersonId()
     * @uses CompleteAccount::setUsername()
     * @uses CompleteAccount::setValidFrom()
     * @uses CompleteAccount::setValidTo()
     * @uses CompleteAccount::setAccountauthId()
     * @uses CompleteAccount::setAuthinfo()
     * @uses CompleteAccount::setBlockedId()
     * @uses CompleteAccount::setExternalsystemId()
     * @uses CompleteAccount::setIsLdapAccount()
     * @uses CompleteAccount::setOptincookie()
     * @uses CompleteAccount::setPasswordValidTo()
     * @uses CompleteAccount::setSourcefilter()
     * @param int $id
     * @param bool $isInitialpassword
     * @param string $passwordhash
     * @param int $personId
     * @param string $username
     * @param string $validFrom
     * @param string $validTo
     * @param int $accountauthId
     * @param string $authinfo
     * @param int $blockedId
     * @param int $externalsystemId
     * @param bool $isLdapAccount
     * @param string $optincookie
     * @param string $passwordValidTo
     * @param string $sourcefilter
     */
    public function __construct(int $id, bool $isInitialpassword, string $passwordhash, int $personId, string $username, string $validFrom, string $validTo, ?int $accountauthId = null, ?string $authinfo = null, ?int $blockedId = null, ?int $externalsystemId = null, ?bool $isLdapAccount = null, ?string $optincookie = null, ?string $passwordValidTo = null, ?string $sourcefilter = null)
    {
        $this
            ->setId($id)
            ->setIsInitialpassword($isInitialpassword)
            ->setPasswordhash($passwordhash)
            ->setPersonId($personId)
            ->setUsername($username)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setAccountauthId($accountauthId)
            ->setAuthinfo($authinfo)
            ->setBlockedId($blockedId)
            ->setExternalsystemId($externalsystemId)
            ->setIsLdapAccount($isLdapAccount)
            ->setOptincookie($optincookie)
            ->setPasswordValidTo($passwordValidTo)
            ->setSourcefilter($sourcefilter);
    }
    /**
     * Get id value
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount
     */
    public function setId(int $id): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
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
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount
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
     * Get passwordhash value
     * @return string
     */
    public function getPasswordhash(): string
    {
        return $this->passwordhash;
    }
    /**
     * Set passwordhash value
     * @param string $passwordhash
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount
     */
    public function setPasswordhash(string $passwordhash): self
    {
        // validation for constraint: string
        if (!is_null($passwordhash) && !is_string($passwordhash)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passwordhash, true), gettype($passwordhash)), __LINE__);
        }
        $this->passwordhash = $passwordhash;
        
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
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount
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
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount
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
     * Get validFrom value
     * @return string
     */
    public function getValidFrom(): string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount
     */
    public function setValidFrom(string $validFrom): self
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
     * @return string
     */
    public function getValidTo(): string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount
     */
    public function setValidTo(string $validTo): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
    /**
     * Get accountauthId value
     * @return int|null
     */
    public function getAccountauthId(): ?int
    {
        return $this->accountauthId;
    }
    /**
     * Set accountauthId value
     * @param int $accountauthId
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount
     */
    public function setAccountauthId(?int $accountauthId = null): self
    {
        // validation for constraint: int
        if (!is_null($accountauthId) && !(is_int($accountauthId) || ctype_digit($accountauthId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountauthId, true), gettype($accountauthId)), __LINE__);
        }
        $this->accountauthId = $accountauthId;
        
        return $this;
    }
    /**
     * Get authinfo value
     * @return string|null
     */
    public function getAuthinfo(): ?string
    {
        return $this->authinfo;
    }
    /**
     * Set authinfo value
     * @param string $authinfo
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount
     */
    public function setAuthinfo(?string $authinfo = null): self
    {
        // validation for constraint: string
        if (!is_null($authinfo) && !is_string($authinfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authinfo, true), gettype($authinfo)), __LINE__);
        }
        $this->authinfo = $authinfo;
        
        return $this;
    }
    /**
     * Get blockedId value
     * @return int|null
     */
    public function getBlockedId(): ?int
    {
        return $this->blockedId;
    }
    /**
     * Set blockedId value
     * @param int $blockedId
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount
     */
    public function setBlockedId(?int $blockedId = null): self
    {
        // validation for constraint: int
        if (!is_null($blockedId) && !(is_int($blockedId) || ctype_digit($blockedId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($blockedId, true), gettype($blockedId)), __LINE__);
        }
        $this->blockedId = $blockedId;
        
        return $this;
    }
    /**
     * Get externalsystemId value
     * @return int|null
     */
    public function getExternalsystemId(): ?int
    {
        return $this->externalsystemId;
    }
    /**
     * Set externalsystemId value
     * @param int $externalsystemId
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount
     */
    public function setExternalsystemId(?int $externalsystemId = null): self
    {
        // validation for constraint: int
        if (!is_null($externalsystemId) && !(is_int($externalsystemId) || ctype_digit($externalsystemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($externalsystemId, true), gettype($externalsystemId)), __LINE__);
        }
        $this->externalsystemId = $externalsystemId;
        
        return $this;
    }
    /**
     * Get isLdapAccount value
     * @return bool|null
     */
    public function getIsLdapAccount(): ?bool
    {
        return $this->isLdapAccount;
    }
    /**
     * Set isLdapAccount value
     * @param bool $isLdapAccount
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount
     */
    public function setIsLdapAccount(?bool $isLdapAccount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLdapAccount) && !is_bool($isLdapAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLdapAccount, true), gettype($isLdapAccount)), __LINE__);
        }
        $this->isLdapAccount = $isLdapAccount;
        
        return $this;
    }
    /**
     * Get optincookie value
     * @return string|null
     */
    public function getOptincookie(): ?string
    {
        return $this->optincookie;
    }
    /**
     * Set optincookie value
     * @param string $optincookie
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount
     */
    public function setOptincookie(?string $optincookie = null): self
    {
        // validation for constraint: string
        if (!is_null($optincookie) && !is_string($optincookie)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optincookie, true), gettype($optincookie)), __LINE__);
        }
        $this->optincookie = $optincookie;
        
        return $this;
    }
    /**
     * Get passwordValidTo value
     * @return string|null
     */
    public function getPasswordValidTo(): ?string
    {
        return $this->passwordValidTo;
    }
    /**
     * Set passwordValidTo value
     * @param string $passwordValidTo
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount
     */
    public function setPasswordValidTo(?string $passwordValidTo = null): self
    {
        // validation for constraint: string
        if (!is_null($passwordValidTo) && !is_string($passwordValidTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passwordValidTo, true), gettype($passwordValidTo)), __LINE__);
        }
        $this->passwordValidTo = $passwordValidTo;
        
        return $this;
    }
    /**
     * Get sourcefilter value
     * @return string|null
     */
    public function getSourcefilter(): ?string
    {
        return $this->sourcefilter;
    }
    /**
     * Set sourcefilter value
     * @param string $sourcefilter
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount
     */
    public function setSourcefilter(?string $sourcefilter = null): self
    {
        // validation for constraint: string
        if (!is_null($sourcefilter) && !is_string($sourcefilter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourcefilter, true), gettype($sourcefilter)), __LINE__);
        }
        $this->sourcefilter = $sourcefilter;
        
        return $this;
    }
}
