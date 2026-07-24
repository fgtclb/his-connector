<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveBuilding202106 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBuilding202106 extends AbstractStructBase
{
    /**
     * The building
     * @var \FGTCLB\HisClient\FacilityService\Struct\Building202106
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\Building202106 $building;
    /**
     * Constructor method for saveBuilding202106
     * @uses SaveBuilding202106::setBuilding()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Building202106 $building
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\Building202106 $building)
    {
        $this
            ->setBuilding($building);
    }
    /**
     * Get building value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202106
     */
    public function getBuilding(): \FGTCLB\HisClient\FacilityService\Struct\Building202106
    {
        return $this->building;
    }
    /**
     * Set building value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Building202106 $building
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveBuilding202106
     */
    public function setBuilding(\FGTCLB\HisClient\FacilityService\Struct\Building202106 $building): self
    {
        $this->building = $building;
        
        return $this;
    }
}
