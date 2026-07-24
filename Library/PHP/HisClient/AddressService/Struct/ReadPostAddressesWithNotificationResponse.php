<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readPostAddressesWithNotificationResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadPostAddressesWithNotificationResponse extends AbstractStructBase
{
    /**
     * The postAdressesWithNotification
     * @var \FGTCLB\HisClient\AddressService\Struct\PostAdressesWithNotificationType
     */
    protected \FGTCLB\HisClient\AddressService\Struct\PostAdressesWithNotificationType $postAdressesWithNotification;
    /**
     * Constructor method for readPostAddressesWithNotificationResponse
     * @uses ReadPostAddressesWithNotificationResponse::setPostAdressesWithNotification()
     * @param \FGTCLB\HisClient\AddressService\Struct\PostAdressesWithNotificationType $postAdressesWithNotification
     */
    public function __construct(\FGTCLB\HisClient\AddressService\Struct\PostAdressesWithNotificationType $postAdressesWithNotification)
    {
        $this
            ->setPostAdressesWithNotification($postAdressesWithNotification);
    }
    /**
     * Get postAdressesWithNotification value
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAdressesWithNotificationType
     */
    public function getPostAdressesWithNotification(): \FGTCLB\HisClient\AddressService\Struct\PostAdressesWithNotificationType
    {
        return $this->postAdressesWithNotification;
    }
    /**
     * Set postAdressesWithNotification value
     * @param \FGTCLB\HisClient\AddressService\Struct\PostAdressesWithNotificationType $postAdressesWithNotification
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadPostAddressesWithNotificationResponse
     */
    public function setPostAdressesWithNotification(\FGTCLB\HisClient\AddressService\Struct\PostAdressesWithNotificationType $postAdressesWithNotification): self
    {
        $this->postAdressesWithNotification = $postAdressesWithNotification;
        
        return $this;
    }
}
