<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RhythmValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RhythmValue extends AbstractKeyValue
{
    /**
     * The quantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $quantity = null;
    /**
     * The hisrule
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $hisrule = null;
    /**
     * Constructor method for RhythmValue
     * @uses RhythmValue::setQuantity()
     * @uses RhythmValue::setHisrule()
     * @param int $quantity
     * @param int $hisrule
     */
    public function __construct(?int $quantity = null, ?int $hisrule = null)
    {
        $this
            ->setQuantity($quantity)
            ->setHisrule($hisrule);
    }
    /**
     * Get quantity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity ?? null;
    }
    /**
     * Set quantity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $quantity
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\RhythmValue
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        if (is_null($quantity) || (is_array($quantity) && empty($quantity))) {
            unset($this->quantity);
        } else {
            $this->quantity = $quantity;
        }
        
        return $this;
    }
    /**
     * Get hisrule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getHisrule(): ?int
    {
        return $this->hisrule ?? null;
    }
    /**
     * Set hisrule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $hisrule
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\RhythmValue
     */
    public function setHisrule(?int $hisrule = null): self
    {
        // validation for constraint: int
        if (!is_null($hisrule) && !(is_int($hisrule) || ctype_digit($hisrule))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hisrule, true), gettype($hisrule)), __LINE__);
        }
        if (is_null($hisrule) || (is_array($hisrule) && empty($hisrule))) {
            unset($this->hisrule);
        } else {
            $this->hisrule = $hisrule;
        }
        
        return $this;
    }
}
