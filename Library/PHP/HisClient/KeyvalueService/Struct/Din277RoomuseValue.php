<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Din277RoomuseValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Din277RoomuseValue extends AbstractKeyValue
{
    /**
     * The dinnumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $dinnumber = null;
    /**
     * The isEventLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $isEventLocation = null;
    /**
     * The isOfficeLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $isOfficeLocation = null;
    /**
     * Constructor method for Din277RoomuseValue
     * @uses Din277RoomuseValue::setDinnumber()
     * @uses Din277RoomuseValue::setIsEventLocation()
     * @uses Din277RoomuseValue::setIsOfficeLocation()
     * @param string $dinnumber
     * @param bool $isEventLocation
     * @param bool $isOfficeLocation
     */
    public function __construct(?string $dinnumber = null, ?bool $isEventLocation = null, ?bool $isOfficeLocation = null)
    {
        $this
            ->setDinnumber($dinnumber)
            ->setIsEventLocation($isEventLocation)
            ->setIsOfficeLocation($isOfficeLocation);
    }
    /**
     * Get dinnumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDinnumber(): ?string
    {
        return $this->dinnumber ?? null;
    }
    /**
     * Set dinnumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dinnumber
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\Din277RoomuseValue
     */
    public function setDinnumber(?string $dinnumber = null): self
    {
        // validation for constraint: string
        if (!is_null($dinnumber) && !is_string($dinnumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dinnumber, true), gettype($dinnumber)), __LINE__);
        }
        if (is_null($dinnumber) || (is_array($dinnumber) && empty($dinnumber))) {
            unset($this->dinnumber);
        } else {
            $this->dinnumber = $dinnumber;
        }
        
        return $this;
    }
    /**
     * Get isEventLocation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsEventLocation(): ?bool
    {
        return $this->isEventLocation ?? null;
    }
    /**
     * Set isEventLocation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isEventLocation
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\Din277RoomuseValue
     */
    public function setIsEventLocation(?bool $isEventLocation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEventLocation) && !is_bool($isEventLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEventLocation, true), gettype($isEventLocation)), __LINE__);
        }
        if (is_null($isEventLocation) || (is_array($isEventLocation) && empty($isEventLocation))) {
            unset($this->isEventLocation);
        } else {
            $this->isEventLocation = $isEventLocation;
        }
        
        return $this;
    }
    /**
     * Get isOfficeLocation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsOfficeLocation(): ?bool
    {
        return $this->isOfficeLocation ?? null;
    }
    /**
     * Set isOfficeLocation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isOfficeLocation
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\Din277RoomuseValue
     */
    public function setIsOfficeLocation(?bool $isOfficeLocation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOfficeLocation) && !is_bool($isOfficeLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOfficeLocation, true), gettype($isOfficeLocation)), __LINE__);
        }
        if (is_null($isOfficeLocation) || (is_array($isOfficeLocation) && empty($isOfficeLocation))) {
            unset($this->isOfficeLocation);
        } else {
            $this->isOfficeLocation = $isOfficeLocation;
        }
        
        return $this;
    }
}
