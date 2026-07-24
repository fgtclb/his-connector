<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\RoomAttributeService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createRoomAttributeForRoom Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateRoomAttributeForRoom extends AbstractStructBase
{
    /**
     * The roomId
     * @var int
     */
    protected int $roomId;
    /**
     * The roomAttributeDto
     * @var \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto
     */
    protected \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto $roomAttributeDto;
    /**
     * Constructor method for createRoomAttributeForRoom
     * @uses CreateRoomAttributeForRoom::setRoomId()
     * @uses CreateRoomAttributeForRoom::setRoomAttributeDto()
     * @param int $roomId
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto $roomAttributeDto
     */
    public function __construct(int $roomId, \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto $roomAttributeDto)
    {
        $this
            ->setRoomId($roomId)
            ->setRoomAttributeDto($roomAttributeDto);
    }
    /**
     * Get roomId value
     * @return int
     */
    public function getRoomId(): int
    {
        return $this->roomId;
    }
    /**
     * Set roomId value
     * @param int $roomId
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\CreateRoomAttributeForRoom
     */
    public function setRoomId(int $roomId): self
    {
        // validation for constraint: int
        if (!is_null($roomId) && !(is_int($roomId) || ctype_digit($roomId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roomId, true), gettype($roomId)), __LINE__);
        }
        $this->roomId = $roomId;
        
        return $this;
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
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\CreateRoomAttributeForRoom
     */
    public function setRoomAttributeDto(\FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto $roomAttributeDto): self
    {
        $this->roomAttributeDto = $roomAttributeDto;
        
        return $this;
    }
}
