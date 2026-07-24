<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonAddresses Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonAddresses extends AbstractStructBase
{
    /**
     * The postaddresses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressesType_1|null
     */
    protected ?\FGTCLB\HisClient\PersonAddressService\Struct\PostaddressesType_1 $postaddresses = null;
    /**
     * The emails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\EmailsType|null
     */
    protected ?\FGTCLB\HisClient\PersonAddressService\Struct\EmailsType $emails = null;
    /**
     * The phones
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\PhonesType|null
     */
    protected ?\FGTCLB\HisClient\PersonAddressService\Struct\PhonesType $phones = null;
    /**
     * The messengers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\MessengersType|null
     */
    protected ?\FGTCLB\HisClient\PersonAddressService\Struct\MessengersType $messengers = null;
    /**
     * The hyperlinks
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinksType|null
     */
    protected ?\FGTCLB\HisClient\PersonAddressService\Struct\HyperlinksType $hyperlinks = null;
    /**
     * Constructor method for PersonAddresses
     * @uses PersonAddresses::setPostaddresses()
     * @uses PersonAddresses::setEmails()
     * @uses PersonAddresses::setPhones()
     * @uses PersonAddresses::setMessengers()
     * @uses PersonAddresses::setHyperlinks()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressesType_1 $postaddresses
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\EmailsType $emails
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PhonesType $phones
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\MessengersType $messengers
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinksType $hyperlinks
     */
    public function __construct(?\FGTCLB\HisClient\PersonAddressService\Struct\PostaddressesType_1 $postaddresses = null, ?\FGTCLB\HisClient\PersonAddressService\Struct\EmailsType $emails = null, ?\FGTCLB\HisClient\PersonAddressService\Struct\PhonesType $phones = null, ?\FGTCLB\HisClient\PersonAddressService\Struct\MessengersType $messengers = null, ?\FGTCLB\HisClient\PersonAddressService\Struct\HyperlinksType $hyperlinks = null)
    {
        $this
            ->setPostaddresses($postaddresses)
            ->setEmails($emails)
            ->setPhones($phones)
            ->setMessengers($messengers)
            ->setHyperlinks($hyperlinks);
    }
    /**
     * Get postaddresses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressesType_1|null
     */
    public function getPostaddresses(): ?\FGTCLB\HisClient\PersonAddressService\Struct\PostaddressesType_1
    {
        return $this->postaddresses ?? null;
    }
    /**
     * Set postaddresses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressesType_1 $postaddresses
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses
     */
    public function setPostaddresses(?\FGTCLB\HisClient\PersonAddressService\Struct\PostaddressesType_1 $postaddresses = null): self
    {
        if (is_null($postaddresses) || (is_array($postaddresses) && empty($postaddresses))) {
            unset($this->postaddresses);
        } else {
            $this->postaddresses = $postaddresses;
        }
        
        return $this;
    }
    /**
     * Get emails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EmailsType|null
     */
    public function getEmails(): ?\FGTCLB\HisClient\PersonAddressService\Struct\EmailsType
    {
        return $this->emails ?? null;
    }
    /**
     * Set emails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\EmailsType $emails
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses
     */
    public function setEmails(?\FGTCLB\HisClient\PersonAddressService\Struct\EmailsType $emails = null): self
    {
        if (is_null($emails) || (is_array($emails) && empty($emails))) {
            unset($this->emails);
        } else {
            $this->emails = $emails;
        }
        
        return $this;
    }
    /**
     * Get phones value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PhonesType|null
     */
    public function getPhones(): ?\FGTCLB\HisClient\PersonAddressService\Struct\PhonesType
    {
        return $this->phones ?? null;
    }
    /**
     * Set phones value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PhonesType $phones
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses
     */
    public function setPhones(?\FGTCLB\HisClient\PersonAddressService\Struct\PhonesType $phones = null): self
    {
        if (is_null($phones) || (is_array($phones) && empty($phones))) {
            unset($this->phones);
        } else {
            $this->phones = $phones;
        }
        
        return $this;
    }
    /**
     * Get messengers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\MessengersType|null
     */
    public function getMessengers(): ?\FGTCLB\HisClient\PersonAddressService\Struct\MessengersType
    {
        return $this->messengers ?? null;
    }
    /**
     * Set messengers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\MessengersType $messengers
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses
     */
    public function setMessengers(?\FGTCLB\HisClient\PersonAddressService\Struct\MessengersType $messengers = null): self
    {
        if (is_null($messengers) || (is_array($messengers) && empty($messengers))) {
            unset($this->messengers);
        } else {
            $this->messengers = $messengers;
        }
        
        return $this;
    }
    /**
     * Get hyperlinks value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinksType|null
     */
    public function getHyperlinks(): ?\FGTCLB\HisClient\PersonAddressService\Struct\HyperlinksType
    {
        return $this->hyperlinks ?? null;
    }
    /**
     * Set hyperlinks value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinksType $hyperlinks
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses
     */
    public function setHyperlinks(?\FGTCLB\HisClient\PersonAddressService\Struct\HyperlinksType $hyperlinks = null): self
    {
        if (is_null($hyperlinks) || (is_array($hyperlinks) && empty($hyperlinks))) {
            unset($this->hyperlinks);
        } else {
            $this->hyperlinks = $hyperlinks;
        }
        
        return $this;
    }
}
