<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FrequencyOfOfferValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FrequencyOfOfferValue extends AbstractKeyValue
{
    /**
     * The termcategory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $termcategory = null;
    /**
     * The termnumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $termnumber = null;
    /**
     * The frequency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $frequency = null;
    /**
     * Constructor method for FrequencyOfOfferValue
     * @uses FrequencyOfOfferValue::setTermcategory()
     * @uses FrequencyOfOfferValue::setTermnumber()
     * @uses FrequencyOfOfferValue::setFrequency()
     * @param int $termcategory
     * @param int $termnumber
     * @param int $frequency
     */
    public function __construct(?int $termcategory = null, ?int $termnumber = null, ?int $frequency = null)
    {
        $this
            ->setTermcategory($termcategory)
            ->setTermnumber($termnumber)
            ->setFrequency($frequency);
    }
    /**
     * Get termcategory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTermcategory(): ?int
    {
        return $this->termcategory ?? null;
    }
    /**
     * Set termcategory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $termcategory
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\FrequencyOfOfferValue
     */
    public function setTermcategory(?int $termcategory = null): self
    {
        // validation for constraint: int
        if (!is_null($termcategory) && !(is_int($termcategory) || ctype_digit($termcategory))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($termcategory, true), gettype($termcategory)), __LINE__);
        }
        if (is_null($termcategory) || (is_array($termcategory) && empty($termcategory))) {
            unset($this->termcategory);
        } else {
            $this->termcategory = $termcategory;
        }
        
        return $this;
    }
    /**
     * Get termnumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTermnumber(): ?int
    {
        return $this->termnumber ?? null;
    }
    /**
     * Set termnumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $termnumber
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\FrequencyOfOfferValue
     */
    public function setTermnumber(?int $termnumber = null): self
    {
        // validation for constraint: int
        if (!is_null($termnumber) && !(is_int($termnumber) || ctype_digit($termnumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($termnumber, true), gettype($termnumber)), __LINE__);
        }
        if (is_null($termnumber) || (is_array($termnumber) && empty($termnumber))) {
            unset($this->termnumber);
        } else {
            $this->termnumber = $termnumber;
        }
        
        return $this;
    }
    /**
     * Get frequency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getFrequency(): ?int
    {
        return $this->frequency ?? null;
    }
    /**
     * Set frequency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $frequency
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\FrequencyOfOfferValue
     */
    public function setFrequency(?int $frequency = null): self
    {
        // validation for constraint: int
        if (!is_null($frequency) && !(is_int($frequency) || ctype_digit($frequency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($frequency, true), gettype($frequency)), __LINE__);
        }
        if (is_null($frequency) || (is_array($frequency) && empty($frequency))) {
            unset($this->frequency);
        } else {
            $this->frequency = $frequency;
        }
        
        return $this;
    }
}
