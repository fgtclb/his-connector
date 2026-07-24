<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAddressesOfPersonWithNotificationCategoryResponse
 * Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAddressesOfPersonWithNotificationCategoryResponse extends AbstractStructBase
{
    /**
     * The addresses
     * @var \FGTCLB\HisClient\AddressService\Struct\AddressesType
     */
    protected \FGTCLB\HisClient\AddressService\Struct\AddressesType $addresses;
    /**
     * Constructor method for readAddressesOfPersonWithNotificationCategoryResponse
     * @uses ReadAddressesOfPersonWithNotificationCategoryResponse::setAddresses()
     * @param \FGTCLB\HisClient\AddressService\Struct\AddressesType $addresses
     */
    public function __construct(\FGTCLB\HisClient\AddressService\Struct\AddressesType $addresses)
    {
        $this
            ->setAddresses($addresses);
    }
    /**
     * Get addresses value
     * @return \FGTCLB\HisClient\AddressService\Struct\AddressesType
     */
    public function getAddresses(): \FGTCLB\HisClient\AddressService\Struct\AddressesType
    {
        return $this->addresses;
    }
    /**
     * Set addresses value
     * @param \FGTCLB\HisClient\AddressService\Struct\AddressesType $addresses
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadAddressesOfPersonWithNotificationCategoryResponse
     */
    public function setAddresses(\FGTCLB\HisClient\AddressService\Struct\AddressesType $addresses): self
    {
        $this->addresses = $addresses;
        
        return $this;
    }
}
