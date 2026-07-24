<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createEmail Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateEmail extends AbstractStructBase
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
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Email_1
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\Email_1 $email;
    /**
     * Constructor method for createEmail
     * @uses CreateEmail::setPersonId()
     * @uses CreateEmail::setNotificationCategory()
     * @uses CreateEmail::setEmail()
     * @param int $personId
     * @param string $notificationCategory
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Email_1 $email
     */
    public function __construct(int $personId, string $notificationCategory, \FGTCLB\HisClient\PersonAddressService\Struct\Email_1 $email)
    {
        $this
            ->setPersonId($personId)
            ->setNotificationCategory($notificationCategory)
            ->setEmail($email);
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreateEmail
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreateEmail
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Email_1
     */
    public function getEmail(): \FGTCLB\HisClient\PersonAddressService\Struct\Email_1
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Email_1 $email
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreateEmail
     */
    public function setEmail(\FGTCLB\HisClient\PersonAddressService\Struct\Email_1 $email): self
    {
        $this->email = $email;
        
        return $this;
    }
}
