<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updatePersonAttribute202006 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdatePersonAttribute202006 extends AbstractStructBase
{
    /**
     * The personAttributeId
     * @var int
     */
    protected int $personAttributeId;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - documentation: The value of the attribute. See the corresponding attribute type for details on which values are allowed.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - documentation: Marks the first day of the validity.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - documentation: Marks the last day of the validity.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for updatePersonAttribute202006
     * @uses UpdatePersonAttribute202006::setPersonAttributeId()
     * @uses UpdatePersonAttribute202006::setValue()
     * @uses UpdatePersonAttribute202006::setValidFrom()
     * @uses UpdatePersonAttribute202006::setValidTo()
     * @param int $personAttributeId
     * @param string $value
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(int $personAttributeId, ?string $value = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setPersonAttributeId($personAttributeId)
            ->setValue($value)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get personAttributeId value
     * @return int
     */
    public function getPersonAttributeId(): int
    {
        return $this->personAttributeId;
    }
    /**
     * Set personAttributeId value
     * @param int $personAttributeId
     * @return \FGTCLB\HisClient\PersonService\Struct\UpdatePersonAttribute202006
     */
    public function setPersonAttributeId(int $personAttributeId): self
    {
        // validation for constraint: int
        if (!is_null($personAttributeId) && !(is_int($personAttributeId) || ctype_digit($personAttributeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personAttributeId, true), gettype($personAttributeId)), __LINE__);
        }
        $this->personAttributeId = $personAttributeId;
        
        return $this;
    }
    /**
     * Get value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value ?? null;
    }
    /**
     * Set value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $value
     * @return \FGTCLB\HisClient\PersonService\Struct\UpdatePersonAttribute202006
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->value);
        } else {
            $this->value = $value;
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
     * @return \FGTCLB\HisClient\PersonService\Struct\UpdatePersonAttribute202006
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
     * @return \FGTCLB\HisClient\PersonService\Struct\UpdatePersonAttribute202006
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
