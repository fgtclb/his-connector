<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\RoomAttributeService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for roomAttributeValueListType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoomAttributeValueListType extends AbstractStructBase
{
    /**
     * The roomAttributeValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto[]
     */
    protected ?array $roomAttributeValue = null;
    /**
     * Constructor method for roomAttributeValueListType
     * @uses RoomAttributeValueListType::setRoomAttributeValue()
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto[] $roomAttributeValue
     */
    public function __construct(?array $roomAttributeValue = null)
    {
        $this
            ->setRoomAttributeValue($roomAttributeValue);
    }
    /**
     * Get roomAttributeValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto[]
     */
    public function getRoomAttributeValue(): ?array
    {
        return $this->roomAttributeValue ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRoomAttributeValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoomAttributeValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoomAttributeValueForArrayConstraintFromSetRoomAttributeValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $roomAttributeValueListTypeRoomAttributeValueItem) {
            // validation for constraint: itemType
            if (!$roomAttributeValueListTypeRoomAttributeValueItem instanceof \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto) {
                $invalidValues[] = is_object($roomAttributeValueListTypeRoomAttributeValueItem) ? get_class($roomAttributeValueListTypeRoomAttributeValueItem) : sprintf('%s(%s)', gettype($roomAttributeValueListTypeRoomAttributeValueItem), var_export($roomAttributeValueListTypeRoomAttributeValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The roomAttributeValue property can only contain items of type \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set roomAttributeValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto[] $roomAttributeValue
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueListType
     */
    public function setRoomAttributeValue(?array $roomAttributeValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($roomAttributeValueArrayErrorMessage = self::validateRoomAttributeValueForArrayConstraintFromSetRoomAttributeValue($roomAttributeValue))) {
            throw new InvalidArgumentException($roomAttributeValueArrayErrorMessage, __LINE__);
        }
        if (is_null($roomAttributeValue) || (is_array($roomAttributeValue) && empty($roomAttributeValue))) {
            unset($this->roomAttributeValue);
        } else {
            $this->roomAttributeValue = $roomAttributeValue;
        }
        
        return $this;
    }
    /**
     * Add item to roomAttributeValue value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto $item
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueListType
     */
    public function addToRoomAttributeValue(\FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto) {
            throw new InvalidArgumentException(sprintf('The roomAttributeValue property can only contain items of type \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->roomAttributeValue[] = $item;
        
        return $this;
    }
}
