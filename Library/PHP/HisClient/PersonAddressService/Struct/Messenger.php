<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Messenger Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Messenger extends AbstractStructBase
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
     * The messengerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $messengerValue = null;
    /**
     * The eaddresstype
     * Meta information extracted from the WSDL
     * - documentation: Per addresstype several specifications, e.g. ICQ, MSN. See KeyvalueService with valueClass = 'EAddresstypeValue'. Examples: email, fax, phone, ftp, icq, www, jabber, mobile, msn, yahoo
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eaddresstype = null;
    /**
     * Constructor method for Messenger
     * @uses Messenger::setAddresstag()
     * @uses Messenger::setMessengerValue()
     * @uses Messenger::setEaddresstype()
     * @param string $addresstag
     * @param string $messengerValue
     * @param string $eaddresstype
     */
    public function __construct(?string $addresstag = null, ?string $messengerValue = null, ?string $eaddresstype = null)
    {
        $this
            ->setAddresstag($addresstag)
            ->setMessengerValue($messengerValue)
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Messenger
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
     * Get messengerValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessengerValue(): ?string
    {
        return $this->messengerValue ?? null;
    }
    /**
     * Set messengerValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $messengerValue
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Messenger
     */
    public function setMessengerValue(?string $messengerValue = null): self
    {
        // validation for constraint: string
        if (!is_null($messengerValue) && !is_string($messengerValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messengerValue, true), gettype($messengerValue)), __LINE__);
        }
        if (is_null($messengerValue) || (is_array($messengerValue) && empty($messengerValue))) {
            unset($this->messengerValue);
        } else {
            $this->messengerValue = $messengerValue;
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Messenger
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
