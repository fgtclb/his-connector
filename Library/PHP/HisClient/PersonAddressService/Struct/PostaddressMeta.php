<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PostaddressMeta Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PostaddressMeta extends AddressMeta
{
    /**
     * The postaddress
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1 $postaddress;
    /**
     * Constructor method for PostaddressMeta
     * @uses PostaddressMeta::setPostaddress()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1 $postaddress
     */
    public function __construct(\FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1 $postaddress)
    {
        $this
            ->setPostaddress($postaddress);
    }
    /**
     * Get postaddress value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1
     */
    public function getPostaddress(): \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1
    {
        return $this->postaddress;
    }
    /**
     * Set postaddress value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1 $postaddress
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta
     */
    public function setPostaddress(\FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1 $postaddress): self
    {
        $this->postaddress = $postaddress;
        
        return $this;
    }
}
