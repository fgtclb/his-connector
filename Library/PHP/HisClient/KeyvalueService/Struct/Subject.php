<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Subject Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Subject extends AbstractKeyValue
{
    /**
     * The astatBund
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $astatBund = null;
    /**
     * The astatLand
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $astatLand = null;
    /**
     * Constructor method for Subject
     * @uses Subject::setAstatBund()
     * @uses Subject::setAstatLand()
     * @param string $astatBund
     * @param string $astatLand
     */
    public function __construct(?string $astatBund = null, ?string $astatLand = null)
    {
        $this
            ->setAstatBund($astatBund)
            ->setAstatLand($astatLand);
    }
    /**
     * Get astatBund value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAstatBund(): ?string
    {
        return $this->astatBund ?? null;
    }
    /**
     * Set astatBund value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $astatBund
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\Subject
     */
    public function setAstatBund(?string $astatBund = null): self
    {
        // validation for constraint: string
        if (!is_null($astatBund) && !is_string($astatBund)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($astatBund, true), gettype($astatBund)), __LINE__);
        }
        if (is_null($astatBund) || (is_array($astatBund) && empty($astatBund))) {
            unset($this->astatBund);
        } else {
            $this->astatBund = $astatBund;
        }
        
        return $this;
    }
    /**
     * Get astatLand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAstatLand(): ?string
    {
        return $this->astatLand ?? null;
    }
    /**
     * Set astatLand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $astatLand
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\Subject
     */
    public function setAstatLand(?string $astatLand = null): self
    {
        // validation for constraint: string
        if (!is_null($astatLand) && !is_string($astatLand)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($astatLand, true), gettype($astatLand)), __LINE__);
        }
        if (is_null($astatLand) || (is_array($astatLand) && empty($astatLand))) {
            unset($this->astatLand);
        } else {
            $this->astatLand = $astatLand;
        }
        
        return $this;
    }
}
