<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GradingTypeValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GradingTypeValue extends AbstractKeyValue
{
    /**
     * The typeOfGrading
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $typeOfGrading = null;
    /**
     * The lowerLimit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $lowerLimit = null;
    /**
     * The upperLimit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $upperLimit = null;
    /**
     * The creditsThreshold
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $creditsThreshold = null;
    /**
     * The regularExpression
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $regularExpression = null;
    /**
     * The roundingPosition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $roundingPosition = null;
    /**
     * Constructor method for GradingTypeValue
     * @uses GradingTypeValue::setTypeOfGrading()
     * @uses GradingTypeValue::setLowerLimit()
     * @uses GradingTypeValue::setUpperLimit()
     * @uses GradingTypeValue::setCreditsThreshold()
     * @uses GradingTypeValue::setRegularExpression()
     * @uses GradingTypeValue::setRoundingPosition()
     * @param int $typeOfGrading
     * @param float $lowerLimit
     * @param float $upperLimit
     * @param float $creditsThreshold
     * @param string $regularExpression
     * @param int $roundingPosition
     */
    public function __construct(?int $typeOfGrading = null, ?float $lowerLimit = null, ?float $upperLimit = null, ?float $creditsThreshold = null, ?string $regularExpression = null, ?int $roundingPosition = null)
    {
        $this
            ->setTypeOfGrading($typeOfGrading)
            ->setLowerLimit($lowerLimit)
            ->setUpperLimit($upperLimit)
            ->setCreditsThreshold($creditsThreshold)
            ->setRegularExpression($regularExpression)
            ->setRoundingPosition($roundingPosition);
    }
    /**
     * Get typeOfGrading value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTypeOfGrading(): ?int
    {
        return $this->typeOfGrading ?? null;
    }
    /**
     * Set typeOfGrading value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $typeOfGrading
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GradingTypeValue
     */
    public function setTypeOfGrading(?int $typeOfGrading = null): self
    {
        // validation for constraint: int
        if (!is_null($typeOfGrading) && !(is_int($typeOfGrading) || ctype_digit($typeOfGrading))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typeOfGrading, true), gettype($typeOfGrading)), __LINE__);
        }
        if (is_null($typeOfGrading) || (is_array($typeOfGrading) && empty($typeOfGrading))) {
            unset($this->typeOfGrading);
        } else {
            $this->typeOfGrading = $typeOfGrading;
        }
        
        return $this;
    }
    /**
     * Get lowerLimit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getLowerLimit(): ?float
    {
        return $this->lowerLimit ?? null;
    }
    /**
     * Set lowerLimit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $lowerLimit
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GradingTypeValue
     */
    public function setLowerLimit(?float $lowerLimit = null): self
    {
        // validation for constraint: float
        if (!is_null($lowerLimit) && !(is_float($lowerLimit) || is_numeric($lowerLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($lowerLimit, true), gettype($lowerLimit)), __LINE__);
        }
        if (is_null($lowerLimit) || (is_array($lowerLimit) && empty($lowerLimit))) {
            unset($this->lowerLimit);
        } else {
            $this->lowerLimit = $lowerLimit;
        }
        
        return $this;
    }
    /**
     * Get upperLimit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getUpperLimit(): ?float
    {
        return $this->upperLimit ?? null;
    }
    /**
     * Set upperLimit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $upperLimit
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GradingTypeValue
     */
    public function setUpperLimit(?float $upperLimit = null): self
    {
        // validation for constraint: float
        if (!is_null($upperLimit) && !(is_float($upperLimit) || is_numeric($upperLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($upperLimit, true), gettype($upperLimit)), __LINE__);
        }
        if (is_null($upperLimit) || (is_array($upperLimit) && empty($upperLimit))) {
            unset($this->upperLimit);
        } else {
            $this->upperLimit = $upperLimit;
        }
        
        return $this;
    }
    /**
     * Get creditsThreshold value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getCreditsThreshold(): ?float
    {
        return $this->creditsThreshold ?? null;
    }
    /**
     * Set creditsThreshold value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $creditsThreshold
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GradingTypeValue
     */
    public function setCreditsThreshold(?float $creditsThreshold = null): self
    {
        // validation for constraint: float
        if (!is_null($creditsThreshold) && !(is_float($creditsThreshold) || is_numeric($creditsThreshold))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($creditsThreshold, true), gettype($creditsThreshold)), __LINE__);
        }
        if (is_null($creditsThreshold) || (is_array($creditsThreshold) && empty($creditsThreshold))) {
            unset($this->creditsThreshold);
        } else {
            $this->creditsThreshold = $creditsThreshold;
        }
        
        return $this;
    }
    /**
     * Get regularExpression value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRegularExpression(): ?string
    {
        return $this->regularExpression ?? null;
    }
    /**
     * Set regularExpression value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $regularExpression
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GradingTypeValue
     */
    public function setRegularExpression(?string $regularExpression = null): self
    {
        // validation for constraint: string
        if (!is_null($regularExpression) && !is_string($regularExpression)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regularExpression, true), gettype($regularExpression)), __LINE__);
        }
        if (is_null($regularExpression) || (is_array($regularExpression) && empty($regularExpression))) {
            unset($this->regularExpression);
        } else {
            $this->regularExpression = $regularExpression;
        }
        
        return $this;
    }
    /**
     * Get roundingPosition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getRoundingPosition(): ?int
    {
        return $this->roundingPosition ?? null;
    }
    /**
     * Set roundingPosition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $roundingPosition
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GradingTypeValue
     */
    public function setRoundingPosition(?int $roundingPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($roundingPosition) && !(is_int($roundingPosition) || ctype_digit($roundingPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roundingPosition, true), gettype($roundingPosition)), __LINE__);
        }
        if (is_null($roundingPosition) || (is_array($roundingPosition) && empty($roundingPosition))) {
            unset($this->roundingPosition);
        } else {
            $this->roundingPosition = $roundingPosition;
        }
        
        return $this;
    }
}
