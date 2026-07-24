<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\RoomAttributeService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomAttributeDto Struct
 * Meta information extracted from the WSDL
 * - documentation: Room attributes are a generic way to associate additional information with a room They have to be configured before use, see getAllRoomAttributeTypes for available types.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoomAttributeDto extends AbstractStructBase
{
    /**
     * The attributeValue
     * Meta information extracted from the WSDL
     * - documentation: The value of the attribute. See the corresponding attribute type for details on which values are allowed.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $attributeValue = null;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - documentation: Inclusive: Marks the first day of the validity.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - documentation: Inclusive: Marks the last day of the validity.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: ID of this attribute.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The roomAttributeTypeId
     * Meta information extracted from the WSDL
     * - documentation: The type of this attribute. See 'getAllRoomAttributeTypes' for details.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $roomAttributeTypeId = null;
    /**
     * The roomId
     * Meta information extracted from the WSDL
     * - documentation: The room owning the attribute.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $roomId = null;
    /**
     * Constructor method for RoomAttributeDto
     * @uses RoomAttributeDto::setAttributeValue()
     * @uses RoomAttributeDto::setValidFrom()
     * @uses RoomAttributeDto::setValidTo()
     * @uses RoomAttributeDto::setId()
     * @uses RoomAttributeDto::setRoomAttributeTypeId()
     * @uses RoomAttributeDto::setRoomId()
     * @param string $attributeValue
     * @param string $validFrom
     * @param string $validTo
     * @param int $id
     * @param int $roomAttributeTypeId
     * @param int $roomId
     */
    public function __construct(?string $attributeValue = null, ?string $validFrom = null, ?string $validTo = null, ?int $id = null, ?int $roomAttributeTypeId = null, ?int $roomId = null)
    {
        $this
            ->setAttributeValue($attributeValue)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setId($id)
            ->setRoomAttributeTypeId($roomAttributeTypeId)
            ->setRoomId($roomId);
    }
    /**
     * Get attributeValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAttributeValue(): ?string
    {
        return $this->attributeValue ?? null;
    }
    /**
     * Set attributeValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $attributeValue
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto
     */
    public function setAttributeValue(?string $attributeValue = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeValue) && !is_string($attributeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeValue, true), gettype($attributeValue)), __LINE__);
        }
        if (is_null($attributeValue) || (is_array($attributeValue) && empty($attributeValue))) {
            unset($this->attributeValue);
        } else {
            $this->attributeValue = $attributeValue;
        }
        
        return $this;
    }
    /**
     * Get validFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom ?? null;
    }
    /**
     * Set validFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validFrom
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        if (is_null($validFrom) || (is_array($validFrom) && empty($validFrom))) {
            unset($this->validFrom);
        } else {
            $this->validFrom = $validFrom;
        }
        
        return $this;
    }
    /**
     * Get validTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo ?? null;
    }
    /**
     * Set validTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validTo
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        if (is_null($validTo) || (is_array($validTo) && empty($validTo))) {
            unset($this->validTo);
        } else {
            $this->validTo = $validTo;
        }
        
        return $this;
    }
    /**
     * Get id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id ?? null;
    }
    /**
     * Set id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $id
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
        }
        
        return $this;
    }
    /**
     * Get roomAttributeTypeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getRoomAttributeTypeId(): ?int
    {
        return $this->roomAttributeTypeId ?? null;
    }
    /**
     * Set roomAttributeTypeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $roomAttributeTypeId
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto
     */
    public function setRoomAttributeTypeId(?int $roomAttributeTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($roomAttributeTypeId) && !(is_int($roomAttributeTypeId) || ctype_digit($roomAttributeTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roomAttributeTypeId, true), gettype($roomAttributeTypeId)), __LINE__);
        }
        if (is_null($roomAttributeTypeId) || (is_array($roomAttributeTypeId) && empty($roomAttributeTypeId))) {
            unset($this->roomAttributeTypeId);
        } else {
            $this->roomAttributeTypeId = $roomAttributeTypeId;
        }
        
        return $this;
    }
    /**
     * Get roomId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getRoomId(): ?int
    {
        return $this->roomId ?? null;
    }
    /**
     * Set roomId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $roomId
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeDto
     */
    public function setRoomId(?int $roomId = null): self
    {
        // validation for constraint: int
        if (!is_null($roomId) && !(is_int($roomId) || ctype_digit($roomId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roomId, true), gettype($roomId)), __LINE__);
        }
        if (is_null($roomId) || (is_array($roomId) && empty($roomId))) {
            unset($this->roomId);
        } else {
            $this->roomId = $roomId;
        }
        
        return $this;
    }
}
