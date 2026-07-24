<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonAttributeTypeDto Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonAttributeTypeDto extends AbstractStructBase
{
    /**
     * The fieldName
     * Meta information extracted from the WSDL
     * - documentation: Name of the attribute.
     * @var string
     */
    protected string $fieldName;
    /**
     * The keyTableType
     * Meta information extracted from the WSDL
     * - documentation: If true, the values of this attribute are restricted and will reference the provided value list. See 'personAttributeValueList'.
     * @var bool
     */
    protected bool $keyTableType;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: ID of the attribute type. Use this for the type reference in person attributes.
     * - nillable: true
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The dataType
     * Meta information extracted from the WSDL
     * - documentation: Data type of the attribute (i.e. Integer, String). Currently ignored in processing!
     * - nillable: true
     * @var string|null
     */
    protected ?string $dataType = null;
    /**
     * The fieldLength
     * Meta information extracted from the WSDL
     * - documentation: Maximum length of the value provided.
     * - nillable: true
     * @var int|null
     */
    protected ?int $fieldLength = null;
    /**
     * The personAttributeTypeContextList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextListType|null
     */
    protected ?\FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextListType $personAttributeTypeContextList = null;
    /**
     * The personAttributeValueList
     * Meta information extracted from the WSDL
     * - documentation: If 'keyTableType' is true, the attribute value is own of this list.
     * - nillable: true
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListType|null
     */
    protected ?\FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListType $personAttributeValueList = null;
    /**
     * The purposes
     * Meta information extracted from the WSDL
     * - documentation: Designated use like application, career service,transcript of records or management of students.
     * - nillable: true
     * @var \FGTCLB\HisClient\PersonService\Struct\PurposesType|null
     */
    protected ?\FGTCLB\HisClient\PersonService\Struct\PurposesType $purposes = null;
    /**
     * Constructor method for PersonAttributeTypeDto
     * @uses PersonAttributeTypeDto::setFieldName()
     * @uses PersonAttributeTypeDto::setKeyTableType()
     * @uses PersonAttributeTypeDto::setId()
     * @uses PersonAttributeTypeDto::setDataType()
     * @uses PersonAttributeTypeDto::setFieldLength()
     * @uses PersonAttributeTypeDto::setPersonAttributeTypeContextList()
     * @uses PersonAttributeTypeDto::setPersonAttributeValueList()
     * @uses PersonAttributeTypeDto::setPurposes()
     * @param string $fieldName
     * @param bool $keyTableType
     * @param int $id
     * @param string $dataType
     * @param int $fieldLength
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextListType $personAttributeTypeContextList
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListType $personAttributeValueList
     * @param \FGTCLB\HisClient\PersonService\Struct\PurposesType $purposes
     */
    public function __construct(string $fieldName, bool $keyTableType, ?int $id = null, ?string $dataType = null, ?int $fieldLength = null, ?\FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextListType $personAttributeTypeContextList = null, ?\FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListType $personAttributeValueList = null, ?\FGTCLB\HisClient\PersonService\Struct\PurposesType $purposes = null)
    {
        $this
            ->setFieldName($fieldName)
            ->setKeyTableType($keyTableType)
            ->setId($id)
            ->setDataType($dataType)
            ->setFieldLength($fieldLength)
            ->setPersonAttributeTypeContextList($personAttributeTypeContextList)
            ->setPersonAttributeValueList($personAttributeValueList)
            ->setPurposes($purposes);
    }
    /**
     * Get fieldName value
     * @return string
     */
    public function getFieldName(): string
    {
        return $this->fieldName;
    }
    /**
     * Set fieldName value
     * @param string $fieldName
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto
     */
    public function setFieldName(string $fieldName): self
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldName, true), gettype($fieldName)), __LINE__);
        }
        $this->fieldName = $fieldName;
        
        return $this;
    }
    /**
     * Get keyTableType value
     * @return bool
     */
    public function getKeyTableType(): bool
    {
        return $this->keyTableType;
    }
    /**
     * Set keyTableType value
     * @param bool $keyTableType
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto
     */
    public function setKeyTableType(bool $keyTableType): self
    {
        // validation for constraint: boolean
        if (!is_null($keyTableType) && !is_bool($keyTableType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyTableType, true), gettype($keyTableType)), __LINE__);
        }
        $this->keyTableType = $keyTableType;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get dataType value
     * @return string|null
     */
    public function getDataType(): ?string
    {
        return $this->dataType;
    }
    /**
     * Set dataType value
     * @param string $dataType
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto
     */
    public function setDataType(?string $dataType = null): self
    {
        // validation for constraint: string
        if (!is_null($dataType) && !is_string($dataType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataType, true), gettype($dataType)), __LINE__);
        }
        $this->dataType = $dataType;
        
        return $this;
    }
    /**
     * Get fieldLength value
     * @return int|null
     */
    public function getFieldLength(): ?int
    {
        return $this->fieldLength;
    }
    /**
     * Set fieldLength value
     * @param int $fieldLength
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto
     */
    public function setFieldLength(?int $fieldLength = null): self
    {
        // validation for constraint: int
        if (!is_null($fieldLength) && !(is_int($fieldLength) || ctype_digit($fieldLength))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fieldLength, true), gettype($fieldLength)), __LINE__);
        }
        $this->fieldLength = $fieldLength;
        
        return $this;
    }
    /**
     * Get personAttributeTypeContextList value
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextListType|null
     */
    public function getPersonAttributeTypeContextList(): ?\FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextListType
    {
        return $this->personAttributeTypeContextList;
    }
    /**
     * Set personAttributeTypeContextList value
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextListType $personAttributeTypeContextList
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto
     */
    public function setPersonAttributeTypeContextList(?\FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextListType $personAttributeTypeContextList = null): self
    {
        $this->personAttributeTypeContextList = $personAttributeTypeContextList;
        
        return $this;
    }
    /**
     * Get personAttributeValueList value
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListType|null
     */
    public function getPersonAttributeValueList(): ?\FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListType
    {
        return $this->personAttributeValueList;
    }
    /**
     * Set personAttributeValueList value
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListType $personAttributeValueList
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto
     */
    public function setPersonAttributeValueList(?\FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListType $personAttributeValueList = null): self
    {
        $this->personAttributeValueList = $personAttributeValueList;
        
        return $this;
    }
    /**
     * Get purposes value
     * @return \FGTCLB\HisClient\PersonService\Struct\PurposesType|null
     */
    public function getPurposes(): ?\FGTCLB\HisClient\PersonService\Struct\PurposesType
    {
        return $this->purposes;
    }
    /**
     * Set purposes value
     * @param \FGTCLB\HisClient\PersonService\Struct\PurposesType $purposes
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto
     */
    public function setPurposes(?\FGTCLB\HisClient\PersonService\Struct\PurposesType $purposes = null): self
    {
        $this->purposes = $purposes;
        
        return $this;
    }
}
