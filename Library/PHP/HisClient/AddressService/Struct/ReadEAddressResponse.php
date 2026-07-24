<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readEAddressResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadEAddressResponse extends AbstractStructBase
{
    /**
     * The eAddress
     * @var \FGTCLB\HisClient\AddressService\Struct\EAddress
     */
    protected \FGTCLB\HisClient\AddressService\Struct\EAddress $eAddress;
    /**
     * Constructor method for readEAddressResponse
     * @uses ReadEAddressResponse::setEAddress()
     * @param \FGTCLB\HisClient\AddressService\Struct\EAddress $eAddress
     */
    public function __construct(\FGTCLB\HisClient\AddressService\Struct\EAddress $eAddress)
    {
        $this
            ->setEAddress($eAddress);
    }
    /**
     * Get eAddress value
     * @return \FGTCLB\HisClient\AddressService\Struct\EAddress
     */
    public function getEAddress(): \FGTCLB\HisClient\AddressService\Struct\EAddress
    {
        return $this->eAddress;
    }
    /**
     * Set eAddress value
     * @param \FGTCLB\HisClient\AddressService\Struct\EAddress $eAddress
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadEAddressResponse
     */
    public function setEAddress(\FGTCLB\HisClient\AddressService\Struct\EAddress $eAddress): self
    {
        $this->eAddress = $eAddress;
        
        return $this;
    }
}
