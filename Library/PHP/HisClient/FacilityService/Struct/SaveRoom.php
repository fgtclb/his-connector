<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveRoom Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveRoom extends AbstractStructBase
{
    /**
     * The room
     * @var \FGTCLB\HisClient\FacilityService\Struct\Room
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\Room $room;
    /**
     * Constructor method for saveRoom
     * @uses SaveRoom::setRoom()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Room $room
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\Room $room)
    {
        $this
            ->setRoom($room);
    }
    /**
     * Get room value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Room
     */
    public function getRoom(): \FGTCLB\HisClient\FacilityService\Struct\Room
    {
        return $this->room;
    }
    /**
     * Set room value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Room $room
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveRoom
     */
    public function setRoom(\FGTCLB\HisClient\FacilityService\Struct\Room $room): self
    {
        $this->room = $room;
        
        return $this;
    }
}
