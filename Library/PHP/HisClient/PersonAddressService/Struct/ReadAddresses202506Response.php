<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAddresses202506Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAddresses202506Response extends AbstractStructBase
{
    /**
     * The personAddressesByNotifications202506
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotifications202506Type
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotifications202506Type $personAddressesByNotifications202506;
    /**
     * Constructor method for readAddresses202506Response
     * @uses ReadAddresses202506Response::setPersonAddressesByNotifications202506()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotifications202506Type $personAddressesByNotifications202506
     */
    public function __construct(\FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotifications202506Type $personAddressesByNotifications202506)
    {
        $this
            ->setPersonAddressesByNotifications202506($personAddressesByNotifications202506);
    }
    /**
     * Get personAddressesByNotifications202506 value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotifications202506Type
     */
    public function getPersonAddressesByNotifications202506(): \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotifications202506Type
    {
        return $this->personAddressesByNotifications202506;
    }
    /**
     * Set personAddressesByNotifications202506 value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotifications202506Type $personAddressesByNotifications202506
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReadAddresses202506Response
     */
    public function setPersonAddressesByNotifications202506(\FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotifications202506Type $personAddressesByNotifications202506): self
    {
        $this->personAddressesByNotifications202506 = $personAddressesByNotifications202506;
        
        return $this;
    }
}
