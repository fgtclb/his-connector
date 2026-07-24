<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for removeNotificationCategoryFromAddress Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RemoveNotificationCategoryFromAddress extends AbstractStructBase
{
    /**
     * The addressId
     * @var int
     */
    protected int $addressId;
    /**
     * The notificationCategory
     * @var string
     */
    protected string $notificationCategory;
    /**
     * Constructor method for removeNotificationCategoryFromAddress
     * @uses RemoveNotificationCategoryFromAddress::setAddressId()
     * @uses RemoveNotificationCategoryFromAddress::setNotificationCategory()
     * @param int $addressId
     * @param string $notificationCategory
     */
    public function __construct(int $addressId, string $notificationCategory)
    {
        $this
            ->setAddressId($addressId)
            ->setNotificationCategory($notificationCategory);
    }
    /**
     * Get addressId value
     * @return int
     */
    public function getAddressId(): int
    {
        return $this->addressId;
    }
    /**
     * Set addressId value
     * @param int $addressId
     * @return \FGTCLB\HisClient\AddressService\Struct\RemoveNotificationCategoryFromAddress
     */
    public function setAddressId(int $addressId): self
    {
        // validation for constraint: int
        if (!is_null($addressId) && !(is_int($addressId) || ctype_digit($addressId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressId, true), gettype($addressId)), __LINE__);
        }
        $this->addressId = $addressId;
        
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
     * @return \FGTCLB\HisClient\AddressService\Struct\RemoveNotificationCategoryFromAddress
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
