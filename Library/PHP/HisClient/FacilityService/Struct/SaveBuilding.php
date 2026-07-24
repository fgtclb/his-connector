<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveBuilding Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBuilding extends AbstractStructBase
{
    /**
     * The building
     * @var \FGTCLB\HisClient\FacilityService\Struct\Building
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\Building $building;
    /**
     * Constructor method for saveBuilding
     * @uses SaveBuilding::setBuilding()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Building $building
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\Building $building)
    {
        $this
            ->setBuilding($building);
    }
    /**
     * Get building value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building
     */
    public function getBuilding(): \FGTCLB\HisClient\FacilityService\Struct\Building
    {
        return $this->building;
    }
    /**
     * Set building value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Building $building
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveBuilding
     */
    public function setBuilding(\FGTCLB\HisClient\FacilityService\Struct\Building $building): self
    {
        $this->building = $building;
        
        return $this;
    }
}
