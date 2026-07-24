<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\RoomAttributeService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteRoomAttributeFromRoom Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteRoomAttributeFromRoom extends AbstractStructBase
{
    /**
     * The roomId
     * @var int
     */
    protected int $roomId;
    /**
     * The roomAttributeId
     * @var int
     */
    protected int $roomAttributeId;
    /**
     * Constructor method for deleteRoomAttributeFromRoom
     * @uses DeleteRoomAttributeFromRoom::setRoomId()
     * @uses DeleteRoomAttributeFromRoom::setRoomAttributeId()
     * @param int $roomId
     * @param int $roomAttributeId
     */
    public function __construct(int $roomId, int $roomAttributeId)
    {
        $this
            ->setRoomId($roomId)
            ->setRoomAttributeId($roomAttributeId);
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
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\DeleteRoomAttributeFromRoom
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
     * Get roomAttributeId value
     * @return int
     */
    public function getRoomAttributeId(): int
    {
        return $this->roomAttributeId;
    }
    /**
     * Set roomAttributeId value
     * @param int $roomAttributeId
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\DeleteRoomAttributeFromRoom
     */
    public function setRoomAttributeId(int $roomAttributeId): self
    {
        // validation for constraint: int
        if (!is_null($roomAttributeId) && !(is_int($roomAttributeId) || ctype_digit($roomAttributeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roomAttributeId, true), gettype($roomAttributeId)), __LINE__);
        }
        $this->roomAttributeId = $roomAttributeId;
        
        return $this;
    }
}
