<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setEquipmentToRoom Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetEquipmentToRoom extends AbstractStructBase
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
     * The quantity
     * Meta information extracted from the WSDL
     * - documentation: quantity of the equipment
     * @var int
     */
    protected int $quantity;
    /**
     * Constructor method for setEquipmentToRoom
     * @uses SetEquipmentToRoom::setRoomId()
     * @uses SetEquipmentToRoom::setEquipmentValueId()
     * @uses SetEquipmentToRoom::setQuantity()
     * @param int $roomId
     * @param int $equipmentValueId
     * @param int $quantity
     */
    public function __construct(int $roomId, int $equipmentValueId, int $quantity)
    {
        $this
            ->setRoomId($roomId)
            ->setEquipmentValueId($equipmentValueId)
            ->setQuantity($quantity);
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\SetEquipmentToRoom
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\SetEquipmentToRoom
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
    /**
     * Get quantity value
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \FGTCLB\HisClient\FacilityService\Struct\SetEquipmentToRoom
     */
    public function setQuantity(int $quantity): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        
        return $this;
    }
}
