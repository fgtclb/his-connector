<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PostAddressWithNotification Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PostAddressWithNotification extends PostAddressWithNillablePostcode
{
    /**
     * The notificationCategories
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\AddressService\Struct\NotificationCategoriesType|null
     */
    protected ?\FGTCLB\HisClient\AddressService\Struct\NotificationCategoriesType $notificationCategories = null;
    /**
     * Constructor method for PostAddressWithNotification
     * @uses PostAddressWithNotification::setNotificationCategories()
     * @param \FGTCLB\HisClient\AddressService\Struct\NotificationCategoriesType $notificationCategories
     */
    public function __construct(?\FGTCLB\HisClient\AddressService\Struct\NotificationCategoriesType $notificationCategories = null)
    {
        $this
            ->setNotificationCategories($notificationCategories);
    }
    /**
     * Get notificationCategories value
     * @return \FGTCLB\HisClient\AddressService\Struct\NotificationCategoriesType|null
     */
    public function getNotificationCategories(): ?\FGTCLB\HisClient\AddressService\Struct\NotificationCategoriesType
    {
        return $this->notificationCategories;
    }
    /**
     * Set notificationCategories value
     * @param \FGTCLB\HisClient\AddressService\Struct\NotificationCategoriesType $notificationCategories
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNotification
     */
    public function setNotificationCategories(?\FGTCLB\HisClient\AddressService\Struct\NotificationCategoriesType $notificationCategories = null): self
    {
        $this->notificationCategories = $notificationCategories;
        
        return $this;
    }
}
