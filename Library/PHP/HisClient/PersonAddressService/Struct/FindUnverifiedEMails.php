<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findUnverifiedEMails Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindUnverifiedEMails extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: ID of searched EAddress
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The personId
     * Meta information extracted from the WSDL
     * - documentation: ID of searched Person
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $personId = null;
    /**
     * The notificationCategory
     * Meta information extracted from the WSDL
     * - documentation: Notification category of an electric address as Uniquename
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $notificationCategory = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - documentation: End of validity of the EAddress
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * The eaddressValue
     * Meta information extracted from the WSDL
     * - documentation: Value of an EAddress
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $eaddressValue = null;
    /**
     * The addresstag
     * Meta information extracted from the WSDL
     * - documentation: Addresstag of an electronic address as Uniquename
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $addresstag = null;
    /**
     * Constructor method for findUnverifiedEMails
     * @uses FindUnverifiedEMails::setId()
     * @uses FindUnverifiedEMails::setPersonId()
     * @uses FindUnverifiedEMails::setNotificationCategory()
     * @uses FindUnverifiedEMails::setValidTo()
     * @uses FindUnverifiedEMails::setEaddressValue()
     * @uses FindUnverifiedEMails::setAddresstag()
     * @param string $id
     * @param string $personId
     * @param string $notificationCategory
     * @param string $validTo
     * @param string $eaddressValue
     * @param string $addresstag
     */
    public function __construct(?string $id = null, ?string $personId = null, ?string $notificationCategory = null, ?string $validTo = null, ?string $eaddressValue = null, ?string $addresstag = null)
    {
        $this
            ->setId($id)
            ->setPersonId($personId)
            ->setNotificationCategory($notificationCategory)
            ->setValidTo($validTo)
            ->setEaddressValue($eaddressValue)
            ->setAddresstag($addresstag);
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindUnverifiedEMails
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
     * Get personId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPersonId(): ?string
    {
        return $this->personId ?? null;
    }
    /**
     * Set personId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $personId
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindUnverifiedEMails
     */
    public function setPersonId(?string $personId = null): self
    {
        // validation for constraint: string
        if (!is_null($personId) && !is_string($personId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personId, true), gettype($personId)), __LINE__);
        }
        if (is_null($personId) || (is_array($personId) && empty($personId))) {
            unset($this->personId);
        } else {
            $this->personId = $personId;
        }
        
        return $this;
    }
    /**
     * Get notificationCategory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNotificationCategory(): ?string
    {
        return $this->notificationCategory ?? null;
    }
    /**
     * Set notificationCategory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $notificationCategory
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindUnverifiedEMails
     */
    public function setNotificationCategory(?string $notificationCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($notificationCategory) && !is_string($notificationCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notificationCategory, true), gettype($notificationCategory)), __LINE__);
        }
        if (is_null($notificationCategory) || (is_array($notificationCategory) && empty($notificationCategory))) {
            unset($this->notificationCategory);
        } else {
            $this->notificationCategory = $notificationCategory;
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindUnverifiedEMails
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
     * Get eaddressValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEaddressValue(): ?string
    {
        return $this->eaddressValue ?? null;
    }
    /**
     * Set eaddressValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $eaddressValue
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindUnverifiedEMails
     */
    public function setEaddressValue(?string $eaddressValue = null): self
    {
        // validation for constraint: string
        if (!is_null($eaddressValue) && !is_string($eaddressValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eaddressValue, true), gettype($eaddressValue)), __LINE__);
        }
        if (is_null($eaddressValue) || (is_array($eaddressValue) && empty($eaddressValue))) {
            unset($this->eaddressValue);
        } else {
            $this->eaddressValue = $eaddressValue;
        }
        
        return $this;
    }
    /**
     * Get addresstag value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddresstag(): ?string
    {
        return $this->addresstag ?? null;
    }
    /**
     * Set addresstag value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addresstag
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindUnverifiedEMails
     */
    public function setAddresstag(?string $addresstag = null): self
    {
        // validation for constraint: string
        if (!is_null($addresstag) && !is_string($addresstag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addresstag, true), gettype($addresstag)), __LINE__);
        }
        if (is_null($addresstag) || (is_array($addresstag) && empty($addresstag))) {
            unset($this->addresstag);
        } else {
            $this->addresstag = $addresstag;
        }
        
        return $this;
    }
}
