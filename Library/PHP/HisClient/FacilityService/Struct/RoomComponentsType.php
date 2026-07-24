<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for roomComponentsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoomComponentsType extends AbstractStructBase
{
    /**
     * The roomComponentId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $roomComponentId = null;
    /**
     * Constructor method for roomComponentsType
     * @uses RoomComponentsType::setRoomComponentId()
     * @param int[] $roomComponentId
     */
    public function __construct(?array $roomComponentId = null)
    {
        $this
            ->setRoomComponentId($roomComponentId);
    }
    /**
     * Get roomComponentId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int[]
     */
    public function getRoomComponentId(): ?array
    {
        return $this->roomComponentId ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRoomComponentId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoomComponentId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoomComponentIdForArrayConstraintFromSetRoomComponentId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $roomComponentsTypeRoomComponentIdItem) {
            // validation for constraint: itemType
            if (!(is_int($roomComponentsTypeRoomComponentIdItem) || ctype_digit($roomComponentsTypeRoomComponentIdItem))) {
                $invalidValues[] = is_object($roomComponentsTypeRoomComponentIdItem) ? get_class($roomComponentsTypeRoomComponentIdItem) : sprintf('%s(%s)', gettype($roomComponentsTypeRoomComponentIdItem), var_export($roomComponentsTypeRoomComponentIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The roomComponentId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set roomComponentId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param int[] $roomComponentId
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomComponentsType
     */
    public function setRoomComponentId(?array $roomComponentId = null): self
    {
        // validation for constraint: array
        if ('' !== ($roomComponentIdArrayErrorMessage = self::validateRoomComponentIdForArrayConstraintFromSetRoomComponentId($roomComponentId))) {
            throw new InvalidArgumentException($roomComponentIdArrayErrorMessage, __LINE__);
        }
        if (is_null($roomComponentId) || (is_array($roomComponentId) && empty($roomComponentId))) {
            unset($this->roomComponentId);
        } else {
            $this->roomComponentId = $roomComponentId;
        }
        
        return $this;
    }
    /**
     * Add item to roomComponentId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomComponentsType
     */
    public function addToRoomComponentId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The roomComponentId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->roomComponentId[] = $item;
        
        return $this;
    }
}
