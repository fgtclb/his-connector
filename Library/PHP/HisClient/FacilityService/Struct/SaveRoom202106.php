<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveRoom202106 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveRoom202106 extends AbstractStructBase
{
    /**
     * The room
     * @var \FGTCLB\HisClient\FacilityService\Struct\Room202106
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\Room202106 $room;
    /**
     * Constructor method for saveRoom202106
     * @uses SaveRoom202106::setRoom()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Room202106 $room
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\Room202106 $room)
    {
        $this
            ->setRoom($room);
    }
    /**
     * Get room value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Room202106
     */
    public function getRoom(): \FGTCLB\HisClient\FacilityService\Struct\Room202106
    {
        return $this->room;
    }
    /**
     * Set room value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Room202106 $room
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveRoom202106
     */
    public function setRoom(\FGTCLB\HisClient\FacilityService\Struct\Room202106 $room): self
    {
        $this->room = $room;
        
        return $this;
    }
}
