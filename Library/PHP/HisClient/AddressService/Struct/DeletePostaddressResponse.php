<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deletePostaddressResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeletePostaddressResponse extends AbstractStructBase
{
    /**
     * The isDeleted
     * @var bool
     */
    protected bool $isDeleted;
    /**
     * Constructor method for deletePostaddressResponse
     * @uses DeletePostaddressResponse::setIsDeleted()
     * @param bool $isDeleted
     */
    public function __construct(bool $isDeleted)
    {
        $this
            ->setIsDeleted($isDeleted);
    }
    /**
     * Get isDeleted value
     * @return bool
     */
    public function getIsDeleted(): bool
    {
        return $this->isDeleted;
    }
    /**
     * Set isDeleted value
     * @param bool $isDeleted
     * @return \FGTCLB\HisClient\AddressService\Struct\DeletePostaddressResponse
     */
    public function setIsDeleted(bool $isDeleted): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeleted) && !is_bool($isDeleted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeleted, true), gettype($isDeleted)), __LINE__);
        }
        $this->isDeleted = $isDeleted;
        
        return $this;
    }
}
