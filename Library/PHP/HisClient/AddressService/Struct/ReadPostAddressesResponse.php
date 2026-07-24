<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readPostAddressesResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadPostAddressesResponse extends AbstractStructBase
{
    /**
     * The postAdresses
     * @var \FGTCLB\HisClient\AddressService\Struct\PostAdressesType
     */
    protected \FGTCLB\HisClient\AddressService\Struct\PostAdressesType $postAdresses;
    /**
     * Constructor method for readPostAddressesResponse
     * @uses ReadPostAddressesResponse::setPostAdresses()
     * @param \FGTCLB\HisClient\AddressService\Struct\PostAdressesType $postAdresses
     */
    public function __construct(\FGTCLB\HisClient\AddressService\Struct\PostAdressesType $postAdresses)
    {
        $this
            ->setPostAdresses($postAdresses);
    }
    /**
     * Get postAdresses value
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAdressesType
     */
    public function getPostAdresses(): \FGTCLB\HisClient\AddressService\Struct\PostAdressesType
    {
        return $this->postAdresses;
    }
    /**
     * Set postAdresses value
     * @param \FGTCLB\HisClient\AddressService\Struct\PostAdressesType $postAdresses
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadPostAddressesResponse
     */
    public function setPostAdresses(\FGTCLB\HisClient\AddressService\Struct\PostAdressesType $postAdresses): self
    {
        $this->postAdresses = $postAdresses;
        
        return $this;
    }
}
