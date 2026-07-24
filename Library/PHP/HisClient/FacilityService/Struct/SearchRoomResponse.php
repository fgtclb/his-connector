<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchRoomResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchRoomResponse extends AbstractStructBase
{
    /**
     * The rooms
     * @var \FGTCLB\HisClient\FacilityService\Struct\RoomsType
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\RoomsType $rooms;
    /**
     * Constructor method for searchRoomResponse
     * @uses SearchRoomResponse::setRooms()
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomsType $rooms
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\RoomsType $rooms)
    {
        $this
            ->setRooms($rooms);
    }
    /**
     * Get rooms value
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomsType
     */
    public function getRooms(): \FGTCLB\HisClient\FacilityService\Struct\RoomsType
    {
        return $this->rooms;
    }
    /**
     * Set rooms value
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomsType $rooms
     * @return \FGTCLB\HisClient\FacilityService\Struct\SearchRoomResponse
     */
    public function setRooms(\FGTCLB\HisClient\FacilityService\Struct\RoomsType $rooms): self
    {
        $this->rooms = $rooms;
        
        return $this;
    }
}
