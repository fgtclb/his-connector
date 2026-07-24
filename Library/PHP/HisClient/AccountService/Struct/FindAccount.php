<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findAccount Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindAccount extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The username
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $username = null;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * The accountAuthId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $accountAuthId = null;
    /**
     * The blockedId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $blockedId = null;
    /**
     * The externalsystemId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $externalsystemId = null;
    /**
     * The isInitialpassword
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $isInitialpassword = null;
    /**
     * The isLdapAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $isLdapAccount = null;
    /**
     * The passwordValidTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $passwordValidTo = null;
    /**
     * Constructor method for findAccount
     * @uses FindAccount::setId()
     * @uses FindAccount::setUsername()
     * @uses FindAccount::setValidFrom()
     * @uses FindAccount::setValidTo()
     * @uses FindAccount::setAccountAuthId()
     * @uses FindAccount::setBlockedId()
     * @uses FindAccount::setExternalsystemId()
     * @uses FindAccount::setIsInitialpassword()
     * @uses FindAccount::setIsLdapAccount()
     * @uses FindAccount::setPasswordValidTo()
     * @param string $id
     * @param string $username
     * @param string $validFrom
     * @param string $validTo
     * @param string $accountAuthId
     * @param string $blockedId
     * @param string $externalsystemId
     * @param string $isInitialpassword
     * @param string $isLdapAccount
     * @param string $passwordValidTo
     */
    public function __construct(?string $id = null, ?string $username = null, ?string $validFrom = null, ?string $validTo = null, ?string $accountAuthId = null, ?string $blockedId = null, ?string $externalsystemId = null, ?string $isInitialpassword = null, ?string $isLdapAccount = null, ?string $passwordValidTo = null)
    {
        $this
            ->setId($id)
            ->setUsername($username)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setAccountAuthId($accountAuthId)
            ->setBlockedId($blockedId)
            ->setExternalsystemId($externalsystemId)
            ->setIsInitialpassword($isInitialpassword)
            ->setIsLdapAccount($isLdapAccount)
            ->setPasswordValidTo($passwordValidTo);
    }
    /**
     * Get id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id ?? null;
    }
    /**
     * Set id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $id
     * @return \FGTCLB\HisClient\AccountService\Struct\FindAccount
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
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
     * @return \FGTCLB\HisClient\AccountService\Struct\FindAccount
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
     * @return \FGTCLB\HisClient\AccountService\Struct\FindAccount
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
     * @return \FGTCLB\HisClient\AccountService\Struct\FindAccount
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
     * Get accountAuthId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAccountAuthId(): ?string
    {
        return $this->accountAuthId ?? null;
    }
    /**
     * Set accountAuthId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $accountAuthId
     * @return \FGTCLB\HisClient\AccountService\Struct\FindAccount
     */
    public function setAccountAuthId(?string $accountAuthId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountAuthId) && !is_string($accountAuthId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountAuthId, true), gettype($accountAuthId)), __LINE__);
        }
        if (is_null($accountAuthId) || (is_array($accountAuthId) && empty($accountAuthId))) {
            unset($this->accountAuthId);
        } else {
            $this->accountAuthId = $accountAuthId;
        }
        
        return $this;
    }
    /**
     * Get blockedId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBlockedId(): ?string
    {
        return $this->blockedId ?? null;
    }
    /**
     * Set blockedId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $blockedId
     * @return \FGTCLB\HisClient\AccountService\Struct\FindAccount
     */
    public function setBlockedId(?string $blockedId = null): self
    {
        // validation for constraint: string
        if (!is_null($blockedId) && !is_string($blockedId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($blockedId, true), gettype($blockedId)), __LINE__);
        }
        if (is_null($blockedId) || (is_array($blockedId) && empty($blockedId))) {
            unset($this->blockedId);
        } else {
            $this->blockedId = $blockedId;
        }
        
        return $this;
    }
    /**
     * Get externalsystemId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExternalsystemId(): ?string
    {
        return $this->externalsystemId ?? null;
    }
    /**
     * Set externalsystemId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $externalsystemId
     * @return \FGTCLB\HisClient\AccountService\Struct\FindAccount
     */
    public function setExternalsystemId(?string $externalsystemId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalsystemId) && !is_string($externalsystemId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalsystemId, true), gettype($externalsystemId)), __LINE__);
        }
        if (is_null($externalsystemId) || (is_array($externalsystemId) && empty($externalsystemId))) {
            unset($this->externalsystemId);
        } else {
            $this->externalsystemId = $externalsystemId;
        }
        
        return $this;
    }
    /**
     * Get isInitialpassword value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIsInitialpassword(): ?string
    {
        return $this->isInitialpassword ?? null;
    }
    /**
     * Set isInitialpassword value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $isInitialpassword
     * @return \FGTCLB\HisClient\AccountService\Struct\FindAccount
     */
    public function setIsInitialpassword(?string $isInitialpassword = null): self
    {
        // validation for constraint: string
        if (!is_null($isInitialpassword) && !is_string($isInitialpassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isInitialpassword, true), gettype($isInitialpassword)), __LINE__);
        }
        if (is_null($isInitialpassword) || (is_array($isInitialpassword) && empty($isInitialpassword))) {
            unset($this->isInitialpassword);
        } else {
            $this->isInitialpassword = $isInitialpassword;
        }
        
        return $this;
    }
    /**
     * Get isLdapAccount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIsLdapAccount(): ?string
    {
        return $this->isLdapAccount ?? null;
    }
    /**
     * Set isLdapAccount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $isLdapAccount
     * @return \FGTCLB\HisClient\AccountService\Struct\FindAccount
     */
    public function setIsLdapAccount(?string $isLdapAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($isLdapAccount) && !is_string($isLdapAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isLdapAccount, true), gettype($isLdapAccount)), __LINE__);
        }
        if (is_null($isLdapAccount) || (is_array($isLdapAccount) && empty($isLdapAccount))) {
            unset($this->isLdapAccount);
        } else {
            $this->isLdapAccount = $isLdapAccount;
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
     * @return \FGTCLB\HisClient\AccountService\Struct\FindAccount
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
}
