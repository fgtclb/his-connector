<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveRoomSegment202112 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveRoomSegment202112 extends AbstractStructBase
{
    /**
     * The roomSegment
     * @var \FGTCLB\HisClient\FacilityService\Struct\RoomSegment202112
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\RoomSegment202112 $roomSegment;
    /**
     * Constructor method for saveRoomSegment202112
     * @uses SaveRoomSegment202112::setRoomSegment()
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomSegment202112 $roomSegment
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\RoomSegment202112 $roomSegment)
    {
        $this
            ->setRoomSegment($roomSegment);
    }
    /**
     * Get roomSegment value
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomSegment202112
     */
    public function getRoomSegment(): \FGTCLB\HisClient\FacilityService\Struct\RoomSegment202112
    {
        return $this->roomSegment;
    }
    /**
     * Set roomSegment value
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomSegment202112 $roomSegment
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveRoomSegment202112
     */
    public function setRoomSegment(\FGTCLB\HisClient\FacilityService\Struct\RoomSegment202112 $roomSegment): self
    {
        $this->roomSegment = $roomSegment;
        
        return $this;
    }
}
