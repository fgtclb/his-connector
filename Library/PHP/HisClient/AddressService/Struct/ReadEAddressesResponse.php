<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readEAddressesResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadEAddressesResponse extends AbstractStructBase
{
    /**
     * The eAdresses
     * @var \FGTCLB\HisClient\AddressService\Struct\EAdressesType
     */
    protected \FGTCLB\HisClient\AddressService\Struct\EAdressesType $eAdresses;
    /**
     * Constructor method for readEAddressesResponse
     * @uses ReadEAddressesResponse::setEAdresses()
     * @param \FGTCLB\HisClient\AddressService\Struct\EAdressesType $eAdresses
     */
    public function __construct(\FGTCLB\HisClient\AddressService\Struct\EAdressesType $eAdresses)
    {
        $this
            ->setEAdresses($eAdresses);
    }
    /**
     * Get eAdresses value
     * @return \FGTCLB\HisClient\AddressService\Struct\EAdressesType
     */
    public function getEAdresses(): \FGTCLB\HisClient\AddressService\Struct\EAdressesType
    {
        return $this->eAdresses;
    }
    /**
     * Set eAdresses value
     * @param \FGTCLB\HisClient\AddressService\Struct\EAdressesType $eAdresses
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadEAddressesResponse
     */
    public function setEAdresses(\FGTCLB\HisClient\AddressService\Struct\EAdressesType $eAdresses): self
    {
        $this->eAdresses = $eAdresses;
        
        return $this;
    }
}
