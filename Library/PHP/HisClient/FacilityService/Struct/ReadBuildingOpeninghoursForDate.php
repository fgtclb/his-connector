<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readBuildingOpeninghoursForDate Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadBuildingOpeninghoursForDate extends AbstractStructBase
{
    /**
     * The buildingId
     * Meta information extracted from the WSDL
     * - documentation: The ID of the building to which the request should be made.
     * @var int
     */
    protected int $buildingId;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - documentation: The date for the request; If nil or not set the current date will be used.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * Constructor method for readBuildingOpeninghoursForDate
     * @uses ReadBuildingOpeninghoursForDate::setBuildingId()
     * @uses ReadBuildingOpeninghoursForDate::setDate()
     * @param int $buildingId
     * @param string $date
     */
    public function __construct(int $buildingId, ?string $date = null)
    {
        $this
            ->setBuildingId($buildingId)
            ->setDate($date);
    }
    /**
     * Get buildingId value
     * @return int
     */
    public function getBuildingId(): int
    {
        return $this->buildingId;
    }
    /**
     * Set buildingId value
     * @param int $buildingId
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadBuildingOpeninghoursForDate
     */
    public function setBuildingId(int $buildingId): self
    {
        // validation for constraint: int
        if (!is_null($buildingId) && !(is_int($buildingId) || ctype_digit($buildingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($buildingId, true), gettype($buildingId)), __LINE__);
        }
        $this->buildingId = $buildingId;
        
        return $this;
    }
    /**
     * Get date value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date ?? null;
    }
    /**
     * Set date value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $date
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadBuildingOpeninghoursForDate
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        if (is_null($date) || (is_array($date) && empty($date))) {
            unset($this->date);
        } else {
            $this->date = $date;
        }
        
        return $this;
    }
}
