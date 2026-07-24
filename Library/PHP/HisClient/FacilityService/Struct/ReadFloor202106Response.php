<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readFloor202106Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadFloor202106Response extends AbstractStructBase
{
    /**
     * The floor
     * @var \FGTCLB\HisClient\FacilityService\Struct\Floor202106
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\Floor202106 $floor;
    /**
     * Constructor method for readFloor202106Response
     * @uses ReadFloor202106Response::setFloor()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Floor202106 $floor
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\Floor202106 $floor)
    {
        $this
            ->setFloor($floor);
    }
    /**
     * Get floor value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Floor202106
     */
    public function getFloor(): \FGTCLB\HisClient\FacilityService\Struct\Floor202106
    {
        return $this->floor;
    }
    /**
     * Set floor value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Floor202106 $floor
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadFloor202106Response
     */
    public function setFloor(\FGTCLB\HisClient\FacilityService\Struct\Floor202106 $floor): self
    {
        $this->floor = $floor;
        
        return $this;
    }
}
