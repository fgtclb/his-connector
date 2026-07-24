<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateBuildingOpeninghoursEntry Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateBuildingOpeninghoursEntry extends AbstractStructBase
{
    /**
     * The openinghoursEntry
     * @var \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours $openinghoursEntry;
    /**
     * Constructor method for updateBuildingOpeninghoursEntry
     * @uses UpdateBuildingOpeninghoursEntry::setOpeninghoursEntry()
     * @param \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours $openinghoursEntry
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours $openinghoursEntry)
    {
        $this
            ->setOpeninghoursEntry($openinghoursEntry);
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\UpdateBuildingOpeninghoursEntry
     */
    public function setOpeninghoursEntry(\FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours $openinghoursEntry): self
    {
        $this->openinghoursEntry = $openinghoursEntry;
        
        return $this;
    }
}
