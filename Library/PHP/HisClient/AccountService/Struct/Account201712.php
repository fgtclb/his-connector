<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Account201712 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Account201712 extends AbstractStructBase
{
    /**
     * The passwordhash
     * Meta information extracted from the WSDL
     * - documentation: Password of Account. Hashed with algorithm identified by accountauthId.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $passwordhash = null;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - documentation: Start date of account validity, inclusive. Starting this day, a login will be possible with this account.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - documentation: End date of account validity, inclusive. Starting the next day, a login will be unsuccessful with this account.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * The passwordValidTo
     * Meta information extracted from the WSDL
     * - documentation: Expiry date for password. At this date, user will be required to change the password.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $passwordValidTo = null;
    /**
     * The authinfo
     * Meta information extracted from the WSDL
     * - documentation: Info from X.509 certificates.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $authinfo = null;
    /**
     * The externalsystemId
     * Meta information extracted from the WSDL
     * - documentation: Which external system is responsible for this account? See ExternalSystemValue.
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $externalsystemId = null;
    /**
     * The isLdapAccount
     * Meta information extracted from the WSDL
     * - documentation: If set true, the account will be exported to LDAP.
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $isLdapAccount = null;
    /**
     * The objGuid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $objGuid = null;
    /**
     * The optincookie
     * Meta information extracted from the WSDL
     * - documentation: For use in e-mail to user with registration.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $optincookie = null;
    /**
     * The purposeId
     * Meta information extracted from the WSDL
     * - documentation: The purpose to use for generating the username. Depending on the purpose, a different algorithm will be used for the generation.
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $purposeId = null;
    /**
     * The sourcefilter
     * Meta information extracted from the WSDL
     * - documentation: Commaseperated list of IP-Addresses that are allowed for clients. IP-Ranges can be selected through CIDR notation.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $sourcefilter = null;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The personId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $personId = null;
    /**
     * The username
     * Meta information extracted from the WSDL
     * - documentation: Should be unique for any given date.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $username = null;
    /**
     * The accountauthId
     * Meta information extracted from the WSDL
     * - documentation: Password encryption.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $accountauthId = null;
    /**
     * The blockedId
     * Meta information extracted from the WSDL
     * - documentation: Is the Account blocked and why? See BlockedValue.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $blockedId = null;
    /**
     * The isInitialpassword
     * Meta information extracted from the WSDL
     * - documentation: If true, the user will be required to change the password upon login.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isInitialpassword = null;
    /**
     * Constructor method for Account201712
     * @uses Account201712::setPasswordhash()
     * @uses Account201712::setValidFrom()
     * @uses Account201712::setValidTo()
     * @uses Account201712::setPasswordValidTo()
     * @uses Account201712::setAuthinfo()
     * @uses Account201712::setExternalsystemId()
     * @uses Account201712::setIsLdapAccount()
     * @uses Account201712::setObjGuid()
     * @uses Account201712::setOptincookie()
     * @uses Account201712::setPurposeId()
     * @uses Account201712::setSourcefilter()
     * @uses Account201712::setId()
     * @uses Account201712::setPersonId()
     * @uses Account201712::setUsername()
     * @uses Account201712::setAccountauthId()
     * @uses Account201712::setBlockedId()
     * @uses Account201712::setIsInitialpassword()
     * @param string $passwordhash
     * @param string $validFrom
     * @param string $validTo
     * @param string $passwordValidTo
     * @param string $authinfo
     * @param int $externalsystemId
     * @param bool $isLdapAccount
     * @param string $objGuid
     * @param string $optincookie
     * @param int $purposeId
     * @param string $sourcefilter
     * @param int $id
     * @param int $personId
     * @param string $username
     * @param int $accountauthId
     * @param int $blockedId
     * @param bool $isInitialpassword
     */
    public function __construct(?string $passwordhash = null, ?string $validFrom = null, ?string $validTo = null, ?string $passwordValidTo = null, ?string $authinfo = null, ?int $externalsystemId = null, ?bool $isLdapAccount = null, ?string $objGuid = null, ?string $optincookie = null, ?int $purposeId = null, ?string $sourcefilter = null, ?int $id = null, ?int $personId = null, ?string $username = null, ?int $accountauthId = null, ?int $blockedId = null, ?bool $isInitialpassword = null)
    {
        $this
            ->setPasswordhash($passwordhash)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setPasswordValidTo($passwordValidTo)
            ->setAuthinfo($authinfo)
            ->setExternalsystemId($externalsystemId)
            ->setIsLdapAccount($isLdapAccount)
            ->setObjGuid($objGuid)
            ->setOptincookie($optincookie)
            ->setPurposeId($purposeId)
            ->setSourcefilter($sourcefilter)
            ->setId($id)
            ->setPersonId($personId)
            ->setUsername($username)
            ->setAccountauthId($accountauthId)
            ->setBlockedId($blockedId)
            ->setIsInitialpassword($isInitialpassword);
    }
    /**
     * Get passwordhash value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPasswordhash(): ?string
    {
        return $this->passwordhash ?? null;
    }
    /**
     * Set passwordhash value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passwordhash
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function setPasswordhash(?string $passwordhash = null): self
    {
        // validation for constraint: string
        if (!is_null($passwordhash) && !is_string($passwordhash)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passwordhash, true), gettype($passwordhash)), __LINE__);
        }
        if (is_null($passwordhash) || (is_array($passwordhash) && empty($passwordhash))) {
            unset($this->passwordhash);
        } else {
            $this->passwordhash = $passwordhash;
        }
        
        return $this;
    }
    /**
     * Get validFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom ?? null;
    }
    /**
     * Set validFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validFrom
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        if (is_null($validFrom) || (is_array($validFrom) && empty($validFrom))) {
            unset($this->validFrom);
        } else {
            $this->validFrom = $validFrom;
        }
        
        return $this;
    }
    /**
     * Get validTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo ?? null;
    }
    /**
     * Set validTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validTo
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        if (is_null($validTo) || (is_array($validTo) && empty($validTo))) {
            unset($this->validTo);
        } else {
            $this->validTo = $validTo;
        }
        
        return $this;
    }
    /**
     * Get passwordValidTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPasswordValidTo(): ?string
    {
        return $this->passwordValidTo ?? null;
    }
    /**
     * Set passwordValidTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passwordValidTo
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function setPasswordValidTo(?string $passwordValidTo = null): self
    {
        // validation for constraint: string
        if (!is_null($passwordValidTo) && !is_string($passwordValidTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passwordValidTo, true), gettype($passwordValidTo)), __LINE__);
        }
        if (is_null($passwordValidTo) || (is_array($passwordValidTo) && empty($passwordValidTo))) {
            unset($this->passwordValidTo);
        } else {
            $this->passwordValidTo = $passwordValidTo;
        }
        
        return $this;
    }
    /**
     * Get authinfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAuthinfo(): ?string
    {
        return $this->authinfo ?? null;
    }
    /**
     * Set authinfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $authinfo
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function setAuthinfo(?string $authinfo = null): self
    {
        // validation for constraint: string
        if (!is_null($authinfo) && !is_string($authinfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authinfo, true), gettype($authinfo)), __LINE__);
        }
        if (is_null($authinfo) || (is_array($authinfo) && empty($authinfo))) {
            unset($this->authinfo);
        } else {
            $this->authinfo = $authinfo;
        }
        
        return $this;
    }
    /**
     * Get externalsystemId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getExternalsystemId(): ?int
    {
        return $this->externalsystemId ?? null;
    }
    /**
     * Set externalsystemId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $externalsystemId
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function setExternalsystemId(?int $externalsystemId = null): self
    {
        // validation for constraint: int
        if (!is_null($externalsystemId) && !(is_int($externalsystemId) || ctype_digit($externalsystemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($externalsystemId, true), gettype($externalsystemId)), __LINE__);
        }
        if (is_null($externalsystemId) || (is_array($externalsystemId) && empty($externalsystemId))) {
            unset($this->externalsystemId);
        } else {
            $this->externalsystemId = $externalsystemId;
        }
        
        return $this;
    }
    /**
     * Get isLdapAccount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsLdapAccount(): ?bool
    {
        return $this->isLdapAccount ?? null;
    }
    /**
     * Set isLdapAccount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isLdapAccount
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function setIsLdapAccount(?bool $isLdapAccount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLdapAccount) && !is_bool($isLdapAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLdapAccount, true), gettype($isLdapAccount)), __LINE__);
        }
        if (is_null($isLdapAccount) || (is_array($isLdapAccount) && empty($isLdapAccount))) {
            unset($this->isLdapAccount);
        } else {
            $this->isLdapAccount = $isLdapAccount;
        }
        
        return $this;
    }
    /**
     * Get objGuid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getObjGuid(): ?string
    {
        return $this->objGuid ?? null;
    }
    /**
     * Set objGuid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $objGuid
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function setObjGuid(?string $objGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($objGuid) && !is_string($objGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objGuid, true), gettype($objGuid)), __LINE__);
        }
        if (is_null($objGuid) || (is_array($objGuid) && empty($objGuid))) {
            unset($this->objGuid);
        } else {
            $this->objGuid = $objGuid;
        }
        
        return $this;
    }
    /**
     * Get optincookie value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOptincookie(): ?string
    {
        return $this->optincookie ?? null;
    }
    /**
     * Set optincookie value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $optincookie
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function setOptincookie(?string $optincookie = null): self
    {
        // validation for constraint: string
        if (!is_null($optincookie) && !is_string($optincookie)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optincookie, true), gettype($optincookie)), __LINE__);
        }
        if (is_null($optincookie) || (is_array($optincookie) && empty($optincookie))) {
            unset($this->optincookie);
        } else {
            $this->optincookie = $optincookie;
        }
        
        return $this;
    }
    /**
     * Get purposeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPurposeId(): ?int
    {
        return $this->purposeId ?? null;
    }
    /**
     * Set purposeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $purposeId
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function setPurposeId(?int $purposeId = null): self
    {
        // validation for constraint: int
        if (!is_null($purposeId) && !(is_int($purposeId) || ctype_digit($purposeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($purposeId, true), gettype($purposeId)), __LINE__);
        }
        if (is_null($purposeId) || (is_array($purposeId) && empty($purposeId))) {
            unset($this->purposeId);
        } else {
            $this->purposeId = $purposeId;
        }
        
        return $this;
    }
    /**
     * Get sourcefilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSourcefilter(): ?string
    {
        return $this->sourcefilter ?? null;
    }
    /**
     * Set sourcefilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sourcefilter
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function setSourcefilter(?string $sourcefilter = null): self
    {
        // validation for constraint: string
        if (!is_null($sourcefilter) && !is_string($sourcefilter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourcefilter, true), gettype($sourcefilter)), __LINE__);
        }
        if (is_null($sourcefilter) || (is_array($sourcefilter) && empty($sourcefilter))) {
            unset($this->sourcefilter);
        } else {
            $this->sourcefilter = $sourcefilter;
        }
        
        return $this;
    }
    /**
     * Get id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id ?? null;
    }
    /**
     * Set id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $id
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
        }
        
        return $this;
    }
    /**
     * Get personId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPersonId(): ?int
    {
        return $this->personId ?? null;
    }
    /**
     * Set personId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $personId
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function setPersonId(?int $personId = null): self
    {
        // validation for constraint: int
        if (!is_null($personId) && !(is_int($personId) || ctype_digit($personId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personId, true), gettype($personId)), __LINE__);
        }
        if (is_null($personId) || (is_array($personId) && empty($personId))) {
            unset($this->personId);
        } else {
            $this->personId = $personId;
        }
        
        return $this;
    }
    /**
     * Get username value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username ?? null;
    }
    /**
     * Set username value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $username
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function setUsername(?string $username = null): self
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        if (is_null($username) || (is_array($username) && empty($username))) {
            unset($this->username);
        } else {
            $this->username = $username;
        }
        
        return $this;
    }
    /**
     * Get accountauthId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getAccountauthId(): ?int
    {
        return $this->accountauthId ?? null;
    }
    /**
     * Set accountauthId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $accountauthId
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function setAccountauthId(?int $accountauthId = null): self
    {
        // validation for constraint: int
        if (!is_null($accountauthId) && !(is_int($accountauthId) || ctype_digit($accountauthId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountauthId, true), gettype($accountauthId)), __LINE__);
        }
        if (is_null($accountauthId) || (is_array($accountauthId) && empty($accountauthId))) {
            unset($this->accountauthId);
        } else {
            $this->accountauthId = $accountauthId;
        }
        
        return $this;
    }
    /**
     * Get blockedId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getBlockedId(): ?int
    {
        return $this->blockedId ?? null;
    }
    /**
     * Set blockedId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $blockedId
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function setBlockedId(?int $blockedId = null): self
    {
        // validation for constraint: int
        if (!is_null($blockedId) && !(is_int($blockedId) || ctype_digit($blockedId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($blockedId, true), gettype($blockedId)), __LINE__);
        }
        if (is_null($blockedId) || (is_array($blockedId) && empty($blockedId))) {
            unset($this->blockedId);
        } else {
            $this->blockedId = $blockedId;
        }
        
        return $this;
    }
    /**
     * Get isInitialpassword value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsInitialpassword(): ?bool
    {
        return $this->isInitialpassword ?? null;
    }
    /**
     * Set isInitialpassword value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isInitialpassword
     * @return \FGTCLB\HisClient\AccountService\Struct\Account201712
     */
    public function setIsInitialpassword(?bool $isInitialpassword = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInitialpassword) && !is_bool($isInitialpassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInitialpassword, true), gettype($isInitialpassword)), __LINE__);
        }
        if (is_null($isInitialpassword) || (is_array($isInitialpassword) && empty($isInitialpassword))) {
            unset($this->isInitialpassword);
        } else {
            $this->isInitialpassword = $isInitialpassword;
        }
        
        return $this;
    }
}
