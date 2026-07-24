<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\RoomAttributeService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createRoomAttributeForRoomResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateRoomAttributeForRoomResponse extends AbstractStructBase
{
    /**
     * The roomAttributeId
     * @var int
     */
    protected int $roomAttributeId;
    /**
     * Constructor method for createRoomAttributeForRoomResponse
     * @uses CreateRoomAttributeForRoomResponse::setRoomAttributeId()
     * @param int $roomAttributeId
     */
    public function __construct(int $roomAttributeId)
    {
        $this
            ->setRoomAttributeId($roomAttributeId);
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
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\CreateRoomAttributeForRoomResponse
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
