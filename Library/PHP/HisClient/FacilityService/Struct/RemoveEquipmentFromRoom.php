<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for removeEquipmentFromRoom Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RemoveEquipmentFromRoom extends AbstractStructBase
{
    /**
     * The roomId
     * @var int
     */
    protected int $roomId;
    /**
     * The equipmentValueId
     * Meta information extracted from the WSDL
     * - documentation: Id of the room equipment type
     * @var int
     */
    protected int $equipmentValueId;
    /**
     * Constructor method for removeEquipmentFromRoom
     * @uses RemoveEquipmentFromRoom::setRoomId()
     * @uses RemoveEquipmentFromRoom::setEquipmentValueId()
     * @param int $roomId
     * @param int $equipmentValueId
     */
    public function __construct(int $roomId, int $equipmentValueId)
    {
        $this
            ->setRoomId($roomId)
            ->setEquipmentValueId($equipmentValueId);
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\RemoveEquipmentFromRoom
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
     * Get equipmentValueId value
     * @return int
     */
    public function getEquipmentValueId(): int
    {
        return $this->equipmentValueId;
    }
    /**
     * Set equipmentValueId value
     * @param int $equipmentValueId
     * @return \FGTCLB\HisClient\FacilityService\Struct\RemoveEquipmentFromRoom
     */
    public function setEquipmentValueId(int $equipmentValueId): self
    {
        // validation for constraint: int
        if (!is_null($equipmentValueId) && !(is_int($equipmentValueId) || ctype_digit($equipmentValueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($equipmentValueId, true), gettype($equipmentValueId)), __LINE__);
        }
        $this->equipmentValueId = $equipmentValueId;
        
        return $this;
    }
}
