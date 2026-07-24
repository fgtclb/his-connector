<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAddressesByNotification Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAddressesByNotification extends AbstractStructBase
{
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * The notificationCategory
     * Meta information extracted from the WSDL
     * - documentation: Filter for the addresses by notification category. See KeyvalueService with valueClass = 'NotificationCategoryValue'. Examples: COMA, ALU, ALUG, ALUK, ALUR, CA, COM, OFFICE, UP, DOSV
     * @var string
     */
    protected string $notificationCategory;
    /**
     * Constructor method for readAddressesByNotification
     * @uses ReadAddressesByNotification::setPersonId()
     * @uses ReadAddressesByNotification::setNotificationCategory()
     * @param int $personId
     * @param string $notificationCategory
     */
    public function __construct(int $personId, string $notificationCategory)
    {
        $this
            ->setPersonId($personId)
            ->setNotificationCategory($notificationCategory);
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReadAddressesByNotification
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReadAddressesByNotification
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
}
