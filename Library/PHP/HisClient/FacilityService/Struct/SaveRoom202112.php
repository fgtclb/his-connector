<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveRoom202112 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveRoom202112 extends AbstractStructBase
{
    /**
     * The room
     * @var \FGTCLB\HisClient\FacilityService\Struct\Room202112
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\Room202112 $room;
    /**
     * Constructor method for saveRoom202112
     * @uses SaveRoom202112::setRoom()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Room202112 $room
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\Room202112 $room)
    {
        $this
            ->setRoom($room);
    }
    /**
     * Get room value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Room202112
     */
    public function getRoom(): \FGTCLB\HisClient\FacilityService\Struct\Room202112
    {
        return $this->room;
    }
    /**
     * Set room value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Room202112 $room
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveRoom202112
     */
    public function setRoom(\FGTCLB\HisClient\FacilityService\Struct\Room202112 $room): self
    {
        $this->room = $room;
        
        return $this;
    }
}
