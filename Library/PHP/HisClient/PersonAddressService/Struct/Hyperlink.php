<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Hyperlink Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Hyperlink extends AbstractStructBase
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
     * The hyperlinkValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $hyperlinkValue = null;
    /**
     * The eaddresstype
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'EAddresstypeValue'. Examples: email, fax, phone, ftp, icq, www, jabber, mobile, msn, yahoo
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eaddresstype = null;
    /**
     * Constructor method for Hyperlink
     * @uses Hyperlink::setAddresstag()
     * @uses Hyperlink::setHyperlinkValue()
     * @uses Hyperlink::setEaddresstype()
     * @param string $addresstag
     * @param string $hyperlinkValue
     * @param string $eaddresstype
     */
    public function __construct(?string $addresstag = null, ?string $hyperlinkValue = null, ?string $eaddresstype = null)
    {
        $this
            ->setAddresstag($addresstag)
            ->setHyperlinkValue($hyperlinkValue)
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink
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
     * Get hyperlinkValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHyperlinkValue(): ?string
    {
        return $this->hyperlinkValue ?? null;
    }
    /**
     * Set hyperlinkValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $hyperlinkValue
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink
     */
    public function setHyperlinkValue(?string $hyperlinkValue = null): self
    {
        // validation for constraint: string
        if (!is_null($hyperlinkValue) && !is_string($hyperlinkValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hyperlinkValue, true), gettype($hyperlinkValue)), __LINE__);
        }
        if (is_null($hyperlinkValue) || (is_array($hyperlinkValue) && empty($hyperlinkValue))) {
            unset($this->hyperlinkValue);
        } else {
            $this->hyperlinkValue = $hyperlinkValue;
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink
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
