<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteAddressResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteAddressResponse extends AbstractStructBase
{
    /**
     * The notificationCategories
     * Meta information extracted from the WSDL
     * - documentation: This list will contain all notification categories that the deleted address was still assigned to.
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType $notificationCategories;
    /**
     * Constructor method for deleteAddressResponse
     * @uses DeleteAddressResponse::setNotificationCategories()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType $notificationCategories
     */
    public function __construct(\FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType $notificationCategories)
    {
        $this
            ->setNotificationCategories($notificationCategories);
    }
    /**
     * Get notificationCategories value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType
     */
    public function getNotificationCategories(): \FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType
    {
        return $this->notificationCategories;
    }
    /**
     * Set notificationCategories value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType $notificationCategories
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\DeleteAddressResponse
     */
    public function setNotificationCategories(\FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType $notificationCategories): self
    {
        $this->notificationCategories = $notificationCategories;
        
        return $this;
    }
}
