<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PostAddress Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PostAddress extends Address
{
    /**
     * The street
     * @var string
     */
    protected string $street;
    /**
     * The city
     * @var string
     */
    protected string $city;
    /**
     * The postcode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $postcode = null;
    /**
     * The addressaddition
     * Meta information extracted from the WSDL
     * - documentation: Further address components (e.g. department, administrative building).
     * - nillable: true
     * @var string|null
     */
    protected ?string $addressaddition = null;
    /**
     * The postofficebox
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $postofficebox = null;
    /**
     * The company
     * Meta information extracted from the WSDL
     * - documentation: Name of company (e.g.: company name captured by an alumni).
     * - nillable: true
     * @var string|null
     */
    protected ?string $company = null;
    /**
     * The state
     * Meta information extracted from the WSDL
     * - documentation: Federal state - filled if a foreign address is available.
     * - nillable: true
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The countryId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $countryId = null;
    /**
     * Constructor method for PostAddress
     * @uses PostAddress::setStreet()
     * @uses PostAddress::setCity()
     * @uses PostAddress::setPostcode()
     * @uses PostAddress::setAddressaddition()
     * @uses PostAddress::setPostofficebox()
     * @uses PostAddress::setCompany()
     * @uses PostAddress::setState()
     * @uses PostAddress::setCountryId()
     * @param string $street
     * @param string $city
     * @param string $postcode
     * @param string $addressaddition
     * @param string $postofficebox
     * @param string $company
     * @param string $state
     * @param int $countryId
     */
    public function __construct(string $street, string $city, ?string $postcode = null, ?string $addressaddition = null, ?string $postofficebox = null, ?string $company = null, ?string $state = null, ?int $countryId = null)
    {
        $this
            ->setStreet($street)
            ->setCity($city)
            ->setPostcode($postcode)
            ->setAddressaddition($addressaddition)
            ->setPostofficebox($postofficebox)
            ->setCompany($company)
            ->setState($state)
            ->setCountryId($countryId);
    }
    /**
     * Get street value
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAddress
     */
    public function setStreet(string $street): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        
        return $this;
    }
    /**
     * Get city value
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAddress
     */
    public function setCity(string $city): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get postcode value
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAddress
     */
    public function setPostcode(?string $postcode = null): self
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postcode, true), gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        
        return $this;
    }
    /**
     * Get addressaddition value
     * @return string|null
     */
    public function getAddressaddition(): ?string
    {
        return $this->addressaddition;
    }
    /**
     * Set addressaddition value
     * @param string $addressaddition
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAddress
     */
    public function setAddressaddition(?string $addressaddition = null): self
    {
        // validation for constraint: string
        if (!is_null($addressaddition) && !is_string($addressaddition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressaddition, true), gettype($addressaddition)), __LINE__);
        }
        $this->addressaddition = $addressaddition;
        
        return $this;
    }
    /**
     * Get postofficebox value
     * @return string|null
     */
    public function getPostofficebox(): ?string
    {
        return $this->postofficebox;
    }
    /**
     * Set postofficebox value
     * @param string $postofficebox
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAddress
     */
    public function setPostofficebox(?string $postofficebox = null): self
    {
        // validation for constraint: string
        if (!is_null($postofficebox) && !is_string($postofficebox)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postofficebox, true), gettype($postofficebox)), __LINE__);
        }
        $this->postofficebox = $postofficebox;
        
        return $this;
    }
    /**
     * Get company value
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }
    /**
     * Set company value
     * @param string $company
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAddress
     */
    public function setCompany(?string $company = null): self
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company, true), gettype($company)), __LINE__);
        }
        $this->company = $company;
        
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAddress
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
        return $this;
    }
    /**
     * Get countryId value
     * @return int|null
     */
    public function getCountryId(): ?int
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param int $countryId
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAddress
     */
    public function setCountryId(?int $countryId = null): self
    {
        // validation for constraint: int
        if (!is_null($countryId) && !(is_int($countryId) || ctype_digit($countryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countryId, true), gettype($countryId)), __LINE__);
        }
        $this->countryId = $countryId;
        
        return $this;
    }
}
