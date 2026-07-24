<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readEaddressesResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadEaddressesResponse_1 extends AbstractStructBase
{
    /**
     * The personEaddresses
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses $personEaddresses;
    /**
     * Constructor method for readEaddressesResponse
     * @uses ReadEaddressesResponse_1::setPersonEaddresses()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses $personEaddresses
     */
    public function __construct(\FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses $personEaddresses)
    {
        $this
            ->setPersonEaddresses($personEaddresses);
    }
    /**
     * Get personEaddresses value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses
     */
    public function getPersonEaddresses(): \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses
    {
        return $this->personEaddresses;
    }
    /**
     * Set personEaddresses value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses $personEaddresses
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReadEaddressesResponse_1
     */
    public function setPersonEaddresses(\FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses $personEaddresses): self
    {
        $this->personEaddresses = $personEaddresses;
        
        return $this;
    }
}
