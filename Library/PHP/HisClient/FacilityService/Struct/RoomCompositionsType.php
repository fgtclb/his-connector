<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for roomCompositionsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoomCompositionsType extends AbstractStructBase
{
    /**
     * The roomCompositionId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $roomCompositionId = null;
    /**
     * Constructor method for roomCompositionsType
     * @uses RoomCompositionsType::setRoomCompositionId()
     * @param int[] $roomCompositionId
     */
    public function __construct(?array $roomCompositionId = null)
    {
        $this
            ->setRoomCompositionId($roomCompositionId);
    }
    /**
     * Get roomCompositionId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int[]
     */
    public function getRoomCompositionId(): ?array
    {
        return $this->roomCompositionId ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRoomCompositionId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoomCompositionId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoomCompositionIdForArrayConstraintFromSetRoomCompositionId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $roomCompositionsTypeRoomCompositionIdItem) {
            // validation for constraint: itemType
            if (!(is_int($roomCompositionsTypeRoomCompositionIdItem) || ctype_digit($roomCompositionsTypeRoomCompositionIdItem))) {
                $invalidValues[] = is_object($roomCompositionsTypeRoomCompositionIdItem) ? get_class($roomCompositionsTypeRoomCompositionIdItem) : sprintf('%s(%s)', gettype($roomCompositionsTypeRoomCompositionIdItem), var_export($roomCompositionsTypeRoomCompositionIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The roomCompositionId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set roomCompositionId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param int[] $roomCompositionId
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomCompositionsType
     */
    public function setRoomCompositionId(?array $roomCompositionId = null): self
    {
        // validation for constraint: array
        if ('' !== ($roomCompositionIdArrayErrorMessage = self::validateRoomCompositionIdForArrayConstraintFromSetRoomCompositionId($roomCompositionId))) {
            throw new InvalidArgumentException($roomCompositionIdArrayErrorMessage, __LINE__);
        }
        if (is_null($roomCompositionId) || (is_array($roomCompositionId) && empty($roomCompositionId))) {
            unset($this->roomCompositionId);
        } else {
            $this->roomCompositionId = $roomCompositionId;
        }
        
        return $this;
    }
    /**
     * Add item to roomCompositionId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomCompositionsType
     */
    public function addToRoomCompositionId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The roomCompositionId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->roomCompositionId[] = $item;
        
        return $this;
    }
}
