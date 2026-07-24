<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readRoomSegmentResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadRoomSegmentResponse extends AbstractStructBase
{
    /**
     * The roomSegment
     * @var \FGTCLB\HisClient\FacilityService\Struct\RoomSegment
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\RoomSegment $roomSegment;
    /**
     * Constructor method for readRoomSegmentResponse
     * @uses ReadRoomSegmentResponse::setRoomSegment()
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomSegment $roomSegment
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\RoomSegment $roomSegment)
    {
        $this
            ->setRoomSegment($roomSegment);
    }
    /**
     * Get roomSegment value
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomSegment
     */
    public function getRoomSegment(): \FGTCLB\HisClient\FacilityService\Struct\RoomSegment
    {
        return $this->roomSegment;
    }
    /**
     * Set roomSegment value
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomSegment $roomSegment
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoomSegmentResponse
     */
    public function setRoomSegment(\FGTCLB\HisClient\FacilityService\Struct\RoomSegment $roomSegment): self
    {
        $this->roomSegment = $roomSegment;
        
        return $this;
    }
}
