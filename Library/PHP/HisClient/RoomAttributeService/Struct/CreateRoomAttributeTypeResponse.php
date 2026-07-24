<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\RoomAttributeService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createRoomAttributeTypeResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateRoomAttributeTypeResponse extends AbstractStructBase
{
    /**
     * The roomAttributeTypeId
     * @var int
     */
    protected int $roomAttributeTypeId;
    /**
     * Constructor method for createRoomAttributeTypeResponse
     * @uses CreateRoomAttributeTypeResponse::setRoomAttributeTypeId()
     * @param int $roomAttributeTypeId
     */
    public function __construct(int $roomAttributeTypeId)
    {
        $this
            ->setRoomAttributeTypeId($roomAttributeTypeId);
    }
    /**
     * Get roomAttributeTypeId value
     * @return int
     */
    public function getRoomAttributeTypeId(): int
    {
        return $this->roomAttributeTypeId;
    }
    /**
     * Set roomAttributeTypeId value
     * @param int $roomAttributeTypeId
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\CreateRoomAttributeTypeResponse
     */
    public function setRoomAttributeTypeId(int $roomAttributeTypeId): self
    {
        // validation for constraint: int
        if (!is_null($roomAttributeTypeId) && !(is_int($roomAttributeTypeId) || ctype_digit($roomAttributeTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roomAttributeTypeId, true), gettype($roomAttributeTypeId)), __LINE__);
        }
        $this->roomAttributeTypeId = $roomAttributeTypeId;
        
        return $this;
    }
}
