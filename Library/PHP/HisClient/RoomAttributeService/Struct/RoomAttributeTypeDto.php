<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\RoomAttributeService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomAttributeTypeDto Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoomAttributeTypeDto extends AbstractStructBase
{
    /**
     * The roomAttributeValueList
     * @var \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueListType
     */
    protected \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueListType $roomAttributeValueList;
    /**
     * The fieldLength
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $fieldLength = null;
    /**
     * The keyTableType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $keyTableType = null;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: ID of this attribute.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The isUnique
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isUnique = null;
    /**
     * Constructor method for RoomAttributeTypeDto
     * @uses RoomAttributeTypeDto::setRoomAttributeValueList()
     * @uses RoomAttributeTypeDto::setFieldLength()
     * @uses RoomAttributeTypeDto::setKeyTableType()
     * @uses RoomAttributeTypeDto::setId()
     * @uses RoomAttributeTypeDto::setName()
     * @uses RoomAttributeTypeDto::setIsUnique()
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueListType $roomAttributeValueList
     * @param int $fieldLength
     * @param bool $keyTableType
     * @param int $id
     * @param string $name
     * @param bool $isUnique
     */
    public function __construct(\FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueListType $roomAttributeValueList, ?int $fieldLength = null, ?bool $keyTableType = null, ?int $id = null, ?string $name = null, ?bool $isUnique = null)
    {
        $this
            ->setRoomAttributeValueList($roomAttributeValueList)
            ->setFieldLength($fieldLength)
            ->setKeyTableType($keyTableType)
            ->setId($id)
            ->setName($name)
            ->setIsUnique($isUnique);
    }
    /**
     * Get roomAttributeValueList value
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueListType
     */
    public function getRoomAttributeValueList(): \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueListType
    {
        return $this->roomAttributeValueList;
    }
    /**
     * Set roomAttributeValueList value
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueListType $roomAttributeValueList
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto
     */
    public function setRoomAttributeValueList(\FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueListType $roomAttributeValueList): self
    {
        $this->roomAttributeValueList = $roomAttributeValueList;
        
        return $this;
    }
    /**
     * Get fieldLength value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getFieldLength(): ?int
    {
        return $this->fieldLength ?? null;
    }
    /**
     * Set fieldLength value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $fieldLength
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto
     */
    public function setFieldLength(?int $fieldLength = null): self
    {
        // validation for constraint: int
        if (!is_null($fieldLength) && !(is_int($fieldLength) || ctype_digit($fieldLength))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fieldLength, true), gettype($fieldLength)), __LINE__);
        }
        if (is_null($fieldLength) || (is_array($fieldLength) && empty($fieldLength))) {
            unset($this->fieldLength);
        } else {
            $this->fieldLength = $fieldLength;
        }
        
        return $this;
    }
    /**
     * Get keyTableType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getKeyTableType(): ?bool
    {
        return $this->keyTableType ?? null;
    }
    /**
     * Set keyTableType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $keyTableType
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto
     */
    public function setKeyTableType(?bool $keyTableType = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyTableType) && !is_bool($keyTableType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyTableType, true), gettype($keyTableType)), __LINE__);
        }
        if (is_null($keyTableType) || (is_array($keyTableType) && empty($keyTableType))) {
            unset($this->keyTableType);
        } else {
            $this->keyTableType = $keyTableType;
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
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto
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
     * Get name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name ?? null;
    }
    /**
     * Set name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->name);
        } else {
            $this->name = $name;
        }
        
        return $this;
    }
    /**
     * Get isUnique value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsUnique(): ?bool
    {
        return $this->isUnique ?? null;
    }
    /**
     * Set isUnique value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isUnique
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeTypeDto
     */
    public function setIsUnique(?bool $isUnique = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUnique) && !is_bool($isUnique)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUnique, true), gettype($isUnique)), __LINE__);
        }
        if (is_null($isUnique) || (is_array($isUnique) && empty($isUnique))) {
            unset($this->isUnique);
        } else {
            $this->isUnique = $isUnique;
        }
        
        return $this;
    }
}
