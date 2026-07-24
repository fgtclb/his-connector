<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveBuilding202112 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBuilding202112 extends AbstractStructBase
{
    /**
     * The building
     * @var \FGTCLB\HisClient\FacilityService\Struct\Building202112
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\Building202112 $building;
    /**
     * Constructor method for saveBuilding202112
     * @uses SaveBuilding202112::setBuilding()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Building202112 $building
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\Building202112 $building)
    {
        $this
            ->setBuilding($building);
    }
    /**
     * Get building value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202112
     */
    public function getBuilding(): \FGTCLB\HisClient\FacilityService\Struct\Building202112
    {
        return $this->building;
    }
    /**
     * Set building value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Building202112 $building
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveBuilding202112
     */
    public function setBuilding(\FGTCLB\HisClient\FacilityService\Struct\Building202112 $building): self
    {
        $this->building = $building;
        
        return $this;
    }
}
