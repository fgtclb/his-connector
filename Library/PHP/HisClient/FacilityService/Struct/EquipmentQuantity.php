<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EquipmentQuantity Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EquipmentQuantity extends AbstractStructBase
{
    /**
     * The quantity
     * @var int
     */
    protected int $quantity;
    /**
     * The equipmentValueId
     * @var int
     */
    protected int $equipmentValueId;
    /**
     * Constructor method for EquipmentQuantity
     * @uses EquipmentQuantity::setQuantity()
     * @uses EquipmentQuantity::setEquipmentValueId()
     * @param int $quantity
     * @param int $equipmentValueId
     */
    public function __construct(int $quantity, int $equipmentValueId)
    {
        $this
            ->setQuantity($quantity)
            ->setEquipmentValueId($equipmentValueId);
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantity
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantity
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
