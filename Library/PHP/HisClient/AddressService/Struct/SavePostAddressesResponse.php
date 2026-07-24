<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for savePostAddressesResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SavePostAddressesResponse extends AbstractStructBase
{
    /**
     * The postAddressIds
     * @var \FGTCLB\HisClient\AddressService\Struct\PostAddressIdsType
     */
    protected \FGTCLB\HisClient\AddressService\Struct\PostAddressIdsType $postAddressIds;
    /**
     * Constructor method for savePostAddressesResponse
     * @uses SavePostAddressesResponse::setPostAddressIds()
     * @param \FGTCLB\HisClient\AddressService\Struct\PostAddressIdsType $postAddressIds
     */
    public function __construct(\FGTCLB\HisClient\AddressService\Struct\PostAddressIdsType $postAddressIds)
    {
        $this
            ->setPostAddressIds($postAddressIds);
    }
    /**
     * Get postAddressIds value
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAddressIdsType
     */
    public function getPostAddressIds(): \FGTCLB\HisClient\AddressService\Struct\PostAddressIdsType
    {
        return $this->postAddressIds;
    }
    /**
     * Set postAddressIds value
     * @param \FGTCLB\HisClient\AddressService\Struct\PostAddressIdsType $postAddressIds
     * @return \FGTCLB\HisClient\AddressService\Struct\SavePostAddressesResponse
     */
    public function setPostAddressIds(\FGTCLB\HisClient\AddressService\Struct\PostAddressIdsType $postAddressIds): self
    {
        $this->postAddressIds = $postAddressIds;
        
        return $this;
    }
}
