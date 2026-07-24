<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for roomSegmentsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoomSegmentsType extends AbstractStructBase
{
    /**
     * The roomSegmentId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $roomSegmentId = null;
    /**
     * Constructor method for roomSegmentsType
     * @uses RoomSegmentsType::setRoomSegmentId()
     * @param int[] $roomSegmentId
     */
    public function __construct(?array $roomSegmentId = null)
    {
        $this
            ->setRoomSegmentId($roomSegmentId);
    }
    /**
     * Get roomSegmentId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int[]
     */
    public function getRoomSegmentId(): ?array
    {
        return $this->roomSegmentId ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRoomSegmentId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoomSegmentId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoomSegmentIdForArrayConstraintFromSetRoomSegmentId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $roomSegmentsTypeRoomSegmentIdItem) {
            // validation for constraint: itemType
            if (!(is_int($roomSegmentsTypeRoomSegmentIdItem) || ctype_digit($roomSegmentsTypeRoomSegmentIdItem))) {
                $invalidValues[] = is_object($roomSegmentsTypeRoomSegmentIdItem) ? get_class($roomSegmentsTypeRoomSegmentIdItem) : sprintf('%s(%s)', gettype($roomSegmentsTypeRoomSegmentIdItem), var_export($roomSegmentsTypeRoomSegmentIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The roomSegmentId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set roomSegmentId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param int[] $roomSegmentId
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomSegmentsType
     */
    public function setRoomSegmentId(?array $roomSegmentId = null): self
    {
        // validation for constraint: array
        if ('' !== ($roomSegmentIdArrayErrorMessage = self::validateRoomSegmentIdForArrayConstraintFromSetRoomSegmentId($roomSegmentId))) {
            throw new InvalidArgumentException($roomSegmentIdArrayErrorMessage, __LINE__);
        }
        if (is_null($roomSegmentId) || (is_array($roomSegmentId) && empty($roomSegmentId))) {
            unset($this->roomSegmentId);
        } else {
            $this->roomSegmentId = $roomSegmentId;
        }
        
        return $this;
    }
    /**
     * Add item to roomSegmentId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomSegmentsType
     */
    public function addToRoomSegmentId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The roomSegmentId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->roomSegmentId[] = $item;
        
        return $this;
    }
}
