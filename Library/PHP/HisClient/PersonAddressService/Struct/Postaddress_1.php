<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Postaddress Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Postaddress_1 extends AbstractStructBase
{
    /**
     * The postcode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $postcode = null;
    /**
     * The addressaddition
     * Meta information extracted from the WSDL
     * - documentation: Further address components (e.g. department, administrative building).
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $addressaddition = null;
    /**
     * The postofficebox
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $postofficebox = null;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'CountryValue'. Examples: D, AFG, ET, AL, DZ, VI, AS, AND, ANG, ATG
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The addresstag
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'AddresstagValue'. Examples: community, business, home, sest, delivery, login, postaddress, privat, rz, invoice
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $addresstag = null;
    /**
     * The company
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $company = null;
    /**
     * The divisionName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $divisionName = null;
    /**
     * The state
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The street
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * Constructor method for Postaddress
     * @uses Postaddress_1::setPostcode()
     * @uses Postaddress_1::setAddressaddition()
     * @uses Postaddress_1::setPostofficebox()
     * @uses Postaddress_1::setCountry()
     * @uses Postaddress_1::setAddresstag()
     * @uses Postaddress_1::setCompany()
     * @uses Postaddress_1::setDivisionName()
     * @uses Postaddress_1::setState()
     * @uses Postaddress_1::setStreet()
     * @uses Postaddress_1::setCity()
     * @param string $postcode
     * @param string $addressaddition
     * @param string $postofficebox
     * @param string $country
     * @param string $addresstag
     * @param string $company
     * @param string $divisionName
     * @param string $state
     * @param string $street
     * @param string $city
     */
    public function __construct(?string $postcode = null, ?string $addressaddition = null, ?string $postofficebox = null, ?string $country = null, ?string $addresstag = null, ?string $company = null, ?string $divisionName = null, ?string $state = null, ?string $street = null, ?string $city = null)
    {
        $this
            ->setPostcode($postcode)
            ->setAddressaddition($addressaddition)
            ->setPostofficebox($postofficebox)
            ->setCountry($country)
            ->setAddresstag($addresstag)
            ->setCompany($company)
            ->setDivisionName($divisionName)
            ->setState($state)
            ->setStreet($street)
            ->setCity($city);
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1
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
}
