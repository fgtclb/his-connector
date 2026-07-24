<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ControlParameterTypeValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ControlParameterTypeValue extends AbstractKeyValue
{
    /**
     * The active
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $active = null;
    /**
     * The required
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $required = null;
    /**
     * Constructor method for ControlParameterTypeValue
     * @uses ControlParameterTypeValue::setActive()
     * @uses ControlParameterTypeValue::setRequired()
     * @param bool $active
     * @param bool $required
     */
    public function __construct(?bool $active = null, ?bool $required = null)
    {
        $this
            ->setActive($active)
            ->setRequired($required);
    }
    /**
     * Get active value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active ?? null;
    }
    /**
     * Set active value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $active
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ControlParameterTypeValue
     */
    public function setActive(?bool $active = null): self
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        if (is_null($active) || (is_array($active) && empty($active))) {
            unset($this->active);
        } else {
            $this->active = $active;
        }
        
        return $this;
    }
    /**
     * Get required value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getRequired(): ?bool
    {
        return $this->required ?? null;
    }
    /**
     * Set required value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $required
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ControlParameterTypeValue
     */
    public function setRequired(?bool $required = null): self
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        if (is_null($required) || (is_array($required) && empty($required))) {
            unset($this->required);
        } else {
            $this->required = $required;
        }
        
        return $this;
    }
}
