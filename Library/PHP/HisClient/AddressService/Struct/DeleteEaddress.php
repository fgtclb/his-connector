<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteEaddress Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteEaddress extends AbstractStructBase
{
    /**
     * The eaddressId
     * @var int
     */
    protected int $eaddressId;
    /**
     * Constructor method for deleteEaddress
     * @uses DeleteEaddress::setEaddressId()
     * @param int $eaddressId
     */
    public function __construct(int $eaddressId)
    {
        $this
            ->setEaddressId($eaddressId);
    }
    /**
     * Get eaddressId value
     * @return int
     */
    public function getEaddressId(): int
    {
        return $this->eaddressId;
    }
    /**
     * Set eaddressId value
     * @param int $eaddressId
     * @return \FGTCLB\HisClient\AddressService\Struct\DeleteEaddress
     */
    public function setEaddressId(int $eaddressId): self
    {
        // validation for constraint: int
        if (!is_null($eaddressId) && !(is_int($eaddressId) || ctype_digit($eaddressId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($eaddressId, true), gettype($eaddressId)), __LINE__);
        }
        $this->eaddressId = $eaddressId;
        
        return $this;
    }
}
