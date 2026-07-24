<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readPostaddressResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadPostaddressResponse extends AbstractStructBase
{
    /**
     * The postAddress
     * @var \FGTCLB\HisClient\AddressService\Struct\PostAddress
     */
    protected \FGTCLB\HisClient\AddressService\Struct\PostAddress $postAddress;
    /**
     * Constructor method for readPostaddressResponse
     * @uses ReadPostaddressResponse::setPostAddress()
     * @param \FGTCLB\HisClient\AddressService\Struct\PostAddress $postAddress
     */
    public function __construct(\FGTCLB\HisClient\AddressService\Struct\PostAddress $postAddress)
    {
        $this
            ->setPostAddress($postAddress);
    }
    /**
     * Get postAddress value
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAddress
     */
    public function getPostAddress(): \FGTCLB\HisClient\AddressService\Struct\PostAddress
    {
        return $this->postAddress;
    }
    /**
     * Set postAddress value
     * @param \FGTCLB\HisClient\AddressService\Struct\PostAddress $postAddress
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadPostaddressResponse
     */
    public function setPostAddress(\FGTCLB\HisClient\AddressService\Struct\PostAddress $postAddress): self
    {
        $this->postAddress = $postAddress;
        
        return $this;
    }
}
