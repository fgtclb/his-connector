<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveFloor202112 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveFloor202112 extends AbstractStructBase
{
    /**
     * The floor
     * @var \FGTCLB\HisClient\FacilityService\Struct\Floor202112
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\Floor202112 $floor;
    /**
     * Constructor method for saveFloor202112
     * @uses SaveFloor202112::setFloor()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Floor202112 $floor
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\Floor202112 $floor)
    {
        $this
            ->setFloor($floor);
    }
    /**
     * Get floor value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Floor202112
     */
    public function getFloor(): \FGTCLB\HisClient\FacilityService\Struct\Floor202112
    {
        return $this->floor;
    }
    /**
     * Set floor value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Floor202112 $floor
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveFloor202112
     */
    public function setFloor(\FGTCLB\HisClient\FacilityService\Struct\Floor202112 $floor): self
    {
        $this->floor = $floor;
        
        return $this;
    }
}
