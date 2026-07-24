<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readRoomLarge201706Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadRoomLarge201706Response extends AbstractStructBase
{
    /**
     * The room
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706 $room = null;
    /**
     * Constructor method for readRoomLarge201706Response
     * @uses ReadRoomLarge201706Response::setRoom()
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706 $room
     */
    public function __construct(?\FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706 $room = null)
    {
        $this
            ->setRoom($room);
    }
    /**
     * Get room value
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706|null
     */
    public function getRoom(): ?\FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706
    {
        return $this->room;
    }
    /**
     * Set room value
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706 $room
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoomLarge201706Response
     */
    public function setRoom(?\FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706 $room = null): self
    {
        $this->room = $room;
        
        return $this;
    }
}
