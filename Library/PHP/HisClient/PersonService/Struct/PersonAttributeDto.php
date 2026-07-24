<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonAttributeDto Struct
 * Meta information extracted from the WSDL
 * - documentation: Person attributes are a generic way to associate additional information with a person. They have to be configured before use, see getAllPersonAttributeTypes for available types.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonAttributeDto extends AbstractStructBase
{
    /**
     * The attributeValue
     * Meta information extracted from the WSDL
     * - documentation: The value of the attribute. See the corresponding attribute type for details on which values are allowed.
     * @var string
     */
    protected string $attributeValue;
    /**
     * The personId
     * Meta information extracted from the WSDL
     * - documentation: The person owning the attribute.
     * @var int
     */
    protected int $personId;
    /**
     * The personAttributeTypeId
     * Meta information extracted from the WSDL
     * - documentation: The type of this attribute. See 'getAllPersonAttributeTypes' for details.
     * @var int
     */
    protected int $personAttributeTypeId;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: ID of this attribute. Set nil when creating a new attribute.
     * - nillable: true
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - documentation: Inclusive: Marks the first day of the validity.
     * - nillable: true
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - documentation: Inclusive: Marks the last day of the validity.
     * - nillable: true
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for PersonAttributeDto
     * @uses PersonAttributeDto::setAttributeValue()
     * @uses PersonAttributeDto::setPersonId()
     * @uses PersonAttributeDto::setPersonAttributeTypeId()
     * @uses PersonAttributeDto::setId()
     * @uses PersonAttributeDto::setValidFrom()
     * @uses PersonAttributeDto::setValidTo()
     * @param string $attributeValue
     * @param int $personId
     * @param int $personAttributeTypeId
     * @param int $id
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(string $attributeValue, int $personId, int $personAttributeTypeId, ?int $id = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setAttributeValue($attributeValue)
            ->setPersonId($personId)
            ->setPersonAttributeTypeId($personAttributeTypeId)
            ->setId($id)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto
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
     * Get personId value
     * @return int
     */
    public function getPersonId(): int
    {
        return $this->personId;
    }
    /**
     * Set personId value
     * @param int $personId
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto
     */
    public function setPersonId(int $personId): self
    {
        // validation for constraint: int
        if (!is_null($personId) && !(is_int($personId) || ctype_digit($personId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personId, true), gettype($personId)), __LINE__);
        }
        $this->personId = $personId;
        
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto
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
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
}
