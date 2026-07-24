<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deletePostaddress Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeletePostaddress extends AbstractStructBase
{
    /**
     * The postaddressId
     * @var int
     */
    protected int $postaddressId;
    /**
     * Constructor method for deletePostaddress
     * @uses DeletePostaddress::setPostaddressId()
     * @param int $postaddressId
     */
    public function __construct(int $postaddressId)
    {
        $this
            ->setPostaddressId($postaddressId);
    }
    /**
     * Get postaddressId value
     * @return int
     */
    public function getPostaddressId(): int
    {
        return $this->postaddressId;
    }
    /**
     * Set postaddressId value
     * @param int $postaddressId
     * @return \FGTCLB\HisClient\AddressService\Struct\DeletePostaddress
     */
    public function setPostaddressId(int $postaddressId): self
    {
        // validation for constraint: int
        if (!is_null($postaddressId) && !(is_int($postaddressId) || ctype_digit($postaddressId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($postaddressId, true), gettype($postaddressId)), __LINE__);
        }
        $this->postaddressId = $postaddressId;
        
        return $this;
    }
}
