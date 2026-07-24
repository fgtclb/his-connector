<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentMethod Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaymentMethod extends AbstractKeyValue
{
    /**
     * The incomingPaymentsAllowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $incomingPaymentsAllowed = null;
    /**
     * The outgoingPaymentsAllowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $outgoingPaymentsAllowed = null;
    /**
     * Constructor method for PaymentMethod
     * @uses PaymentMethod::setIncomingPaymentsAllowed()
     * @uses PaymentMethod::setOutgoingPaymentsAllowed()
     * @param bool $incomingPaymentsAllowed
     * @param bool $outgoingPaymentsAllowed
     */
    public function __construct(?bool $incomingPaymentsAllowed = null, ?bool $outgoingPaymentsAllowed = null)
    {
        $this
            ->setIncomingPaymentsAllowed($incomingPaymentsAllowed)
            ->setOutgoingPaymentsAllowed($outgoingPaymentsAllowed);
    }
    /**
     * Get incomingPaymentsAllowed value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIncomingPaymentsAllowed(): ?bool
    {
        return $this->incomingPaymentsAllowed ?? null;
    }
    /**
     * Set incomingPaymentsAllowed value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $incomingPaymentsAllowed
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\PaymentMethod
     */
    public function setIncomingPaymentsAllowed(?bool $incomingPaymentsAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($incomingPaymentsAllowed) && !is_bool($incomingPaymentsAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($incomingPaymentsAllowed, true), gettype($incomingPaymentsAllowed)), __LINE__);
        }
        if (is_null($incomingPaymentsAllowed) || (is_array($incomingPaymentsAllowed) && empty($incomingPaymentsAllowed))) {
            unset($this->incomingPaymentsAllowed);
        } else {
            $this->incomingPaymentsAllowed = $incomingPaymentsAllowed;
        }
        
        return $this;
    }
    /**
     * Get outgoingPaymentsAllowed value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getOutgoingPaymentsAllowed(): ?bool
    {
        return $this->outgoingPaymentsAllowed ?? null;
    }
    /**
     * Set outgoingPaymentsAllowed value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $outgoingPaymentsAllowed
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\PaymentMethod
     */
    public function setOutgoingPaymentsAllowed(?bool $outgoingPaymentsAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($outgoingPaymentsAllowed) && !is_bool($outgoingPaymentsAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($outgoingPaymentsAllowed, true), gettype($outgoingPaymentsAllowed)), __LINE__);
        }
        if (is_null($outgoingPaymentsAllowed) || (is_array($outgoingPaymentsAllowed) && empty($outgoingPaymentsAllowed))) {
            unset($this->outgoingPaymentsAllowed);
        } else {
            $this->outgoingPaymentsAllowed = $outgoingPaymentsAllowed;
        }
        
        return $this;
    }
}
