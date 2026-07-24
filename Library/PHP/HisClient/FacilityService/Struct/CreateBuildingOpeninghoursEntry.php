<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createBuildingOpeninghoursEntry Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateBuildingOpeninghoursEntry extends AbstractStructBase
{
    /**
     * The buildingId
     * @var int
     */
    protected int $buildingId;
    /**
     * The openinghoursEntry
     * @var \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours $openinghoursEntry;
    /**
     * Constructor method for createBuildingOpeninghoursEntry
     * @uses CreateBuildingOpeninghoursEntry::setBuildingId()
     * @uses CreateBuildingOpeninghoursEntry::setOpeninghoursEntry()
     * @param int $buildingId
     * @param \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours $openinghoursEntry
     */
    public function __construct(int $buildingId, \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours $openinghoursEntry)
    {
        $this
            ->setBuildingId($buildingId)
            ->setOpeninghoursEntry($openinghoursEntry);
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\CreateBuildingOpeninghoursEntry
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
     * Get openinghoursEntry value
     * @return \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours
     */
    public function getOpeninghoursEntry(): \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours
    {
        return $this->openinghoursEntry;
    }
    /**
     * Set openinghoursEntry value
     * @param \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours $openinghoursEntry
     * @return \FGTCLB\HisClient\FacilityService\Struct\CreateBuildingOpeninghoursEntry
     */
    public function setOpeninghoursEntry(\FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours $openinghoursEntry): self
    {
        $this->openinghoursEntry = $openinghoursEntry;
        
        return $this;
    }
}
