<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Phone Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Phone extends AbstractStructBase
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
     * The phoneNumber
     * Meta information extracted from the WSDL
     * - documentation: The actual phone number.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $phoneNumber = null;
    /**
     * The eaddresstype
     * Meta information extracted from the WSDL
     * - documentation: Per addresstype several specifications, e.g. mobile, fax, phone. See KeyvalueService with valueClass = 'EAddresstypeValue'. Examples: email, fax, phone, ftp, icq, www, jabber, mobile, msn, yahoo
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eaddresstype = null;
    /**
     * Constructor method for Phone
     * @uses Phone::setAddresstag()
     * @uses Phone::setPhoneNumber()
     * @uses Phone::setEaddresstype()
     * @param string $addresstag
     * @param string $phoneNumber
     * @param string $eaddresstype
     */
    public function __construct(?string $addresstag = null, ?string $phoneNumber = null, ?string $eaddresstype = null)
    {
        $this
            ->setAddresstag($addresstag)
            ->setPhoneNumber($phoneNumber)
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Phone
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
     * Get phoneNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber ?? null;
    }
    /**
     * Set phoneNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phoneNumber
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Phone
     */
    public function setPhoneNumber(?string $phoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), gettype($phoneNumber)), __LINE__);
        }
        if (is_null($phoneNumber) || (is_array($phoneNumber) && empty($phoneNumber))) {
            unset($this->phoneNumber);
        } else {
            $this->phoneNumber = $phoneNumber;
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Phone
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
