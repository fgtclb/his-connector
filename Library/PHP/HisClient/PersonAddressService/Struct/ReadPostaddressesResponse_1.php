<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readPostaddressesResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadPostaddressesResponse_1 extends AbstractStructBase
{
    /**
     * The postaddresses
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressesType_1
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressesType_1 $postaddresses;
    /**
     * Constructor method for readPostaddressesResponse
     * @uses ReadPostaddressesResponse_1::setPostaddresses()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressesType_1 $postaddresses
     */
    public function __construct(\FGTCLB\HisClient\PersonAddressService\Struct\PostaddressesType_1 $postaddresses)
    {
        $this
            ->setPostaddresses($postaddresses);
    }
    /**
     * Get postaddresses value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressesType_1
     */
    public function getPostaddresses(): \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressesType_1
    {
        return $this->postaddresses;
    }
    /**
     * Set postaddresses value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressesType_1 $postaddresses
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReadPostaddressesResponse_1
     */
    public function setPostaddresses(\FGTCLB\HisClient\PersonAddressService\Struct\PostaddressesType_1 $postaddresses): self
    {
        $this->postaddresses = $postaddresses;
        
        return $this;
    }
}
