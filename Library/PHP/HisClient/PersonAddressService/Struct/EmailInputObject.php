<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailInputObject Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EmailInputObject extends AbstractStructBase
{
    /**
     * The emailValue
     * Meta information extracted from the WSDL
     * - documentation: The actual value for this email.
     * @var string
     */
    protected string $emailValue;
    /**
     * The addresstag
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'AddresstagValue'. Examples: community, business, home, sest, delivery, login, postaddress, privat, rz, invoice
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $addresstag = null;
    /**
     * Constructor method for EmailInputObject
     * @uses EmailInputObject::setEmailValue()
     * @uses EmailInputObject::setAddresstag()
     * @param string $emailValue
     * @param string $addresstag
     */
    public function __construct(string $emailValue, ?string $addresstag = null)
    {
        $this
            ->setEmailValue($emailValue)
            ->setAddresstag($addresstag);
    }
    /**
     * Get emailValue value
     * @return string
     */
    public function getEmailValue(): string
    {
        return $this->emailValue;
    }
    /**
     * Set emailValue value
     * @param string $emailValue
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject
     */
    public function setEmailValue(string $emailValue): self
    {
        // validation for constraint: string
        if (!is_null($emailValue) && !is_string($emailValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailValue, true), gettype($emailValue)), __LINE__);
        }
        $this->emailValue = $emailValue;
        
        return $this;
    }
    /**
     * Get addresstag value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddresstag(): ?string
    {
        return $this->addresstag ?? null;
    }
    /**
     * Set addresstag value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addresstag
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject
     */
    public function setAddresstag(?string $addresstag = null): self
    {
        // validation for constraint: string
        if (!is_null($addresstag) && !is_string($addresstag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addresstag, true), gettype($addresstag)), __LINE__);
        }
        if (is_null($addresstag) || (is_array($addresstag) && empty($addresstag))) {
            unset($this->addresstag);
        } else {
            $this->addresstag = $addresstag;
        }
        
        return $this;
    }
}
