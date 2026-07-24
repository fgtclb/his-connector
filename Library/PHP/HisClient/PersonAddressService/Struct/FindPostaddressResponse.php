<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findPostaddressResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindPostaddressResponse extends AbstractStructBase
{
    /**
     * The postaddressInfos
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfosType
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfosType $postaddressInfos;
    /**
     * Constructor method for findPostaddressResponse
     * @uses FindPostaddressResponse::setPostaddressInfos()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfosType $postaddressInfos
     */
    public function __construct(\FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfosType $postaddressInfos)
    {
        $this
            ->setPostaddressInfos($postaddressInfos);
    }
    /**
     * Get postaddressInfos value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfosType
     */
    public function getPostaddressInfos(): \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfosType
    {
        return $this->postaddressInfos;
    }
    /**
     * Set postaddressInfos value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfosType $postaddressInfos
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddressResponse
     */
    public function setPostaddressInfos(\FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfosType $postaddressInfos): self
    {
        $this->postaddressInfos = $postaddressInfos;
        
        return $this;
    }
}
