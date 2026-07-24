<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createEmail202506 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateEmail202506 extends AbstractStructBase
{
    /**
     * The personId
     * Meta information extracted from the WSDL
     * - documentation: The owner of this address.
     * @var int
     */
    protected int $personId;
    /**
     * The notificationCategory
     * Meta information extracted from the WSDL
     * - documentation: This is the initial notification category of this address. More may be added with 'assignAddressToNotification'. See KeyvalueService with valueClass = 'NotificationCategoryValue'. Examples: COMA, ALU, ALUG, ALUK, ALUR, CA, COM,
     * OFFICE, UP, DOSV
     * @var string
     */
    protected string $notificationCategory;
    /**
     * The email
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject $email;
    /**
     * The isVerified
     * Meta information extracted from the WSDL
     * - documentation: If true, the new email is marked as verified.
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $isVerified = null;
    /**
     * Constructor method for createEmail202506
     * @uses CreateEmail202506::setPersonId()
     * @uses CreateEmail202506::setNotificationCategory()
     * @uses CreateEmail202506::setEmail()
     * @uses CreateEmail202506::setIsVerified()
     * @param int $personId
     * @param string $notificationCategory
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject $email
     * @param bool $isVerified
     */
    public function __construct(int $personId, string $notificationCategory, \FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject $email, ?bool $isVerified = null)
    {
        $this
            ->setPersonId($personId)
            ->setNotificationCategory($notificationCategory)
            ->setEmail($email)
            ->setIsVerified($isVerified);
    }
    /**
     * Get personId value
     * @return int
     */
    public function getPersonId(): int
    {
        return $this->personId;
    }
    /**
     * Set personId value
     * @param int $personId
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreateEmail202506
     */
    public function setPersonId(int $personId): self
    {
        // validation for constraint: int
        if (!is_null($personId) && !(is_int($personId) || ctype_digit($personId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personId, true), gettype($personId)), __LINE__);
        }
        $this->personId = $personId;
        
        return $this;
    }
    /**
     * Get notificationCategory value
     * @return string
     */
    public function getNotificationCategory(): string
    {
        return $this->notificationCategory;
    }
    /**
     * Set notificationCategory value
     * @param string $notificationCategory
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreateEmail202506
     */
    public function setNotificationCategory(string $notificationCategory): self
    {
        // validation for constraint: string
        if (!is_null($notificationCategory) && !is_string($notificationCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notificationCategory, true), gettype($notificationCategory)), __LINE__);
        }
        $this->notificationCategory = $notificationCategory;
        
        return $this;
    }
    /**
     * Get email value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject
     */
    public function getEmail(): \FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject $email
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreateEmail202506
     */
    public function setEmail(\FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject $email): self
    {
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get isVerified value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsVerified(): ?bool
    {
        return $this->isVerified ?? null;
    }
    /**
     * Set isVerified value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isVerified
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreateEmail202506
     */
    public function setIsVerified(?bool $isVerified = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVerified) && !is_bool($isVerified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVerified, true), gettype($isVerified)), __LINE__);
        }
        if (is_null($isVerified) || (is_array($isVerified) && empty($isVerified))) {
            unset($this->isVerified);
        } else {
            $this->isVerified = $isVerified;
        }
        
        return $this;
    }
}
