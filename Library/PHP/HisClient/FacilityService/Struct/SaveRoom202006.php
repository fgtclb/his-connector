<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveRoom202006 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveRoom202006 extends AbstractStructBase
{
    /**
     * The room
     * @var \FGTCLB\HisClient\FacilityService\Struct\Room202006
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\Room202006 $room;
    /**
     * Constructor method for saveRoom202006
     * @uses SaveRoom202006::setRoom()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Room202006 $room
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\Room202006 $room)
    {
        $this
            ->setRoom($room);
    }
    /**
     * Get room value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Room202006
     */
    public function getRoom(): \FGTCLB\HisClient\FacilityService\Struct\Room202006
    {
        return $this->room;
    }
    /**
     * Set room value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Room202006 $room
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveRoom202006
     */
    public function setRoom(\FGTCLB\HisClient\FacilityService\Struct\Room202006 $room): self
    {
        $this->room = $room;
        
        return $this;
    }
}
