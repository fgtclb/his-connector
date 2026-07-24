<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReasonForBlockingReregistrationValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReasonForBlockingReregistrationValue extends AbstractKeyValue
{
    /**
     * The reasonsForDecision
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $reasonsForDecision = null;
    /**
     * The priority
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $priority = null;
    /**
     * Constructor method for ReasonForBlockingReregistrationValue
     * @uses ReasonForBlockingReregistrationValue::setReasonsForDecision()
     * @uses ReasonForBlockingReregistrationValue::setPriority()
     * @param string $reasonsForDecision
     * @param int $priority
     */
    public function __construct(?string $reasonsForDecision = null, ?int $priority = null)
    {
        $this
            ->setReasonsForDecision($reasonsForDecision)
            ->setPriority($priority);
    }
    /**
     * Get reasonsForDecision value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReasonsForDecision(): ?string
    {
        return $this->reasonsForDecision ?? null;
    }
    /**
     * Set reasonsForDecision value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $reasonsForDecision
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ReasonForBlockingReregistrationValue
     */
    public function setReasonsForDecision(?string $reasonsForDecision = null): self
    {
        // validation for constraint: string
        if (!is_null($reasonsForDecision) && !is_string($reasonsForDecision)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reasonsForDecision, true), gettype($reasonsForDecision)), __LINE__);
        }
        if (is_null($reasonsForDecision) || (is_array($reasonsForDecision) && empty($reasonsForDecision))) {
            unset($this->reasonsForDecision);
        } else {
            $this->reasonsForDecision = $reasonsForDecision;
        }
        
        return $this;
    }
    /**
     * Get priority value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->priority ?? null;
    }
    /**
     * Set priority value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $priority
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ReasonForBlockingReregistrationValue
     */
    public function setPriority(?int $priority = null): self
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        if (is_null($priority) || (is_array($priority) && empty($priority))) {
            unset($this->priority);
        } else {
            $this->priority = $priority;
        }
        
        return $this;
    }
}
