<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\RoomAttributeService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for roomAttributeTypesType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoomAttributeTypesType extends AbstractStructBase
{
    /**
     * The roomAttributeTypeDto
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto[]
     */
    protected ?array $roomAttributeTypeDto = null;
    /**
     * Constructor method for roomAttributeTypesType
     * @uses RoomAttributeTypesType::setRoomAttributeTypeDto()
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto[] $roomAttributeTypeDto
     */
    public function __construct(?array $roomAttributeTypeDto = null)
    {
        $this
            ->setRoomAttributeTypeDto($roomAttributeTypeDto);
    }
    /**
     * Get roomAttributeTypeDto value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto[]
     */
    public function getRoomAttributeTypeDto(): ?array
    {
        return $this->roomAttributeTypeDto ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRoomAttributeTypeDto method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoomAttributeTypeDto method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoomAttributeTypeDtoForArrayConstraintFromSetRoomAttributeTypeDto(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $roomAttributeTypesTypeRoomAttributeTypeDtoItem) {
            // validation for constraint: itemType
            if (!$roomAttributeTypesTypeRoomAttributeTypeDtoItem instanceof \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto) {
                $invalidValues[] = is_object($roomAttributeTypesTypeRoomAttributeTypeDtoItem) ? get_class($roomAttributeTypesTypeRoomAttributeTypeDtoItem) : sprintf('%s(%s)', gettype($roomAttributeTypesTypeRoomAttributeTypeDtoItem), var_export($roomAttributeTypesTypeRoomAttributeTypeDtoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The roomAttributeTypeDto property can only contain items of type \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set roomAttributeTypeDto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto[] $roomAttributeTypeDto
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypesType
     */
    public function setRoomAttributeTypeDto(?array $roomAttributeTypeDto = null): self
    {
        // validation for constraint: array
        if ('' !== ($roomAttributeTypeDtoArrayErrorMessage = self::validateRoomAttributeTypeDtoForArrayConstraintFromSetRoomAttributeTypeDto($roomAttributeTypeDto))) {
            throw new InvalidArgumentException($roomAttributeTypeDtoArrayErrorMessage, __LINE__);
        }
        if (is_null($roomAttributeTypeDto) || (is_array($roomAttributeTypeDto) && empty($roomAttributeTypeDto))) {
            unset($this->roomAttributeTypeDto);
        } else {
            $this->roomAttributeTypeDto = $roomAttributeTypeDto;
        }
        
        return $this;
    }
    /**
     * Add item to roomAttributeTypeDto value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto $item
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypesType
     */
    public function addToRoomAttributeTypeDto(\FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto) {
            throw new InvalidArgumentException(sprintf('The roomAttributeTypeDto property can only contain items of type \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->roomAttributeTypeDto[] = $item;
        
        return $this;
    }
}
