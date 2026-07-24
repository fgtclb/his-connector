<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\RoomAttributeService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAllRoomAttributesFromRoomResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAllRoomAttributesFromRoomResponse extends AbstractStructBase
{
    /**
     * The roomAttributeDtos
     * @var \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDtosType
     */
    protected \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDtosType $roomAttributeDtos;
    /**
     * Constructor method for readAllRoomAttributesFromRoomResponse
     * @uses ReadAllRoomAttributesFromRoomResponse::setRoomAttributeDtos()
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDtosType $roomAttributeDtos
     */
    public function __construct(\FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDtosType $roomAttributeDtos)
    {
        $this
            ->setRoomAttributeDtos($roomAttributeDtos);
    }
    /**
     * Get roomAttributeDtos value
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDtosType
     */
    public function getRoomAttributeDtos(): \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDtosType
    {
        return $this->roomAttributeDtos;
    }
    /**
     * Set roomAttributeDtos value
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDtosType $roomAttributeDtos
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\ReadAllRoomAttributesFromRoomResponse
     */
    public function setRoomAttributeDtos(\FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDtosType $roomAttributeDtos): self
    {
        $this->roomAttributeDtos = $roomAttributeDtos;
        
        return $this;
    }
}
