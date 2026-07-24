<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updatePostaddress Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdatePostaddress extends AbstractStructBase
{
    /**
     * The addressId
     * @var int
     */
    protected int $addressId;
    /**
     * The postaddress
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1 $postaddress;
    /**
     * Constructor method for updatePostaddress
     * @uses UpdatePostaddress::setAddressId()
     * @uses UpdatePostaddress::setPostaddress()
     * @param int $addressId
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1 $postaddress
     */
    public function __construct(int $addressId, \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1 $postaddress)
    {
        $this
            ->setAddressId($addressId)
            ->setPostaddress($postaddress);
    }
    /**
     * Get addressId value
     * @return int
     */
    public function getAddressId(): int
    {
        return $this->addressId;
    }
    /**
     * Set addressId value
     * @param int $addressId
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdatePostaddress
     */
    public function setAddressId(int $addressId): self
    {
        // validation for constraint: int
        if (!is_null($addressId) && !(is_int($addressId) || ctype_digit($addressId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressId, true), gettype($addressId)), __LINE__);
        }
        $this->addressId = $addressId;
        
        return $this;
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdatePostaddress
     */
    public function setPostaddress(\FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1 $postaddress): self
    {
        $this->postaddress = $postaddress;
        
        return $this;
    }
}
