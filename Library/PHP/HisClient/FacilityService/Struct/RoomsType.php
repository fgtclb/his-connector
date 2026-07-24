<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for roomsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoomsType extends AbstractStructBase
{
    /**
     * The roomAndTypeId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\FacilityService\Struct\SearchResult[]
     */
    protected ?array $roomAndTypeId = null;
    /**
     * Constructor method for roomsType
     * @uses RoomsType::setRoomAndTypeId()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SearchResult[] $roomAndTypeId
     */
    public function __construct(?array $roomAndTypeId = null)
    {
        $this
            ->setRoomAndTypeId($roomAndTypeId);
    }
    /**
     * Get roomAndTypeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\FacilityService\Struct\SearchResult[]
     */
    public function getRoomAndTypeId(): ?array
    {
        return $this->roomAndTypeId ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRoomAndTypeId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoomAndTypeId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoomAndTypeIdForArrayConstraintFromSetRoomAndTypeId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $roomsTypeRoomAndTypeIdItem) {
            // validation for constraint: itemType
            if (!$roomsTypeRoomAndTypeIdItem instanceof \FGTCLB\HisClient\FacilityService\Struct\SearchResult) {
                $invalidValues[] = is_object($roomsTypeRoomAndTypeIdItem) ? get_class($roomsTypeRoomAndTypeIdItem) : sprintf('%s(%s)', gettype($roomsTypeRoomAndTypeIdItem), var_export($roomsTypeRoomAndTypeIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The roomAndTypeId property can only contain items of type \FGTCLB\HisClient\FacilityService\Struct\SearchResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set roomAndTypeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\FacilityService\Struct\SearchResult[] $roomAndTypeId
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomsType
     */
    public function setRoomAndTypeId(?array $roomAndTypeId = null): self
    {
        // validation for constraint: array
        if ('' !== ($roomAndTypeIdArrayErrorMessage = self::validateRoomAndTypeIdForArrayConstraintFromSetRoomAndTypeId($roomAndTypeId))) {
            throw new InvalidArgumentException($roomAndTypeIdArrayErrorMessage, __LINE__);
        }
        if (is_null($roomAndTypeId) || (is_array($roomAndTypeId) && empty($roomAndTypeId))) {
            unset($this->roomAndTypeId);
        } else {
            $this->roomAndTypeId = $roomAndTypeId;
        }
        
        return $this;
    }
    /**
     * Add item to roomAndTypeId value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\FacilityService\Struct\SearchResult $item
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomsType
     */
    public function addToRoomAndTypeId(\FGTCLB\HisClient\FacilityService\Struct\SearchResult $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\FacilityService\Struct\SearchResult) {
            throw new InvalidArgumentException(sprintf('The roomAndTypeId property can only contain items of type \FGTCLB\HisClient\FacilityService\Struct\SearchResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->roomAndTypeId[] = $item;
        
        return $this;
    }
}
