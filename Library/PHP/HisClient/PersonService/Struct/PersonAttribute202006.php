<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonAttribute202006 Struct
 * Meta information extracted from the WSDL
 * - documentation: Person attributes are a generic way to associate additional information with a person. They have to be configured before use, see getAllPersonAttributeTypes for available types.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonAttribute202006 extends AbstractStructBase
{
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
     * The typeName
     * Meta information extracted from the WSDL
     * - documentation: The type of this attribute. See 'getAllPersonAttributeTypes' for details.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $typeName = null;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - documentation: The value of the attribute. See the corresponding attribute type for details on which values are allowed.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for PersonAttribute202006
     * @uses PersonAttribute202006::setId()
     * @uses PersonAttribute202006::setValidFrom()
     * @uses PersonAttribute202006::setValidTo()
     * @uses PersonAttribute202006::setTypeName()
     * @uses PersonAttribute202006::setValue()
     * @param int $id
     * @param string $validFrom
     * @param string $validTo
     * @param string $typeName
     * @param string $value
     */
    public function __construct(?int $id = null, ?string $validFrom = null, ?string $validTo = null, ?string $typeName = null, ?string $value = null)
    {
        $this
            ->setId($id)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setTypeName($typeName)
            ->setValue($value);
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttribute202006
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttribute202006
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttribute202006
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
     * Get typeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTypeName(): ?string
    {
        return $this->typeName ?? null;
    }
    /**
     * Set typeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $typeName
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttribute202006
     */
    public function setTypeName(?string $typeName = null): self
    {
        // validation for constraint: string
        if (!is_null($typeName) && !is_string($typeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeName, true), gettype($typeName)), __LINE__);
        }
        if (is_null($typeName) || (is_array($typeName) && empty($typeName))) {
            unset($this->typeName);
        } else {
            $this->typeName = $typeName;
        }
        
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttribute202006
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
}
