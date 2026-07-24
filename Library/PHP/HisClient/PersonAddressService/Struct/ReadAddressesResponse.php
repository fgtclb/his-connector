<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAddressesResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAddressesResponse extends AbstractStructBase
{
    /**
     * The personAddressesByNotifications
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotificationsType
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotificationsType $personAddressesByNotifications;
    /**
     * Constructor method for readAddressesResponse
     * @uses ReadAddressesResponse::setPersonAddressesByNotifications()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotificationsType $personAddressesByNotifications
     */
    public function __construct(\FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotificationsType $personAddressesByNotifications)
    {
        $this
            ->setPersonAddressesByNotifications($personAddressesByNotifications);
    }
    /**
     * Get personAddressesByNotifications value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotificationsType
     */
    public function getPersonAddressesByNotifications(): \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotificationsType
    {
        return $this->personAddressesByNotifications;
    }
    /**
     * Set personAddressesByNotifications value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotificationsType $personAddressesByNotifications
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReadAddressesResponse
     */
    public function setPersonAddressesByNotifications(\FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotificationsType $personAddressesByNotifications): self
    {
        $this->personAddressesByNotifications = $personAddressesByNotifications;
        
        return $this;
    }
}
