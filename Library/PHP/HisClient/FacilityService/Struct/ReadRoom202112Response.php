<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readRoom202112Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadRoom202112Response extends AbstractStructBase
{
    /**
     * The room
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112 $room = null;
    /**
     * Constructor method for readRoom202112Response
     * @uses ReadRoom202112Response::setRoom()
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112 $room
     */
    public function __construct(?\FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112 $room = null)
    {
        $this
            ->setRoom($room);
    }
    /**
     * Get room value
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112|null
     */
    public function getRoom(): ?\FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112
    {
        return $this->room;
    }
    /**
     * Set room value
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112 $room
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoom202112Response
     */
    public function setRoom(?\FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112 $room = null): self
    {
        $this->room = $room;
        
        return $this;
    }
}
