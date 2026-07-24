<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readRoomSegment202106Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadRoomSegment202106Response extends AbstractStructBase
{
    /**
     * The roomSegment
     * @var \FGTCLB\HisClient\FacilityService\Struct\RoomSegment202106
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\RoomSegment202106 $roomSegment;
    /**
     * Constructor method for readRoomSegment202106Response
     * @uses ReadRoomSegment202106Response::setRoomSegment()
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomSegment202106 $roomSegment
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\RoomSegment202106 $roomSegment)
    {
        $this
            ->setRoomSegment($roomSegment);
    }
    /**
     * Get roomSegment value
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomSegment202106
     */
    public function getRoomSegment(): \FGTCLB\HisClient\FacilityService\Struct\RoomSegment202106
    {
        return $this->roomSegment;
    }
    /**
     * Set roomSegment value
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomSegment202106 $roomSegment
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoomSegment202106Response
     */
    public function setRoomSegment(\FGTCLB\HisClient\FacilityService\Struct\RoomSegment202106 $roomSegment): self
    {
        $this->roomSegment = $roomSegment;
        
        return $this;
    }
}
