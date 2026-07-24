<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonAttributeValueListDto Struct
 * Meta information extracted from the WSDL
 * - documentation: If 'keyTableType' is true, the attribute value is own of this list.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonAttributeValueListDto extends AbstractStructBase
{
    /**
     * The attributeValue
     * Meta information extracted from the WSDL
     * - documentation: Specification like car, public transport, 50, 100...
     * @var string
     */
    protected string $attributeValue;
    /**
     * The defaultlanguage
     * @var int
     */
    protected int $defaultlanguage;
    /**
     * The defaulttext
     * @var string
     */
    protected string $defaulttext;
    /**
     * The personAttributeTypeId
     * @var int
     */
    protected int $personAttributeTypeId;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The longtext
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $longtext = null;
    /**
     * The shorttext
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $shorttext = null;
    /**
     * The sortorder
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $sortorder = null;
    /**
     * Constructor method for PersonAttributeValueListDto
     * @uses PersonAttributeValueListDto::setAttributeValue()
     * @uses PersonAttributeValueListDto::setDefaultlanguage()
     * @uses PersonAttributeValueListDto::setDefaulttext()
     * @uses PersonAttributeValueListDto::setPersonAttributeTypeId()
     * @uses PersonAttributeValueListDto::setId()
     * @uses PersonAttributeValueListDto::setLongtext()
     * @uses PersonAttributeValueListDto::setShorttext()
     * @uses PersonAttributeValueListDto::setSortorder()
     * @param string $attributeValue
     * @param int $defaultlanguage
     * @param string $defaulttext
     * @param int $personAttributeTypeId
     * @param int $id
     * @param string $longtext
     * @param string $shorttext
     * @param int $sortorder
     */
    public function __construct(string $attributeValue, int $defaultlanguage, string $defaulttext, int $personAttributeTypeId, ?int $id = null, ?string $longtext = null, ?string $shorttext = null, ?int $sortorder = null)
    {
        $this
            ->setAttributeValue($attributeValue)
            ->setDefaultlanguage($defaultlanguage)
            ->setDefaulttext($defaulttext)
            ->setPersonAttributeTypeId($personAttributeTypeId)
            ->setId($id)
            ->setLongtext($longtext)
            ->setShorttext($shorttext)
            ->setSortorder($sortorder);
    }
    /**
     * Get attributeValue value
     * @return string
     */
    public function getAttributeValue(): string
    {
        return $this->attributeValue;
    }
    /**
     * Set attributeValue value
     * @param string $attributeValue
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto
     */
    public function setAttributeValue(string $attributeValue): self
    {
        // validation for constraint: string
        if (!is_null($attributeValue) && !is_string($attributeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeValue, true), gettype($attributeValue)), __LINE__);
        }
        $this->attributeValue = $attributeValue;
        
        return $this;
    }
    /**
     * Get defaultlanguage value
     * @return int
     */
    public function getDefaultlanguage(): int
    {
        return $this->defaultlanguage;
    }
    /**
     * Set defaultlanguage value
     * @param int $defaultlanguage
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto
     */
    public function setDefaultlanguage(int $defaultlanguage): self
    {
        // validation for constraint: int
        if (!is_null($defaultlanguage) && !(is_int($defaultlanguage) || ctype_digit($defaultlanguage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($defaultlanguage, true), gettype($defaultlanguage)), __LINE__);
        }
        $this->defaultlanguage = $defaultlanguage;
        
        return $this;
    }
    /**
     * Get defaulttext value
     * @return string
     */
    public function getDefaulttext(): string
    {
        return $this->defaulttext;
    }
    /**
     * Set defaulttext value
     * @param string $defaulttext
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto
     */
    public function setDefaulttext(string $defaulttext): self
    {
        // validation for constraint: string
        if (!is_null($defaulttext) && !is_string($defaulttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaulttext, true), gettype($defaulttext)), __LINE__);
        }
        $this->defaulttext = $defaulttext;
        
        return $this;
    }
    /**
     * Get personAttributeTypeId value
     * @return int
     */
    public function getPersonAttributeTypeId(): int
    {
        return $this->personAttributeTypeId;
    }
    /**
     * Set personAttributeTypeId value
     * @param int $personAttributeTypeId
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto
     */
    public function setPersonAttributeTypeId(int $personAttributeTypeId): self
    {
        // validation for constraint: int
        if (!is_null($personAttributeTypeId) && !(is_int($personAttributeTypeId) || ctype_digit($personAttributeTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personAttributeTypeId, true), gettype($personAttributeTypeId)), __LINE__);
        }
        $this->personAttributeTypeId = $personAttributeTypeId;
        
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto
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
     * Get longtext value
     * @return string|null
     */
    public function getLongtext(): ?string
    {
        return $this->longtext;
    }
    /**
     * Set longtext value
     * @param string $longtext
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto
     */
    public function setLongtext(?string $longtext = null): self
    {
        // validation for constraint: string
        if (!is_null($longtext) && !is_string($longtext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longtext, true), gettype($longtext)), __LINE__);
        }
        $this->longtext = $longtext;
        
        return $this;
    }
    /**
     * Get shorttext value
     * @return string|null
     */
    public function getShorttext(): ?string
    {
        return $this->shorttext;
    }
    /**
     * Set shorttext value
     * @param string $shorttext
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto
     */
    public function setShorttext(?string $shorttext = null): self
    {
        // validation for constraint: string
        if (!is_null($shorttext) && !is_string($shorttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shorttext, true), gettype($shorttext)), __LINE__);
        }
        $this->shorttext = $shorttext;
        
        return $this;
    }
    /**
     * Get sortorder value
     * @return int|null
     */
    public function getSortorder(): ?int
    {
        return $this->sortorder;
    }
    /**
     * Set sortorder value
     * @param int $sortorder
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto
     */
    public function setSortorder(?int $sortorder = null): self
    {
        // validation for constraint: int
        if (!is_null($sortorder) && !(is_int($sortorder) || ctype_digit($sortorder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortorder, true), gettype($sortorder)), __LINE__);
        }
        $this->sortorder = $sortorder;
        
        return $this;
    }
}
