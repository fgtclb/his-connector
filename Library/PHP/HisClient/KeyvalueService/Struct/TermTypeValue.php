<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TermTypeValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TermTypeValue extends AbstractKeyValue
{
    /**
     * The termCategory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $termCategory = null;
    /**
     * The termNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $termNumber = null;
    /**
     * Constructor method for TermTypeValue
     * @uses TermTypeValue::setTermCategory()
     * @uses TermTypeValue::setTermNumber()
     * @param int $termCategory
     * @param int $termNumber
     */
    public function __construct(?int $termCategory = null, ?int $termNumber = null)
    {
        $this
            ->setTermCategory($termCategory)
            ->setTermNumber($termNumber);
    }
    /**
     * Get termCategory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTermCategory(): ?int
    {
        return $this->termCategory ?? null;
    }
    /**
     * Set termCategory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $termCategory
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\TermTypeValue
     */
    public function setTermCategory(?int $termCategory = null): self
    {
        // validation for constraint: int
        if (!is_null($termCategory) && !(is_int($termCategory) || ctype_digit($termCategory))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($termCategory, true), gettype($termCategory)), __LINE__);
        }
        if (is_null($termCategory) || (is_array($termCategory) && empty($termCategory))) {
            unset($this->termCategory);
        } else {
            $this->termCategory = $termCategory;
        }
        
        return $this;
    }
    /**
     * Get termNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTermNumber(): ?int
    {
        return $this->termNumber ?? null;
    }
    /**
     * Set termNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $termNumber
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\TermTypeValue
     */
    public function setTermNumber(?int $termNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($termNumber) && !(is_int($termNumber) || ctype_digit($termNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($termNumber, true), gettype($termNumber)), __LINE__);
        }
        if (is_null($termNumber) || (is_array($termNumber) && empty($termNumber))) {
            unset($this->termNumber);
        } else {
            $this->termNumber = $termNumber;
        }
        
        return $this;
    }
}
