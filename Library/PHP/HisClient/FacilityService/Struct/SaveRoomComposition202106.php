<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveRoomComposition202106 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveRoomComposition202106 extends AbstractStructBase
{
    /**
     * The roomComposition
     * @var \FGTCLB\HisClient\FacilityService\Struct\RoomComposition202106
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\RoomComposition202106 $roomComposition;
    /**
     * Constructor method for saveRoomComposition202106
     * @uses SaveRoomComposition202106::setRoomComposition()
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveRoomComposition202106
     */
    public function setRoomComposition(\FGTCLB\HisClient\FacilityService\Struct\RoomComposition202106 $roomComposition): self
    {
        $this->roomComposition = $roomComposition;
        
        return $this;
    }
}
