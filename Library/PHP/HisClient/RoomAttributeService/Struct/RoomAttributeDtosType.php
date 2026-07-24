<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\RoomAttributeService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for roomAttributeDtosType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoomAttributeDtosType extends AbstractStructBase
{
    /**
     * The roomAttributeDto
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto[]
     */
    protected ?array $roomAttributeDto = null;
    /**
     * Constructor method for roomAttributeDtosType
     * @uses RoomAttributeDtosType::setRoomAttributeDto()
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto[] $roomAttributeDto
     */
    public function __construct(?array $roomAttributeDto = null)
    {
        $this
            ->setRoomAttributeDto($roomAttributeDto);
    }
    /**
     * Get roomAttributeDto value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto[]
     */
    public function getRoomAttributeDto(): ?array
    {
        return $this->roomAttributeDto ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRoomAttributeDto method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoomAttributeDto method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoomAttributeDtoForArrayConstraintFromSetRoomAttributeDto(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $roomAttributeDtosTypeRoomAttributeDtoItem) {
            // validation for constraint: itemType
            if (!$roomAttributeDtosTypeRoomAttributeDtoItem instanceof \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto) {
                $invalidValues[] = is_object($roomAttributeDtosTypeRoomAttributeDtoItem) ? get_class($roomAttributeDtosTypeRoomAttributeDtoItem) : sprintf('%s(%s)', gettype($roomAttributeDtosTypeRoomAttributeDtoItem), var_export($roomAttributeDtosTypeRoomAttributeDtoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The roomAttributeDto property can only contain items of type \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set roomAttributeDto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto[] $roomAttributeDto
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDtosType
     */
    public function setRoomAttributeDto(?array $roomAttributeDto = null): self
    {
        // validation for constraint: array
        if ('' !== ($roomAttributeDtoArrayErrorMessage = self::validateRoomAttributeDtoForArrayConstraintFromSetRoomAttributeDto($roomAttributeDto))) {
            throw new InvalidArgumentException($roomAttributeDtoArrayErrorMessage, __LINE__);
        }
        if (is_null($roomAttributeDto) || (is_array($roomAttributeDto) && empty($roomAttributeDto))) {
            unset($this->roomAttributeDto);
        } else {
            $this->roomAttributeDto = $roomAttributeDto;
        }
        
        return $this;
    }
    /**
     * Add item to roomAttributeDto value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto $item
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDtosType
     */
    public function addToRoomAttributeDto(\FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto) {
            throw new InvalidArgumentException(sprintf('The roomAttributeDto property can only contain items of type \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->roomAttributeDto[] = $item;
        
        return $this;
    }
}
