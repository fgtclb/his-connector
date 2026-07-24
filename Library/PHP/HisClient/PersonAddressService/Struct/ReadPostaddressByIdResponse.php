<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readPostaddressByIdResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadPostaddressByIdResponse extends AbstractStructBase
{
    /**
     * The postaddress
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta|null
     */
    protected ?\FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta $postaddress = null;
    /**
     * Constructor method for readPostaddressByIdResponse
     * @uses ReadPostaddressByIdResponse::setPostaddress()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta $postaddress
     */
    public function __construct(?\FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta $postaddress = null)
    {
        $this
            ->setPostaddress($postaddress);
    }
    /**
     * Get postaddress value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta|null
     */
    public function getPostaddress(): ?\FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta
    {
        return $this->postaddress;
    }
    /**
     * Set postaddress value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta $postaddress
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReadPostaddressByIdResponse
     */
    public function setPostaddress(?\FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta $postaddress = null): self
    {
        $this->postaddress = $postaddress;
        
        return $this;
    }
}
