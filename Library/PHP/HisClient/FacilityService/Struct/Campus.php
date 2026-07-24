<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Campus Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Campus extends AbstractBuilding
{
    /**
     * The buildingCount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $buildingCount = null;
    /**
     * Constructor method for Campus
     * @uses Campus::setBuildingCount()
     * @param int $buildingCount
     */
    public function __construct(?int $buildingCount = null)
    {
        $this
            ->setBuildingCount($buildingCount);
    }
    /**
     * Get buildingCount value
     * @return int|null
     */
    public function getBuildingCount(): ?int
    {
        return $this->buildingCount;
    }
    /**
     * Set buildingCount value
     * @param int $buildingCount
     * @return \FGTCLB\HisClient\FacilityService\Struct\Campus
     */
    public function setBuildingCount(?int $buildingCount = null): self
    {
        // validation for constraint: int
        if (!is_null($buildingCount) && !(is_int($buildingCount) || ctype_digit($buildingCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($buildingCount, true), gettype($buildingCount)), __LINE__);
        }
        $this->buildingCount = $buildingCount;
        
        return $this;
    }
}
