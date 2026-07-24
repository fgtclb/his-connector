<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readRoomCompositionResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadRoomCompositionResponse extends AbstractStructBase
{
    /**
     * The roomComposition
     * @var \FGTCLB\HisClient\FacilityService\Struct\RoomComposition
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\RoomComposition $roomComposition;
    /**
     * Constructor method for readRoomCompositionResponse
     * @uses ReadRoomCompositionResponse::setRoomComposition()
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomComposition $roomComposition
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\RoomComposition $roomComposition)
    {
        $this
            ->setRoomComposition($roomComposition);
    }
    /**
     * Get roomComposition value
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomComposition
     */
    public function getRoomComposition(): \FGTCLB\HisClient\FacilityService\Struct\RoomComposition
    {
        return $this->roomComposition;
    }
    /**
     * Set roomComposition value
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomComposition $roomComposition
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoomCompositionResponse
     */
    public function setRoomComposition(\FGTCLB\HisClient\FacilityService\Struct\RoomComposition $roomComposition): self
    {
        $this->roomComposition = $roomComposition;
        
        return $this;
    }
}
