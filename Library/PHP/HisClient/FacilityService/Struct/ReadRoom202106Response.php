<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readRoom202106Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadRoom202106Response extends AbstractStructBase
{
    /**
     * The room
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202106|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\RoomLarge202106 $room = null;
    /**
     * Constructor method for readRoom202106Response
     * @uses ReadRoom202106Response::setRoom()
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202106 $room
     */
    public function __construct(?\FGTCLB\HisClient\FacilityService\Struct\RoomLarge202106 $room = null)
    {
        $this
            ->setRoom($room);
    }
    /**
     * Get room value
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202106|null
     */
    public function getRoom(): ?\FGTCLB\HisClient\FacilityService\Struct\RoomLarge202106
    {
        return $this->room;
    }
    /**
     * Set room value
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202106 $room
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoom202106Response
     */
    public function setRoom(?\FGTCLB\HisClient\FacilityService\Struct\RoomLarge202106 $room = null): self
    {
        $this->room = $room;
        
        return $this;
    }
}
