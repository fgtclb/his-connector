<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Email202506 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Email202506 extends AbstractStructBase
{
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
     * The isVerified
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $isVerified = null;
    /**
     * The emailValue
     * Meta information extracted from the WSDL
     * - documentation: The actual value for this email.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $emailValue = null;
    /**
     * The eaddresstype
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'EAddresstypeValue'. Examples: email, fax, phone, ftp, icq, www, jabber, mobile, msn, yahoo
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eaddresstype = null;
    /**
     * Constructor method for Email202506
     * @uses Email202506::setAddresstag()
     * @uses Email202506::setIsVerified()
     * @uses Email202506::setEmailValue()
     * @uses Email202506::setEaddresstype()
     * @param string $addresstag
     * @param bool $isVerified
     * @param string $emailValue
     * @param string $eaddresstype
     */
    public function __construct(?string $addresstag = null, ?bool $isVerified = null, ?string $emailValue = null, ?string $eaddresstype = null)
    {
        $this
            ->setAddresstag($addresstag)
            ->setIsVerified($isVerified)
            ->setEmailValue($emailValue)
            ->setEaddresstype($eaddresstype);
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Email202506
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
    /**
     * Get isVerified value
     * @return bool|null
     */
    public function getIsVerified(): ?bool
    {
        return $this->isVerified;
    }
    /**
     * Set isVerified value
     * @param bool $isVerified
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Email202506
     */
    public function setIsVerified(?bool $isVerified = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVerified) && !is_bool($isVerified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVerified, true), gettype($isVerified)), __LINE__);
        }
        $this->isVerified = $isVerified;
        
        return $this;
    }
    /**
     * Get emailValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmailValue(): ?string
    {
        return $this->emailValue ?? null;
    }
    /**
     * Set emailValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $emailValue
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Email202506
     */
    public function setEmailValue(?string $emailValue = null): self
    {
        // validation for constraint: string
        if (!is_null($emailValue) && !is_string($emailValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailValue, true), gettype($emailValue)), __LINE__);
        }
        if (is_null($emailValue) || (is_array($emailValue) && empty($emailValue))) {
            unset($this->emailValue);
        } else {
            $this->emailValue = $emailValue;
        }
        
        return $this;
    }
    /**
     * Get eaddresstype value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEaddresstype(): ?string
    {
        return $this->eaddresstype ?? null;
    }
    /**
     * Set eaddresstype value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $eaddresstype
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Email202506
     */
    public function setEaddresstype(?string $eaddresstype = null): self
    {
        // validation for constraint: string
        if (!is_null($eaddresstype) && !is_string($eaddresstype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eaddresstype, true), gettype($eaddresstype)), __LINE__);
        }
        if (is_null($eaddresstype) || (is_array($eaddresstype) && empty($eaddresstype))) {
            unset($this->eaddresstype);
        } else {
            $this->eaddresstype = $eaddresstype;
        }
        
        return $this;
    }
}
