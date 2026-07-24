<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PortalMessageCategory Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PortalMessageCategory extends AbstractKeyValue
{
    /**
     * The priority
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $priority = null;
    /**
     * The icon
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $icon = null;
    /**
     * The linkUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $linkUrl = null;
    /**
     * The linkTarget
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $linkTarget = null;
    /**
     * The integratePeriod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $integratePeriod = null;
    /**
     * The mailSpamProtected
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $mailSpamProtected = null;
    /**
     * The sendAsEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $sendAsEmail = null;
    /**
     * The sendAsPush
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $sendAsPush = null;
    /**
     * The categoryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $categoryName = null;
    /**
     * The messageFactoryClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $messageFactoryClass = null;
    /**
     * Constructor method for PortalMessageCategory
     * @uses PortalMessageCategory::setPriority()
     * @uses PortalMessageCategory::setIcon()
     * @uses PortalMessageCategory::setLinkUrl()
     * @uses PortalMessageCategory::setLinkTarget()
     * @uses PortalMessageCategory::setIntegratePeriod()
     * @uses PortalMessageCategory::setMailSpamProtected()
     * @uses PortalMessageCategory::setSendAsEmail()
     * @uses PortalMessageCategory::setSendAsPush()
     * @uses PortalMessageCategory::setCategoryName()
     * @uses PortalMessageCategory::setMessageFactoryClass()
     * @param int $priority
     * @param string $icon
     * @param string $linkUrl
     * @param string $linkTarget
     * @param int $integratePeriod
     * @param bool $mailSpamProtected
     * @param bool $sendAsEmail
     * @param bool $sendAsPush
     * @param string $categoryName
     * @param string $messageFactoryClass
     */
    public function __construct(?int $priority = null, ?string $icon = null, ?string $linkUrl = null, ?string $linkTarget = null, ?int $integratePeriod = null, ?bool $mailSpamProtected = null, ?bool $sendAsEmail = null, ?bool $sendAsPush = null, ?string $categoryName = null, ?string $messageFactoryClass = null)
    {
        $this
            ->setPriority($priority)
            ->setIcon($icon)
            ->setLinkUrl($linkUrl)
            ->setLinkTarget($linkTarget)
            ->setIntegratePeriod($integratePeriod)
            ->setMailSpamProtected($mailSpamProtected)
            ->setSendAsEmail($sendAsEmail)
            ->setSendAsPush($sendAsPush)
            ->setCategoryName($categoryName)
            ->setMessageFactoryClass($messageFactoryClass);
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
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\PortalMessageCategory
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
    /**
     * Get icon value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIcon(): ?string
    {
        return $this->icon ?? null;
    }
    /**
     * Set icon value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $icon
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\PortalMessageCategory
     */
    public function setIcon(?string $icon = null): self
    {
        // validation for constraint: string
        if (!is_null($icon) && !is_string($icon)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($icon, true), gettype($icon)), __LINE__);
        }
        if (is_null($icon) || (is_array($icon) && empty($icon))) {
            unset($this->icon);
        } else {
            $this->icon = $icon;
        }
        
        return $this;
    }
    /**
     * Get linkUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLinkUrl(): ?string
    {
        return $this->linkUrl ?? null;
    }
    /**
     * Set linkUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $linkUrl
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\PortalMessageCategory
     */
    public function setLinkUrl(?string $linkUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($linkUrl) && !is_string($linkUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkUrl, true), gettype($linkUrl)), __LINE__);
        }
        if (is_null($linkUrl) || (is_array($linkUrl) && empty($linkUrl))) {
            unset($this->linkUrl);
        } else {
            $this->linkUrl = $linkUrl;
        }
        
        return $this;
    }
    /**
     * Get linkTarget value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLinkTarget(): ?string
    {
        return $this->linkTarget ?? null;
    }
    /**
     * Set linkTarget value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $linkTarget
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\PortalMessageCategory
     */
    public function setLinkTarget(?string $linkTarget = null): self
    {
        // validation for constraint: string
        if (!is_null($linkTarget) && !is_string($linkTarget)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkTarget, true), gettype($linkTarget)), __LINE__);
        }
        if (is_null($linkTarget) || (is_array($linkTarget) && empty($linkTarget))) {
            unset($this->linkTarget);
        } else {
            $this->linkTarget = $linkTarget;
        }
        
        return $this;
    }
    /**
     * Get integratePeriod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getIntegratePeriod(): ?int
    {
        return $this->integratePeriod ?? null;
    }
    /**
     * Set integratePeriod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $integratePeriod
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\PortalMessageCategory
     */
    public function setIntegratePeriod(?int $integratePeriod = null): self
    {
        // validation for constraint: int
        if (!is_null($integratePeriod) && !(is_int($integratePeriod) || ctype_digit($integratePeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($integratePeriod, true), gettype($integratePeriod)), __LINE__);
        }
        if (is_null($integratePeriod) || (is_array($integratePeriod) && empty($integratePeriod))) {
            unset($this->integratePeriod);
        } else {
            $this->integratePeriod = $integratePeriod;
        }
        
        return $this;
    }
    /**
     * Get mailSpamProtected value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getMailSpamProtected(): ?bool
    {
        return $this->mailSpamProtected ?? null;
    }
    /**
     * Set mailSpamProtected value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $mailSpamProtected
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\PortalMessageCategory
     */
    public function setMailSpamProtected(?bool $mailSpamProtected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mailSpamProtected) && !is_bool($mailSpamProtected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailSpamProtected, true), gettype($mailSpamProtected)), __LINE__);
        }
        if (is_null($mailSpamProtected) || (is_array($mailSpamProtected) && empty($mailSpamProtected))) {
            unset($this->mailSpamProtected);
        } else {
            $this->mailSpamProtected = $mailSpamProtected;
        }
        
        return $this;
    }
    /**
     * Get sendAsEmail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getSendAsEmail(): ?bool
    {
        return $this->sendAsEmail ?? null;
    }
    /**
     * Set sendAsEmail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $sendAsEmail
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\PortalMessageCategory
     */
    public function setSendAsEmail(?bool $sendAsEmail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sendAsEmail) && !is_bool($sendAsEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendAsEmail, true), gettype($sendAsEmail)), __LINE__);
        }
        if (is_null($sendAsEmail) || (is_array($sendAsEmail) && empty($sendAsEmail))) {
            unset($this->sendAsEmail);
        } else {
            $this->sendAsEmail = $sendAsEmail;
        }
        
        return $this;
    }
    /**
     * Get sendAsPush value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getSendAsPush(): ?bool
    {
        return $this->sendAsPush ?? null;
    }
    /**
     * Set sendAsPush value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $sendAsPush
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\PortalMessageCategory
     */
    public function setSendAsPush(?bool $sendAsPush = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sendAsPush) && !is_bool($sendAsPush)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendAsPush, true), gettype($sendAsPush)), __LINE__);
        }
        if (is_null($sendAsPush) || (is_array($sendAsPush) && empty($sendAsPush))) {
            unset($this->sendAsPush);
        } else {
            $this->sendAsPush = $sendAsPush;
        }
        
        return $this;
    }
    /**
     * Get categoryName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCategoryName(): ?string
    {
        return $this->categoryName ?? null;
    }
    /**
     * Set categoryName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $categoryName
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\PortalMessageCategory
     */
    public function setCategoryName(?string $categoryName = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryName) && !is_string($categoryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryName, true), gettype($categoryName)), __LINE__);
        }
        if (is_null($categoryName) || (is_array($categoryName) && empty($categoryName))) {
            unset($this->categoryName);
        } else {
            $this->categoryName = $categoryName;
        }
        
        return $this;
    }
    /**
     * Get messageFactoryClass value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessageFactoryClass(): ?string
    {
        return $this->messageFactoryClass ?? null;
    }
    /**
     * Set messageFactoryClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $messageFactoryClass
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\PortalMessageCategory
     */
    public function setMessageFactoryClass(?string $messageFactoryClass = null): self
    {
        // validation for constraint: string
        if (!is_null($messageFactoryClass) && !is_string($messageFactoryClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageFactoryClass, true), gettype($messageFactoryClass)), __LINE__);
        }
        if (is_null($messageFactoryClass) || (is_array($messageFactoryClass) && empty($messageFactoryClass))) {
            unset($this->messageFactoryClass);
        } else {
            $this->messageFactoryClass = $messageFactoryClass;
        }
        
        return $this;
    }
}
