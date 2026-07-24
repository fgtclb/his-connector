<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readRoomResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadRoomResponse extends AbstractStructBase
{
    /**
     * The room
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\FacilityService\Struct\Room|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\Room $room = null;
    /**
     * Constructor method for readRoomResponse
     * @uses ReadRoomResponse::setRoom()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Room $room
     */
    public function __construct(?\FGTCLB\HisClient\FacilityService\Struct\Room $room = null)
    {
        $this
            ->setRoom($room);
    }
    /**
     * Get room value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Room|null
     */
    public function getRoom(): ?\FGTCLB\HisClient\FacilityService\Struct\Room
    {
        return $this->room;
    }
    /**
     * Set room value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Room $room
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoomResponse
     */
    public function setRoom(?\FGTCLB\HisClient\FacilityService\Struct\Room $room = null): self
    {
        $this->room = $room;
        
        return $this;
    }
}
