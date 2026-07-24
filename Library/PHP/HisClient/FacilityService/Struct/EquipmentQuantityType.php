<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for equipmentQuantityType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EquipmentQuantityType extends AbstractStructBase
{
    /**
     * The equipment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantity[]
     */
    protected ?array $equipment = null;
    /**
     * Constructor method for equipmentQuantityType
     * @uses EquipmentQuantityType::setEquipment()
     * @param \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantity[] $equipment
     */
    public function __construct(?array $equipment = null)
    {
        $this
            ->setEquipment($equipment);
    }
    /**
     * Get equipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantity[]
     */
    public function getEquipment(): ?array
    {
        return $this->equipment ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEquipment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEquipment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEquipmentForArrayConstraintFromSetEquipment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $equipmentQuantityTypeEquipmentItem) {
            // validation for constraint: itemType
            if (!$equipmentQuantityTypeEquipmentItem instanceof \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantity) {
                $invalidValues[] = is_object($equipmentQuantityTypeEquipmentItem) ? get_class($equipmentQuantityTypeEquipmentItem) : sprintf('%s(%s)', gettype($equipmentQuantityTypeEquipmentItem), var_export($equipmentQuantityTypeEquipmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The equipment property can only contain items of type \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantity, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set equipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantity[] $equipment
     * @return \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantityType
     */
    public function setEquipment(?array $equipment = null): self
    {
        // validation for constraint: array
        if ('' !== ($equipmentArrayErrorMessage = self::validateEquipmentForArrayConstraintFromSetEquipment($equipment))) {
            throw new InvalidArgumentException($equipmentArrayErrorMessage, __LINE__);
        }
        if (is_null($equipment) || (is_array($equipment) && empty($equipment))) {
            unset($this->equipment);
        } else {
            $this->equipment = $equipment;
        }
        
        return $this;
    }
    /**
     * Add item to equipment value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantity $item
     * @return \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantityType
     */
    public function addToEquipment(\FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantity $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantity) {
            throw new InvalidArgumentException(sprintf('The equipment property can only contain items of type \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantity, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->equipment[] = $item;
        
        return $this;
    }
}
