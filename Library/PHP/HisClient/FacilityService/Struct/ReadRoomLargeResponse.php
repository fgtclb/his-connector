<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readRoomLargeResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadRoomLargeResponse extends AbstractStructBase
{
    /**
     * The room
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\FacilityService\Struct\RoomLarge|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\RoomLarge $room = null;
    /**
     * Constructor method for readRoomLargeResponse
     * @uses ReadRoomLargeResponse::setRoom()
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomLarge $room
     */
    public function __construct(?\FGTCLB\HisClient\FacilityService\Struct\RoomLarge $room = null)
    {
        $this
            ->setRoom($room);
    }
    /**
     * Get room value
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge|null
     */
    public function getRoom(): ?\FGTCLB\HisClient\FacilityService\Struct\RoomLarge
    {
        return $this->room;
    }
    /**
     * Set room value
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomLarge $room
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoomLargeResponse
     */
    public function setRoom(?\FGTCLB\HisClient\FacilityService\Struct\RoomLarge $room = null): self
    {
        $this->room = $room;
        
        return $this;
    }
}
