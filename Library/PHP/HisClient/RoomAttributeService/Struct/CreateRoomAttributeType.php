<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\RoomAttributeService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createRoomAttributeType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateRoomAttributeType extends AbstractStructBase
{
    /**
     * The roomAttributeTypeDto
     * @var \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto
     */
    protected \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto $roomAttributeTypeDto;
    /**
     * Constructor method for createRoomAttributeType
     * @uses CreateRoomAttributeType::setRoomAttributeTypeDto()
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto $roomAttributeTypeDto
     */
    public function __construct(\FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto $roomAttributeTypeDto)
    {
        $this
            ->setRoomAttributeTypeDto($roomAttributeTypeDto);
    }
    /**
     * Get roomAttributeTypeDto value
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto
     */
    public function getRoomAttributeTypeDto(): \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto
    {
        return $this->roomAttributeTypeDto;
    }
    /**
     * Set roomAttributeTypeDto value
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto $roomAttributeTypeDto
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\CreateRoomAttributeType
     */
    public function setRoomAttributeTypeDto(\FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto $roomAttributeTypeDto): self
    {
        $this->roomAttributeTypeDto = $roomAttributeTypeDto;
        
        return $this;
    }
}
