<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tax Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Tax extends AbstractKeyValue
{
    /**
     * The rate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $rate = null;
    /**
     * The taxType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $taxType = null;
    /**
     * The fractionOfRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $fractionOfRate = null;
    /**
     * The creditUstva
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $creditUstva = null;
    /**
     * The debitUstva
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $debitUstva = null;
    /**
     * The rateUpdatedAt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $rateUpdatedAt = null;
    /**
     * The taxKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $taxKey = null;
    /**
     * Constructor method for Tax
     * @uses Tax::setRate()
     * @uses Tax::setTaxType()
     * @uses Tax::setFractionOfRate()
     * @uses Tax::setCreditUstva()
     * @uses Tax::setDebitUstva()
     * @uses Tax::setRateUpdatedAt()
     * @uses Tax::setTaxKey()
     * @param float $rate
     * @param string $taxType
     * @param float $fractionOfRate
     * @param string $creditUstva
     * @param string $debitUstva
     * @param string $rateUpdatedAt
     * @param string $taxKey
     */
    public function __construct(?float $rate = null, ?string $taxType = null, ?float $fractionOfRate = null, ?string $creditUstva = null, ?string $debitUstva = null, ?string $rateUpdatedAt = null, ?string $taxKey = null)
    {
        $this
            ->setRate($rate)
            ->setTaxType($taxType)
            ->setFractionOfRate($fractionOfRate)
            ->setCreditUstva($creditUstva)
            ->setDebitUstva($debitUstva)
            ->setRateUpdatedAt($rateUpdatedAt)
            ->setTaxKey($taxKey);
    }
    /**
     * Get rate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getRate(): ?float
    {
        return $this->rate ?? null;
    }
    /**
     * Set rate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $rate
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\Tax
     */
    public function setRate(?float $rate = null): self
    {
        // validation for constraint: float
        if (!is_null($rate) && !(is_float($rate) || is_numeric($rate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rate, true), gettype($rate)), __LINE__);
        }
        if (is_null($rate) || (is_array($rate) && empty($rate))) {
            unset($this->rate);
        } else {
            $this->rate = $rate;
        }
        
        return $this;
    }
    /**
     * Get taxType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTaxType(): ?string
    {
        return $this->taxType ?? null;
    }
    /**
     * Set taxType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $taxType
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\Tax
     */
    public function setTaxType(?string $taxType = null): self
    {
        // validation for constraint: string
        if (!is_null($taxType) && !is_string($taxType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxType, true), gettype($taxType)), __LINE__);
        }
        if (is_null($taxType) || (is_array($taxType) && empty($taxType))) {
            unset($this->taxType);
        } else {
            $this->taxType = $taxType;
        }
        
        return $this;
    }
    /**
     * Get fractionOfRate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getFractionOfRate(): ?float
    {
        return $this->fractionOfRate ?? null;
    }
    /**
     * Set fractionOfRate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $fractionOfRate
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\Tax
     */
    public function setFractionOfRate(?float $fractionOfRate = null): self
    {
        // validation for constraint: float
        if (!is_null($fractionOfRate) && !(is_float($fractionOfRate) || is_numeric($fractionOfRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fractionOfRate, true), gettype($fractionOfRate)), __LINE__);
        }
        if (is_null($fractionOfRate) || (is_array($fractionOfRate) && empty($fractionOfRate))) {
            unset($this->fractionOfRate);
        } else {
            $this->fractionOfRate = $fractionOfRate;
        }
        
        return $this;
    }
    /**
     * Get creditUstva value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreditUstva(): ?string
    {
        return $this->creditUstva ?? null;
    }
    /**
     * Set creditUstva value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creditUstva
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\Tax
     */
    public function setCreditUstva(?string $creditUstva = null): self
    {
        // validation for constraint: string
        if (!is_null($creditUstva) && !is_string($creditUstva)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditUstva, true), gettype($creditUstva)), __LINE__);
        }
        if (is_null($creditUstva) || (is_array($creditUstva) && empty($creditUstva))) {
            unset($this->creditUstva);
        } else {
            $this->creditUstva = $creditUstva;
        }
        
        return $this;
    }
    /**
     * Get debitUstva value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDebitUstva(): ?string
    {
        return $this->debitUstva ?? null;
    }
    /**
     * Set debitUstva value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $debitUstva
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\Tax
     */
    public function setDebitUstva(?string $debitUstva = null): self
    {
        // validation for constraint: string
        if (!is_null($debitUstva) && !is_string($debitUstva)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitUstva, true), gettype($debitUstva)), __LINE__);
        }
        if (is_null($debitUstva) || (is_array($debitUstva) && empty($debitUstva))) {
            unset($this->debitUstva);
        } else {
            $this->debitUstva = $debitUstva;
        }
        
        return $this;
    }
    /**
     * Get rateUpdatedAt value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRateUpdatedAt(): ?string
    {
        return $this->rateUpdatedAt ?? null;
    }
    /**
     * Set rateUpdatedAt value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $rateUpdatedAt
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\Tax
     */
    public function setRateUpdatedAt(?string $rateUpdatedAt = null): self
    {
        // validation for constraint: string
        if (!is_null($rateUpdatedAt) && !is_string($rateUpdatedAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rateUpdatedAt, true), gettype($rateUpdatedAt)), __LINE__);
        }
        if (is_null($rateUpdatedAt) || (is_array($rateUpdatedAt) && empty($rateUpdatedAt))) {
            unset($this->rateUpdatedAt);
        } else {
            $this->rateUpdatedAt = $rateUpdatedAt;
        }
        
        return $this;
    }
    /**
     * Get taxKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTaxKey(): ?string
    {
        return $this->taxKey ?? null;
    }
    /**
     * Set taxKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $taxKey
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\Tax
     */
    public function setTaxKey(?string $taxKey = null): self
    {
        // validation for constraint: string
        if (!is_null($taxKey) && !is_string($taxKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxKey, true), gettype($taxKey)), __LINE__);
        }
        if (is_null($taxKey) || (is_array($taxKey) && empty($taxKey))) {
            unset($this->taxKey);
        } else {
            $this->taxKey = $taxKey;
        }
        
        return $this;
    }
}
