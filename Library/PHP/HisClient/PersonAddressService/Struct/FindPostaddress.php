<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findPostaddress Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindPostaddress extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: ID of searched Postaddress
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
     * - documentation: Notification category of a postal address as Uniquename
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $notificationCategory = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - documentation: End of validity of a postal address
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * The street
     * Meta information extracted from the WSDL
     * - documentation: Street of a postal address
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The postcode
     * Meta information extracted from the WSDL
     * - documentation: Postcode of a postal address
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $postcode = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - documentation: City of a postal address
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The addressaddition
     * Meta information extracted from the WSDL
     * - documentation: Addressaddition of a postal address
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $addressaddition = null;
    /**
     * The postofficebox
     * Meta information extracted from the WSDL
     * - documentation: Postofficebox of a postal address
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $postofficebox = null;
    /**
     * The company
     * Meta information extracted from the WSDL
     * - documentation: Company of a postal address
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $company = null;
    /**
     * The divisionName
     * Meta information extracted from the WSDL
     * - documentation: Company division of a postal address
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $divisionName = null;
    /**
     * The state
     * Meta information extracted from the WSDL
     * - documentation: State of a postal address
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - documentation: Country of a postal address as Uniquename
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The addresstag
     * Meta information extracted from the WSDL
     * - documentation: Addresstag of a postal address as Uniquename
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $addresstag = null;
    /**
     * Constructor method for findPostaddress
     * @uses FindPostaddress::setId()
     * @uses FindPostaddress::setPersonId()
     * @uses FindPostaddress::setNotificationCategory()
     * @uses FindPostaddress::setValidTo()
     * @uses FindPostaddress::setStreet()
     * @uses FindPostaddress::setPostcode()
     * @uses FindPostaddress::setCity()
     * @uses FindPostaddress::setAddressaddition()
     * @uses FindPostaddress::setPostofficebox()
     * @uses FindPostaddress::setCompany()
     * @uses FindPostaddress::setDivisionName()
     * @uses FindPostaddress::setState()
     * @uses FindPostaddress::setCountry()
     * @uses FindPostaddress::setAddresstag()
     * @param string $id
     * @param string $personId
     * @param string $notificationCategory
     * @param string $validTo
     * @param string $street
     * @param string $postcode
     * @param string $city
     * @param string $addressaddition
     * @param string $postofficebox
     * @param string $company
     * @param string $divisionName
     * @param string $state
     * @param string $country
     * @param string $addresstag
     */
    public function __construct(?string $id = null, ?string $personId = null, ?string $notificationCategory = null, ?string $validTo = null, ?string $street = null, ?string $postcode = null, ?string $city = null, ?string $addressaddition = null, ?string $postofficebox = null, ?string $company = null, ?string $divisionName = null, ?string $state = null, ?string $country = null, ?string $addresstag = null)
    {
        $this
            ->setId($id)
            ->setPersonId($personId)
            ->setNotificationCategory($notificationCategory)
            ->setValidTo($validTo)
            ->setStreet($street)
            ->setPostcode($postcode)
            ->setCity($city)
            ->setAddressaddition($addressaddition)
            ->setPostofficebox($postofficebox)
            ->setCompany($company)
            ->setDivisionName($divisionName)
            ->setState($state)
            ->setCountry($country)
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddress
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddress
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddress
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddress
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
     * Get street value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street ?? null;
    }
    /**
     * Set street value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $street
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddress
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        if (is_null($street) || (is_array($street) && empty($street))) {
            unset($this->street);
        } else {
            $this->street = $street;
        }
        
        return $this;
    }
    /**
     * Get postcode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode ?? null;
    }
    /**
     * Set postcode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postcode
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddress
     */
    public function setPostcode(?string $postcode = null): self
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postcode, true), gettype($postcode)), __LINE__);
        }
        if (is_null($postcode) || (is_array($postcode) && empty($postcode))) {
            unset($this->postcode);
        } else {
            $this->postcode = $postcode;
        }
        
        return $this;
    }
    /**
     * Get city value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city ?? null;
    }
    /**
     * Set city value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $city
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddress
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->city);
        } else {
            $this->city = $city;
        }
        
        return $this;
    }
    /**
     * Get addressaddition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddressaddition(): ?string
    {
        return $this->addressaddition ?? null;
    }
    /**
     * Set addressaddition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addressaddition
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddress
     */
    public function setAddressaddition(?string $addressaddition = null): self
    {
        // validation for constraint: string
        if (!is_null($addressaddition) && !is_string($addressaddition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressaddition, true), gettype($addressaddition)), __LINE__);
        }
        if (is_null($addressaddition) || (is_array($addressaddition) && empty($addressaddition))) {
            unset($this->addressaddition);
        } else {
            $this->addressaddition = $addressaddition;
        }
        
        return $this;
    }
    /**
     * Get postofficebox value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostofficebox(): ?string
    {
        return $this->postofficebox ?? null;
    }
    /**
     * Set postofficebox value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postofficebox
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddress
     */
    public function setPostofficebox(?string $postofficebox = null): self
    {
        // validation for constraint: string
        if (!is_null($postofficebox) && !is_string($postofficebox)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postofficebox, true), gettype($postofficebox)), __LINE__);
        }
        if (is_null($postofficebox) || (is_array($postofficebox) && empty($postofficebox))) {
            unset($this->postofficebox);
        } else {
            $this->postofficebox = $postofficebox;
        }
        
        return $this;
    }
    /**
     * Get company value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company ?? null;
    }
    /**
     * Set company value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $company
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddress
     */
    public function setCompany(?string $company = null): self
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company, true), gettype($company)), __LINE__);
        }
        if (is_null($company) || (is_array($company) && empty($company))) {
            unset($this->company);
        } else {
            $this->company = $company;
        }
        
        return $this;
    }
    /**
     * Get divisionName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDivisionName(): ?string
    {
        return $this->divisionName ?? null;
    }
    /**
     * Set divisionName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $divisionName
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddress
     */
    public function setDivisionName(?string $divisionName = null): self
    {
        // validation for constraint: string
        if (!is_null($divisionName) && !is_string($divisionName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($divisionName, true), gettype($divisionName)), __LINE__);
        }
        if (is_null($divisionName) || (is_array($divisionName) && empty($divisionName))) {
            unset($this->divisionName);
        } else {
            $this->divisionName = $divisionName;
        }
        
        return $this;
    }
    /**
     * Get state value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state ?? null;
    }
    /**
     * Set state value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $state
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddress
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        if (is_null($state) || (is_array($state) && empty($state))) {
            unset($this->state);
        } else {
            $this->state = $state;
        }
        
        return $this;
    }
    /**
     * Get country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country ?? null;
    }
    /**
     * Set country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddress
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->country);
        } else {
            $this->country = $country;
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddress
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
