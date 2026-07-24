<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CountryValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CountryValue extends AbstractKeyValue
{
    /**
     * The euMember
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $euMember = null;
    /**
     * The ewrMember
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $ewrMember = null;
    /**
     * The oecd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $oecd = null;
    /**
     * The continent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $continent = null;
    /**
     * The iso3166_1_alpha_2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $iso3166_1_alpha_2 = null;
    /**
     * The postalCountryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $postalCountryName = null;
    /**
     * The citizenship
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $citizenship = null;
    /**
     * Constructor method for CountryValue
     * @uses CountryValue::setEuMember()
     * @uses CountryValue::setEwrMember()
     * @uses CountryValue::setOecd()
     * @uses CountryValue::setContinent()
     * @uses CountryValue::setIso3166_1_alpha_2()
     * @uses CountryValue::setPostalCountryName()
     * @uses CountryValue::setCitizenship()
     * @param int $euMember
     * @param int $ewrMember
     * @param int $oecd
     * @param string $continent
     * @param string $iso3166_1_alpha_2
     * @param string $postalCountryName
     * @param string $citizenship
     */
    public function __construct(?int $euMember = null, ?int $ewrMember = null, ?int $oecd = null, ?string $continent = null, ?string $iso3166_1_alpha_2 = null, ?string $postalCountryName = null, ?string $citizenship = null)
    {
        $this
            ->setEuMember($euMember)
            ->setEwrMember($ewrMember)
            ->setOecd($oecd)
            ->setContinent($continent)
            ->setIso3166_1_alpha_2($iso3166_1_alpha_2)
            ->setPostalCountryName($postalCountryName)
            ->setCitizenship($citizenship);
    }
    /**
     * Get euMember value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getEuMember(): ?int
    {
        return $this->euMember ?? null;
    }
    /**
     * Set euMember value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $euMember
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\CountryValue
     */
    public function setEuMember(?int $euMember = null): self
    {
        // validation for constraint: int
        if (!is_null($euMember) && !(is_int($euMember) || ctype_digit($euMember))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($euMember, true), gettype($euMember)), __LINE__);
        }
        if (is_null($euMember) || (is_array($euMember) && empty($euMember))) {
            unset($this->euMember);
        } else {
            $this->euMember = $euMember;
        }
        
        return $this;
    }
    /**
     * Get ewrMember value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getEwrMember(): ?int
    {
        return $this->ewrMember ?? null;
    }
    /**
     * Set ewrMember value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $ewrMember
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\CountryValue
     */
    public function setEwrMember(?int $ewrMember = null): self
    {
        // validation for constraint: int
        if (!is_null($ewrMember) && !(is_int($ewrMember) || ctype_digit($ewrMember))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ewrMember, true), gettype($ewrMember)), __LINE__);
        }
        if (is_null($ewrMember) || (is_array($ewrMember) && empty($ewrMember))) {
            unset($this->ewrMember);
        } else {
            $this->ewrMember = $ewrMember;
        }
        
        return $this;
    }
    /**
     * Get oecd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOecd(): ?int
    {
        return $this->oecd ?? null;
    }
    /**
     * Set oecd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $oecd
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\CountryValue
     */
    public function setOecd(?int $oecd = null): self
    {
        // validation for constraint: int
        if (!is_null($oecd) && !(is_int($oecd) || ctype_digit($oecd))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($oecd, true), gettype($oecd)), __LINE__);
        }
        if (is_null($oecd) || (is_array($oecd) && empty($oecd))) {
            unset($this->oecd);
        } else {
            $this->oecd = $oecd;
        }
        
        return $this;
    }
    /**
     * Get continent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContinent(): ?string
    {
        return $this->continent ?? null;
    }
    /**
     * Set continent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $continent
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\CountryValue
     */
    public function setContinent(?string $continent = null): self
    {
        // validation for constraint: string
        if (!is_null($continent) && !is_string($continent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($continent, true), gettype($continent)), __LINE__);
        }
        if (is_null($continent) || (is_array($continent) && empty($continent))) {
            unset($this->continent);
        } else {
            $this->continent = $continent;
        }
        
        return $this;
    }
    /**
     * Get iso3166_alpha value
     * @return iso3166_alpha
     */
    public function getIso3166_1_alpha_2(): ?string
    {
        return $this->iso3166_1_alpha_2 ?? null;
    }
    /**
     * Set iso3166_alpha value
     * @param iso3166_alpha $iso3166_alpha
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\CountryValue
     */
    public function setIso3166_1_alpha_2(?string $iso3166_1_alpha_2 = null): self
    {
        // validation for constraint: string
        if (!is_null($iso3166_1_alpha_2) && !is_string($iso3166_1_alpha_2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iso3166_1_alpha_2, true), gettype($iso3166_1_alpha_2)), __LINE__);
        }
        if (is_null($iso3166_1_alpha_2) || (is_array($iso3166_1_alpha_2) && empty($iso3166_1_alpha_2))) {
            unset($this->iso3166_1_alpha_2);
        } else {
            $this->iso3166_1_alpha_2 = $iso3166_1_alpha_2;
        }
        
        return $this;
    }
    /**
     * Get postalCountryName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostalCountryName(): ?string
    {
        return $this->postalCountryName ?? null;
    }
    /**
     * Set postalCountryName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postalCountryName
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\CountryValue
     */
    public function setPostalCountryName(?string $postalCountryName = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCountryName) && !is_string($postalCountryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCountryName, true), gettype($postalCountryName)), __LINE__);
        }
        if (is_null($postalCountryName) || (is_array($postalCountryName) && empty($postalCountryName))) {
            unset($this->postalCountryName);
        } else {
            $this->postalCountryName = $postalCountryName;
        }
        
        return $this;
    }
    /**
     * Get citizenship value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCitizenship(): ?string
    {
        return $this->citizenship ?? null;
    }
    /**
     * Set citizenship value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $citizenship
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\CountryValue
     */
    public function setCitizenship(?string $citizenship = null): self
    {
        // validation for constraint: string
        if (!is_null($citizenship) && !is_string($citizenship)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($citizenship, true), gettype($citizenship)), __LINE__);
        }
        if (is_null($citizenship) || (is_array($citizenship) && empty($citizenship))) {
            unset($this->citizenship);
        } else {
            $this->citizenship = $citizenship;
        }
        
        return $this;
    }
}
