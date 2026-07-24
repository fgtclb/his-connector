<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readFloorResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadFloorResponse extends AbstractStructBase
{
    /**
     * The floor
     * @var \FGTCLB\HisClient\FacilityService\Struct\Floor
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\Floor $floor;
    /**
     * Constructor method for readFloorResponse
     * @uses ReadFloorResponse::setFloor()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Floor $floor
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\Floor $floor)
    {
        $this
            ->setFloor($floor);
    }
    /**
     * Get floor value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Floor
     */
    public function getFloor(): \FGTCLB\HisClient\FacilityService\Struct\Floor
    {
        return $this->floor;
    }
    /**
     * Set floor value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Floor $floor
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadFloorResponse
     */
    public function setFloor(\FGTCLB\HisClient\FacilityService\Struct\Floor $floor): self
    {
        $this->floor = $floor;
        
        return $this;
    }
}
