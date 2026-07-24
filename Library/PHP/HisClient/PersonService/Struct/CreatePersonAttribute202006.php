<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createPersonAttribute202006 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreatePersonAttribute202006 extends AbstractStructBase
{
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * The typeName
     * Meta information extracted from the WSDL
     * - documentation: The type of this attribute. See 'getAllPersonAttributeTypes' for details.
     * @var string
     */
    protected string $typeName;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - documentation: The value of the attribute. See the corresponding attribute type for details on which values are allowed.
     * @var string
     */
    protected string $value;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - documentation: Marks the first day of the validity.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - documentation: Marks the last day of the validity.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for createPersonAttribute202006
     * @uses CreatePersonAttribute202006::setPersonId()
     * @uses CreatePersonAttribute202006::setTypeName()
     * @uses CreatePersonAttribute202006::setValue()
     * @uses CreatePersonAttribute202006::setValidFrom()
     * @uses CreatePersonAttribute202006::setValidTo()
     * @param int $personId
     * @param string $typeName
     * @param string $value
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(int $personId, string $typeName, string $value, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setPersonId($personId)
            ->setTypeName($typeName)
            ->setValue($value)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
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
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePersonAttribute202006
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
     * Get typeName value
     * @return string
     */
    public function getTypeName(): string
    {
        return $this->typeName;
    }
    /**
     * Set typeName value
     * @param string $typeName
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePersonAttribute202006
     */
    public function setTypeName(string $typeName): self
    {
        // validation for constraint: string
        if (!is_null($typeName) && !is_string($typeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeName, true), gettype($typeName)), __LINE__);
        }
        $this->typeName = $typeName;
        
        return $this;
    }
    /**
     * Get value value
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePersonAttribute202006
     */
    public function setValue(string $value): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
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
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePersonAttribute202006
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
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePersonAttribute202006
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
}
