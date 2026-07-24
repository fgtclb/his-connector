<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\RoomAttributeService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomAttributeValueDto Struct
 * Meta information extracted from the WSDL
 * - documentation: If 'keyTableType' is true, the attribute value is own of this list.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoomAttributeValueDto extends AbstractStructBase
{
    /**
     * The attributeValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $attributeValue = null;
    /**
     * The sortorder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $sortorder = null;
    /**
     * The shorttext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $shorttext = null;
    /**
     * The defaulttext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $defaulttext = null;
    /**
     * The longtext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $longtext = null;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: ID of this attribute
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The typeId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $typeId = null;
    /**
     * The defaultlanguage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $defaultlanguage = null;
    /**
     * Constructor method for RoomAttributeValueDto
     * @uses RoomAttributeValueDto::setAttributeValue()
     * @uses RoomAttributeValueDto::setSortorder()
     * @uses RoomAttributeValueDto::setShorttext()
     * @uses RoomAttributeValueDto::setDefaulttext()
     * @uses RoomAttributeValueDto::setLongtext()
     * @uses RoomAttributeValueDto::setId()
     * @uses RoomAttributeValueDto::setTypeId()
     * @uses RoomAttributeValueDto::setDefaultlanguage()
     * @param string $attributeValue
     * @param int $sortorder
     * @param string $shorttext
     * @param string $defaulttext
     * @param string $longtext
     * @param int $id
     * @param int $typeId
     * @param int $defaultlanguage
     */
    public function __construct(?string $attributeValue = null, ?int $sortorder = null, ?string $shorttext = null, ?string $defaulttext = null, ?string $longtext = null, ?int $id = null, ?int $typeId = null, ?int $defaultlanguage = null)
    {
        $this
            ->setAttributeValue($attributeValue)
            ->setSortorder($sortorder)
            ->setShorttext($shorttext)
            ->setDefaulttext($defaulttext)
            ->setLongtext($longtext)
            ->setId($id)
            ->setTypeId($typeId)
            ->setDefaultlanguage($defaultlanguage);
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
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto
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
     * Get sortorder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getSortorder(): ?int
    {
        return $this->sortorder ?? null;
    }
    /**
     * Set sortorder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $sortorder
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto
     */
    public function setSortorder(?int $sortorder = null): self
    {
        // validation for constraint: int
        if (!is_null($sortorder) && !(is_int($sortorder) || ctype_digit($sortorder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortorder, true), gettype($sortorder)), __LINE__);
        }
        if (is_null($sortorder) || (is_array($sortorder) && empty($sortorder))) {
            unset($this->sortorder);
        } else {
            $this->sortorder = $sortorder;
        }
        
        return $this;
    }
    /**
     * Get shorttext value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShorttext(): ?string
    {
        return $this->shorttext ?? null;
    }
    /**
     * Set shorttext value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shorttext
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto
     */
    public function setShorttext(?string $shorttext = null): self
    {
        // validation for constraint: string
        if (!is_null($shorttext) && !is_string($shorttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shorttext, true), gettype($shorttext)), __LINE__);
        }
        if (is_null($shorttext) || (is_array($shorttext) && empty($shorttext))) {
            unset($this->shorttext);
        } else {
            $this->shorttext = $shorttext;
        }
        
        return $this;
    }
    /**
     * Get defaulttext value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDefaulttext(): ?string
    {
        return $this->defaulttext ?? null;
    }
    /**
     * Set defaulttext value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $defaulttext
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto
     */
    public function setDefaulttext(?string $defaulttext = null): self
    {
        // validation for constraint: string
        if (!is_null($defaulttext) && !is_string($defaulttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaulttext, true), gettype($defaulttext)), __LINE__);
        }
        if (is_null($defaulttext) || (is_array($defaulttext) && empty($defaulttext))) {
            unset($this->defaulttext);
        } else {
            $this->defaulttext = $defaulttext;
        }
        
        return $this;
    }
    /**
     * Get longtext value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLongtext(): ?string
    {
        return $this->longtext ?? null;
    }
    /**
     * Set longtext value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $longtext
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto
     */
    public function setLongtext(?string $longtext = null): self
    {
        // validation for constraint: string
        if (!is_null($longtext) && !is_string($longtext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longtext, true), gettype($longtext)), __LINE__);
        }
        if (is_null($longtext) || (is_array($longtext) && empty($longtext))) {
            unset($this->longtext);
        } else {
            $this->longtext = $longtext;
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
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto
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
     * Get typeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTypeId(): ?int
    {
        return $this->typeId ?? null;
    }
    /**
     * Set typeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $typeId
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto
     */
    public function setTypeId(?int $typeId = null): self
    {
        // validation for constraint: int
        if (!is_null($typeId) && !(is_int($typeId) || ctype_digit($typeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        if (is_null($typeId) || (is_array($typeId) && empty($typeId))) {
            unset($this->typeId);
        } else {
            $this->typeId = $typeId;
        }
        
        return $this;
    }
    /**
     * Get defaultlanguage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDefaultlanguage(): ?int
    {
        return $this->defaultlanguage ?? null;
    }
    /**
     * Set defaultlanguage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $defaultlanguage
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\RoomAttributeValueDto
     */
    public function setDefaultlanguage(?int $defaultlanguage = null): self
    {
        // validation for constraint: int
        if (!is_null($defaultlanguage) && !(is_int($defaultlanguage) || ctype_digit($defaultlanguage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($defaultlanguage, true), gettype($defaultlanguage)), __LINE__);
        }
        if (is_null($defaultlanguage) || (is_array($defaultlanguage) && empty($defaultlanguage))) {
            unset($this->defaultlanguage);
        } else {
            $this->defaultlanguage = $defaultlanguage;
        }
        
        return $this;
    }
}
