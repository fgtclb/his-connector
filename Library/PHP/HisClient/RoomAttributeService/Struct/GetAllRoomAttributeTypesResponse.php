<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\RoomAttributeService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAllRoomAttributeTypesResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllRoomAttributeTypesResponse extends AbstractStructBase
{
    /**
     * The roomAttributeTypes
     * @var \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypesType
     */
    protected \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypesType $roomAttributeTypes;
    /**
     * Constructor method for getAllRoomAttributeTypesResponse
     * @uses GetAllRoomAttributeTypesResponse::setRoomAttributeTypes()
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypesType $roomAttributeTypes
     */
    public function __construct(\FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypesType $roomAttributeTypes)
    {
        $this
            ->setRoomAttributeTypes($roomAttributeTypes);
    }
    /**
     * Get roomAttributeTypes value
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypesType
     */
    public function getRoomAttributeTypes(): \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypesType
    {
        return $this->roomAttributeTypes;
    }
    /**
     * Set roomAttributeTypes value
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypesType $roomAttributeTypes
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\GetAllRoomAttributeTypesResponse
     */
    public function setRoomAttributeTypes(\FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypesType $roomAttributeTypes): self
    {
        $this->roomAttributeTypes = $roomAttributeTypes;
        
        return $this;
    }
}
