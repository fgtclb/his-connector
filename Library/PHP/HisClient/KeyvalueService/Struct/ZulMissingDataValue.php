<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulMissingDataValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZulMissingDataValue extends AbstractKeyValue
{
    /**
     * The category
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $category = null;
    /**
     * The functionlockTermsAdded
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $functionlockTermsAdded = null;
    /**
     * Constructor method for ZulMissingDataValue
     * @uses ZulMissingDataValue::setCategory()
     * @uses ZulMissingDataValue::setFunctionlockTermsAdded()
     * @param int $category
     * @param int $functionlockTermsAdded
     */
    public function __construct(?int $category = null, ?int $functionlockTermsAdded = null)
    {
        $this
            ->setCategory($category)
            ->setFunctionlockTermsAdded($functionlockTermsAdded);
    }
    /**
     * Get category value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCategory(): ?int
    {
        return $this->category ?? null;
    }
    /**
     * Set category value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $category
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ZulMissingDataValue
     */
    public function setCategory(?int $category = null): self
    {
        // validation for constraint: int
        if (!is_null($category) && !(is_int($category) || ctype_digit($category))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        if (is_null($category) || (is_array($category) && empty($category))) {
            unset($this->category);
        } else {
            $this->category = $category;
        }
        
        return $this;
    }
    /**
     * Get functionlockTermsAdded value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getFunctionlockTermsAdded(): ?int
    {
        return $this->functionlockTermsAdded ?? null;
    }
    /**
     * Set functionlockTermsAdded value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $functionlockTermsAdded
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ZulMissingDataValue
     */
    public function setFunctionlockTermsAdded(?int $functionlockTermsAdded = null): self
    {
        // validation for constraint: int
        if (!is_null($functionlockTermsAdded) && !(is_int($functionlockTermsAdded) || ctype_digit($functionlockTermsAdded))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($functionlockTermsAdded, true), gettype($functionlockTermsAdded)), __LINE__);
        }
        if (is_null($functionlockTermsAdded) || (is_array($functionlockTermsAdded) && empty($functionlockTermsAdded))) {
            unset($this->functionlockTermsAdded);
        } else {
            $this->functionlockTermsAdded = $functionlockTermsAdded;
        }
        
        return $this;
    }
}
