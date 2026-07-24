<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonAddressesByNotification202506 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonAddressesByNotification202506 extends AbstractStructBase
{
    /**
     * The notificationCategory202506
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'NotificationCategoryValue'. Examples: COMA, ALU, ALUG, ALUK, ALUR, CA, COM, OFFICE, UP, DOSV
     * @var string
     */
    protected string $notificationCategory202506;
    /**
     * The postaddresses202506
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Postaddresses202506Type|null
     */
    protected ?\FGTCLB\HisClient\PersonAddressService\Struct\Postaddresses202506Type $postaddresses202506 = null;
    /**
     * The emails202506
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Emails202506Type|null
     */
    protected ?\FGTCLB\HisClient\PersonAddressService\Struct\Emails202506Type $emails202506 = null;
    /**
     * The phones202506
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Phones202506Type|null
     */
    protected ?\FGTCLB\HisClient\PersonAddressService\Struct\Phones202506Type $phones202506 = null;
    /**
     * The messengers202506
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Messengers202506Type|null
     */
    protected ?\FGTCLB\HisClient\PersonAddressService\Struct\Messengers202506Type $messengers202506 = null;
    /**
     * The hyperlinks202506
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlinks202506Type|null
     */
    protected ?\FGTCLB\HisClient\PersonAddressService\Struct\Hyperlinks202506Type $hyperlinks202506 = null;
    /**
     * Constructor method for PersonAddressesByNotification202506
     * @uses PersonAddressesByNotification202506::setNotificationCategory202506()
     * @uses PersonAddressesByNotification202506::setPostaddresses202506()
     * @uses PersonAddressesByNotification202506::setEmails202506()
     * @uses PersonAddressesByNotification202506::setPhones202506()
     * @uses PersonAddressesByNotification202506::setMessengers202506()
     * @uses PersonAddressesByNotification202506::setHyperlinks202506()
     * @param string $notificationCategory202506
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Postaddresses202506Type $postaddresses202506
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Emails202506Type $emails202506
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Phones202506Type $phones202506
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Messengers202506Type $messengers202506
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlinks202506Type $hyperlinks202506
     */
    public function __construct(string $notificationCategory202506, ?\FGTCLB\HisClient\PersonAddressService\Struct\Postaddresses202506Type $postaddresses202506 = null, ?\FGTCLB\HisClient\PersonAddressService\Struct\Emails202506Type $emails202506 = null, ?\FGTCLB\HisClient\PersonAddressService\Struct\Phones202506Type $phones202506 = null, ?\FGTCLB\HisClient\PersonAddressService\Struct\Messengers202506Type $messengers202506 = null, ?\FGTCLB\HisClient\PersonAddressService\Struct\Hyperlinks202506Type $hyperlinks202506 = null)
    {
        $this
            ->setNotificationCategory202506($notificationCategory202506)
            ->setPostaddresses202506($postaddresses202506)
            ->setEmails202506($emails202506)
            ->setPhones202506($phones202506)
            ->setMessengers202506($messengers202506)
            ->setHyperlinks202506($hyperlinks202506);
    }
    /**
     * Get notificationCategory202506 value
     * @return string
     */
    public function getNotificationCategory202506(): string
    {
        return $this->notificationCategory202506;
    }
    /**
     * Set notificationCategory202506 value
     * @param string $notificationCategory202506
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506
     */
    public function setNotificationCategory202506(string $notificationCategory202506): self
    {
        // validation for constraint: string
        if (!is_null($notificationCategory202506) && !is_string($notificationCategory202506)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notificationCategory202506, true), gettype($notificationCategory202506)), __LINE__);
        }
        $this->notificationCategory202506 = $notificationCategory202506;
        
        return $this;
    }
    /**
     * Get postaddresses202506 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Postaddresses202506Type|null
     */
    public function getPostaddresses202506(): ?\FGTCLB\HisClient\PersonAddressService\Struct\Postaddresses202506Type
    {
        return $this->postaddresses202506 ?? null;
    }
    /**
     * Set postaddresses202506 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Postaddresses202506Type $postaddresses202506
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506
     */
    public function setPostaddresses202506(?\FGTCLB\HisClient\PersonAddressService\Struct\Postaddresses202506Type $postaddresses202506 = null): self
    {
        if (is_null($postaddresses202506) || (is_array($postaddresses202506) && empty($postaddresses202506))) {
            unset($this->postaddresses202506);
        } else {
            $this->postaddresses202506 = $postaddresses202506;
        }
        
        return $this;
    }
    /**
     * Get emails202506 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Emails202506Type|null
     */
    public function getEmails202506(): ?\FGTCLB\HisClient\PersonAddressService\Struct\Emails202506Type
    {
        return $this->emails202506 ?? null;
    }
    /**
     * Set emails202506 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Emails202506Type $emails202506
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506
     */
    public function setEmails202506(?\FGTCLB\HisClient\PersonAddressService\Struct\Emails202506Type $emails202506 = null): self
    {
        if (is_null($emails202506) || (is_array($emails202506) && empty($emails202506))) {
            unset($this->emails202506);
        } else {
            $this->emails202506 = $emails202506;
        }
        
        return $this;
    }
    /**
     * Get phones202506 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Phones202506Type|null
     */
    public function getPhones202506(): ?\FGTCLB\HisClient\PersonAddressService\Struct\Phones202506Type
    {
        return $this->phones202506 ?? null;
    }
    /**
     * Set phones202506 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Phones202506Type $phones202506
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506
     */
    public function setPhones202506(?\FGTCLB\HisClient\PersonAddressService\Struct\Phones202506Type $phones202506 = null): self
    {
        if (is_null($phones202506) || (is_array($phones202506) && empty($phones202506))) {
            unset($this->phones202506);
        } else {
            $this->phones202506 = $phones202506;
        }
        
        return $this;
    }
    /**
     * Get messengers202506 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Messengers202506Type|null
     */
    public function getMessengers202506(): ?\FGTCLB\HisClient\PersonAddressService\Struct\Messengers202506Type
    {
        return $this->messengers202506 ?? null;
    }
    /**
     * Set messengers202506 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Messengers202506Type $messengers202506
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506
     */
    public function setMessengers202506(?\FGTCLB\HisClient\PersonAddressService\Struct\Messengers202506Type $messengers202506 = null): self
    {
        if (is_null($messengers202506) || (is_array($messengers202506) && empty($messengers202506))) {
            unset($this->messengers202506);
        } else {
            $this->messengers202506 = $messengers202506;
        }
        
        return $this;
    }
    /**
     * Get hyperlinks202506 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlinks202506Type|null
     */
    public function getHyperlinks202506(): ?\FGTCLB\HisClient\PersonAddressService\Struct\Hyperlinks202506Type
    {
        return $this->hyperlinks202506 ?? null;
    }
    /**
     * Set hyperlinks202506 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlinks202506Type $hyperlinks202506
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506
     */
    public function setHyperlinks202506(?\FGTCLB\HisClient\PersonAddressService\Struct\Hyperlinks202506Type $hyperlinks202506 = null): self
    {
        if (is_null($hyperlinks202506) || (is_array($hyperlinks202506) && empty($hyperlinks202506))) {
            unset($this->hyperlinks202506);
        } else {
            $this->hyperlinks202506 = $hyperlinks202506;
        }
        
        return $this;
    }
}
