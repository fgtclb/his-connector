<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAddressesByNotificationResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAddressesByNotificationResponse extends AbstractStructBase
{
    /**
     * The personAddresses
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses $personAddresses;
    /**
     * Constructor method for readAddressesByNotificationResponse
     * @uses ReadAddressesByNotificationResponse::setPersonAddresses()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses $personAddresses
     */
    public function __construct(\FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses $personAddresses)
    {
        $this
            ->setPersonAddresses($personAddresses);
    }
    /**
     * Get personAddresses value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses
     */
    public function getPersonAddresses(): \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses
    {
        return $this->personAddresses;
    }
    /**
     * Set personAddresses value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses $personAddresses
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReadAddressesByNotificationResponse
     */
    public function setPersonAddresses(\FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses $personAddresses): self
    {
        $this->personAddresses = $personAddresses;
        
        return $this;
    }
}
