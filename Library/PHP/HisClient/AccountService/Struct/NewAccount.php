<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NewAccount Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class NewAccount extends AbstractStructBase
{
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - documentation: Start date of account validity, inclusive. Starting this day, a login will be possible with this account.
     * @var string
     */
    protected string $validFrom;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - documentation: End date of account validity, inclusive. Starting the next day, a login will be unsuccessful with this account.
     * @var string
     */
    protected string $validTo;
    /**
     * The accountauthId
     * @var int
     */
    protected int $accountauthId;
    /**
     * The blockedId
     * Meta information extracted from the WSDL
     * - documentation: Is the Account blocked and why? See BlockedValue.
     * @var int
     */
    protected int $blockedId;
    /**
     * The isInitialpassword
     * Meta information extracted from the WSDL
     * - documentation: If true, the user will be required to change the password upon login.
     * @var bool
     */
    protected bool $isInitialpassword;
    /**
     * The username
     * Meta information extracted from the WSDL
     * - documentation: Should be unique for any given date. If null, then a new username will be generated using the algorithm defined by the purpose of this account (purposeId). If no purpose is specified, the default generator is used.
     * - nillable: true
     * @var string|null
     */
    protected ?string $username = null;
    /**
     * The passwordhash
     * Meta information extracted from the WSDL
     * - documentation: Password of Account. Hashed with algorithm identified by accountauthId. If null, then a password will be generated using the algorithm configured in HISinOne.
     * - nillable: true
     * @var string|null
     */
    protected ?string $passwordhash = null;
    /**
     * The authinfo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $authinfo = null;
    /**
     * The externalsystemId
     * Meta information extracted from the WSDL
     * - documentation: Which external system is responsible for this account? See ExternalSystemValue.
     * - nillable: true
     * @var int|null
     */
    protected ?int $externalsystemId = null;
    /**
     * The isLdapAccount
     * Meta information extracted from the WSDL
     * - documentation: If set true, the account will be exported to LDAP.
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
     * - documentation: Expiry date for password. At this date, user will be required to change the password.
     * - nillable: true
     * @var string|null
     */
    protected ?string $passwordValidTo = null;
    /**
     * The sourcefilter
     * Meta information extracted from the WSDL
     * - documentation: Commaseperated list of IP-Addresses that are allowed for clients. IP-Ranges can be selected through CIDR notation.
     * - nillable: true
     * @var string|null
     */
    protected ?string $sourcefilter = null;
    /**
     * The purposeId
     * Meta information extracted from the WSDL
     * - documentation: The purpose to use for generating the username. Depending on the purpose, a different algorithm will be used for the generation.
     * - nillable: true
     * @var int|null
     */
    protected ?int $purposeId = null;
    /**
     * Constructor method for NewAccount
     * @uses NewAccount::setPersonId()
     * @uses NewAccount::setValidFrom()
     * @uses NewAccount::setValidTo()
     * @uses NewAccount::setAccountauthId()
     * @uses NewAccount::setBlockedId()
     * @uses NewAccount::setIsInitialpassword()
     * @uses NewAccount::setUsername()
     * @uses NewAccount::setPasswordhash()
     * @uses NewAccount::setAuthinfo()
     * @uses NewAccount::setExternalsystemId()
     * @uses NewAccount::setIsLdapAccount()
     * @uses NewAccount::setOptincookie()
     * @uses NewAccount::setPasswordValidTo()
     * @uses NewAccount::setSourcefilter()
     * @uses NewAccount::setPurposeId()
     * @param int $personId
     * @param string $validFrom
     * @param string $validTo
     * @param int $accountauthId
     * @param int $blockedId
     * @param bool $isInitialpassword
     * @param string $username
     * @param string $passwordhash
     * @param string $authinfo
     * @param int $externalsystemId
     * @param bool $isLdapAccount
     * @param string $optincookie
     * @param string $passwordValidTo
     * @param string $sourcefilter
     * @param int $purposeId
     */
    public function __construct(int $personId, string $validFrom, string $validTo, int $accountauthId, int $blockedId, bool $isInitialpassword, ?string $username = null, ?string $passwordhash = null, ?string $authinfo = null, ?int $externalsystemId = null, ?bool $isLdapAccount = null, ?string $optincookie = null, ?string $passwordValidTo = null, ?string $sourcefilter = null, ?int $purposeId = null)
    {
        $this
            ->setPersonId($personId)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setAccountauthId($accountauthId)
            ->setBlockedId($blockedId)
            ->setIsInitialpassword($isInitialpassword)
            ->setUsername($username)
            ->setPasswordhash($passwordhash)
            ->setAuthinfo($authinfo)
            ->setExternalsystemId($externalsystemId)
            ->setIsLdapAccount($isLdapAccount)
            ->setOptincookie($optincookie)
            ->setPasswordValidTo($passwordValidTo)
            ->setSourcefilter($sourcefilter)
            ->setPurposeId($purposeId);
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
     * @return \FGTCLB\HisClient\AccountService\Struct\NewAccount
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
     * @return \FGTCLB\HisClient\AccountService\Struct\NewAccount
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
     * @return \FGTCLB\HisClient\AccountService\Struct\NewAccount
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
     * @return int
     */
    public function getAccountauthId(): int
    {
        return $this->accountauthId;
    }
    /**
     * Set accountauthId value
     * @param int $accountauthId
     * @return \FGTCLB\HisClient\AccountService\Struct\NewAccount
     */
    public function setAccountauthId(int $accountauthId): self
    {
        // validation for constraint: int
        if (!is_null($accountauthId) && !(is_int($accountauthId) || ctype_digit($accountauthId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountauthId, true), gettype($accountauthId)), __LINE__);
        }
        $this->accountauthId = $accountauthId;
        
        return $this;
    }
    /**
     * Get blockedId value
     * @return int
     */
    public function getBlockedId(): int
    {
        return $this->blockedId;
    }
    /**
     * Set blockedId value
     * @param int $blockedId
     * @return \FGTCLB\HisClient\AccountService\Struct\NewAccount
     */
    public function setBlockedId(int $blockedId): self
    {
        // validation for constraint: int
        if (!is_null($blockedId) && !(is_int($blockedId) || ctype_digit($blockedId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($blockedId, true), gettype($blockedId)), __LINE__);
        }
        $this->blockedId = $blockedId;
        
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
     * @return \FGTCLB\HisClient\AccountService\Struct\NewAccount
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
     * Get username value
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }
    /**
     * Set username value
     * @param string $username
     * @return \FGTCLB\HisClient\AccountService\Struct\NewAccount
     */
    public function setUsername(?string $username = null): self
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->username = $username;
        
        return $this;
    }
    /**
     * Get passwordhash value
     * @return string|null
     */
    public function getPasswordhash(): ?string
    {
        return $this->passwordhash;
    }
    /**
     * Set passwordhash value
     * @param string $passwordhash
     * @return \FGTCLB\HisClient\AccountService\Struct\NewAccount
     */
    public function setPasswordhash(?string $passwordhash = null): self
    {
        // validation for constraint: string
        if (!is_null($passwordhash) && !is_string($passwordhash)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passwordhash, true), gettype($passwordhash)), __LINE__);
        }
        $this->passwordhash = $passwordhash;
        
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
     * @return \FGTCLB\HisClient\AccountService\Struct\NewAccount
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
     * @return \FGTCLB\HisClient\AccountService\Struct\NewAccount
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
     * @return \FGTCLB\HisClient\AccountService\Struct\NewAccount
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
     * @return \FGTCLB\HisClient\AccountService\Struct\NewAccount
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
     * @return \FGTCLB\HisClient\AccountService\Struct\NewAccount
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
     * @return \FGTCLB\HisClient\AccountService\Struct\NewAccount
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
    /**
     * Get purposeId value
     * @return int|null
     */
    public function getPurposeId(): ?int
    {
        return $this->purposeId;
    }
    /**
     * Set purposeId value
     * @param int $purposeId
     * @return \FGTCLB\HisClient\AccountService\Struct\NewAccount
     */
    public function setPurposeId(?int $purposeId = null): self
    {
        // validation for constraint: int
        if (!is_null($purposeId) && !(is_int($purposeId) || ctype_digit($purposeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($purposeId, true), gettype($purposeId)), __LINE__);
        }
        $this->purposeId = $purposeId;
        
        return $this;
    }
}
