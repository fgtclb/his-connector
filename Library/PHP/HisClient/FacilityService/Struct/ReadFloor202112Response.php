<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readFloor202112Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadFloor202112Response extends AbstractStructBase
{
    /**
     * The floor
     * @var \FGTCLB\HisClient\FacilityService\Struct\Floor202112
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\Floor202112 $floor;
    /**
     * Constructor method for readFloor202112Response
     * @uses ReadFloor202112Response::setFloor()
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadFloor202112Response
     */
    public function setFloor(\FGTCLB\HisClient\FacilityService\Struct\Floor202112 $floor): self
    {
        $this->floor = $floor;
        
        return $this;
    }
}
