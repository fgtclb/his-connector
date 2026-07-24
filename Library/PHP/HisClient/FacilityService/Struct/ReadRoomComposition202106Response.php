<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readRoomComposition202106Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadRoomComposition202106Response extends AbstractStructBase
{
    /**
     * The roomComposition
     * @var \FGTCLB\HisClient\FacilityService\Struct\RoomComposition202106
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\RoomComposition202106 $roomComposition;
    /**
     * Constructor method for readRoomComposition202106Response
     * @uses ReadRoomComposition202106Response::setRoomComposition()
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomComposition202106 $roomComposition
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\RoomComposition202106 $roomComposition)
    {
        $this
            ->setRoomComposition($roomComposition);
    }
    /**
     * Get roomComposition value
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomComposition202106
     */
    public function getRoomComposition(): \FGTCLB\HisClient\FacilityService\Struct\RoomComposition202106
    {
        return $this->roomComposition;
    }
    /**
     * Set roomComposition value
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomComposition202106 $roomComposition
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoomComposition202106Response
     */
    public function setRoomComposition(\FGTCLB\HisClient\FacilityService\Struct\RoomComposition202106 $roomComposition): self
    {
        $this->roomComposition = $roomComposition;
        
        return $this;
    }
}
