<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAddressesOfPersonWithNotificationCategory Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAddressesOfPersonWithNotificationCategory extends AbstractStructBase
{
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * The notificationCategory
     * @var string
     */
    protected string $notificationCategory;
    /**
     * Constructor method for readAddressesOfPersonWithNotificationCategory
     * @uses ReadAddressesOfPersonWithNotificationCategory::setPersonId()
     * @uses ReadAddressesOfPersonWithNotificationCategory::setNotificationCategory()
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
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadAddressesOfPersonWithNotificationCategory
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
     * @uses \FGTCLB\HisClient\AddressService\Enum\NotificationCategoryType::valueIsValid()
     * @uses \FGTCLB\HisClient\AddressService\Enum\NotificationCategoryType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $notificationCategory
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadAddressesOfPersonWithNotificationCategory
     */
    public function setNotificationCategory(string $notificationCategory): self
    {
        // validation for constraint: enumeration
        if (!\FGTCLB\HisClient\AddressService\Enum\NotificationCategoryType::valueIsValid($notificationCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \FGTCLB\HisClient\AddressService\Enum\NotificationCategoryType', is_array($notificationCategory) ? implode(', ', $notificationCategory) : var_export($notificationCategory, true), implode(', ', \FGTCLB\HisClient\AddressService\Enum\NotificationCategoryType::getValidValues())), __LINE__);
        }
        $this->notificationCategory = $notificationCategory;
        
        return $this;
    }
}
