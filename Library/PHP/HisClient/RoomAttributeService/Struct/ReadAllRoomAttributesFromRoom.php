<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\RoomAttributeService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAllRoomAttributesFromRoom Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAllRoomAttributesFromRoom extends AbstractStructBase
{
    /**
     * The roomId
     * @var int
     */
    protected int $roomId;
    /**
     * Constructor method for readAllRoomAttributesFromRoom
     * @uses ReadAllRoomAttributesFromRoom::setRoomId()
     * @param int $roomId
     */
    public function __construct(int $roomId)
    {
        $this
            ->setRoomId($roomId);
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
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\ReadAllRoomAttributesFromRoom
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
}
