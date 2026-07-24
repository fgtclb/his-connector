<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Room202106 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Room202106 extends Room
{
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * The centralised
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $centralised = null;
    /**
     * The seatCapacity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $seatCapacity = null;
    /**
     * Constructor method for Room202106
     * @uses Room202106::setValidFrom()
     * @uses Room202106::setValidTo()
     * @uses Room202106::setCentralised()
     * @uses Room202106::setSeatCapacity()
     * @param string $validFrom
     * @param string $validTo
     * @param bool $centralised
     * @param int $seatCapacity
     */
    public function __construct(?string $validFrom = null, ?string $validTo = null, ?bool $centralised = null, ?int $seatCapacity = null)
    {
        $this
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setCentralised($centralised)
            ->setSeatCapacity($seatCapacity);
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \FGTCLB\HisClient\FacilityService\Struct\Room202106
     */
    public function setValidFrom(?string $validFrom = null): self
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
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \FGTCLB\HisClient\FacilityService\Struct\Room202106
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
    /**
     * Get centralised value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getCentralised(): ?bool
    {
        return $this->centralised ?? null;
    }
    /**
     * Set centralised value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $centralised
     * @return \FGTCLB\HisClient\FacilityService\Struct\Room202106
     */
    public function setCentralised(?bool $centralised = null): self
    {
        // validation for constraint: boolean
        if (!is_null($centralised) && !is_bool($centralised)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($centralised, true), gettype($centralised)), __LINE__);
        }
        if (is_null($centralised) || (is_array($centralised) && empty($centralised))) {
            unset($this->centralised);
        } else {
            $this->centralised = $centralised;
        }
        
        return $this;
    }
    /**
     * Get seatCapacity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getSeatCapacity(): ?int
    {
        return $this->seatCapacity ?? null;
    }
    /**
     * Set seatCapacity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $seatCapacity
     * @return \FGTCLB\HisClient\FacilityService\Struct\Room202106
     */
    public function setSeatCapacity(?int $seatCapacity = null): self
    {
        // validation for constraint: int
        if (!is_null($seatCapacity) && !(is_int($seatCapacity) || ctype_digit($seatCapacity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($seatCapacity, true), gettype($seatCapacity)), __LINE__);
        }
        if (is_null($seatCapacity) || (is_array($seatCapacity) && empty($seatCapacity))) {
            unset($this->seatCapacity);
        } else {
            $this->seatCapacity = $seatCapacity;
        }
        
        return $this;
    }
}
