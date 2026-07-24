<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Room202006 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Room202006 extends Room
{
    /**
     * The seatCapacity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $seatCapacity = null;
    /**
     * Constructor method for Room202006
     * @uses Room202006::setSeatCapacity()
     * @param int $seatCapacity
     */
    public function __construct(?int $seatCapacity = null)
    {
        $this
            ->setSeatCapacity($seatCapacity);
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\Room202006
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
