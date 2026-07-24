<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\RoomAttributeService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateRoomAttributeForRoom Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateRoomAttributeForRoom extends AbstractStructBase
{
    /**
     * The roomAttributeDto
     * @var \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto
     */
    protected \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto $roomAttributeDto;
    /**
     * Constructor method for updateRoomAttributeForRoom
     * @uses UpdateRoomAttributeForRoom::setRoomAttributeDto()
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto $roomAttributeDto
     */
    public function __construct(\FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto $roomAttributeDto)
    {
        $this
            ->setRoomAttributeDto($roomAttributeDto);
    }
    /**
     * Get roomAttributeDto value
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto
     */
    public function getRoomAttributeDto(): \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto
    {
        return $this->roomAttributeDto;
    }
    /**
     * Set roomAttributeDto value
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto $roomAttributeDto
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\UpdateRoomAttributeForRoom
     */
    public function setRoomAttributeDto(\FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto $roomAttributeDto): self
    {
        $this->roomAttributeDto = $roomAttributeDto;
        
        return $this;
    }
}
