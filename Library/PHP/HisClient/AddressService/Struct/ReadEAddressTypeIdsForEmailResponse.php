<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readEAddressTypeIdsForEmailResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadEAddressTypeIdsForEmailResponse extends AbstractStructBase
{
    /**
     * The eAddressTypeId
     * @var int
     */
    protected int $eAddressTypeId;
    /**
     * Constructor method for readEAddressTypeIdsForEmailResponse
     * @uses ReadEAddressTypeIdsForEmailResponse::setEAddressTypeId()
     * @param int $eAddressTypeId
     */
    public function __construct(int $eAddressTypeId)
    {
        $this
            ->setEAddressTypeId($eAddressTypeId);
    }
    /**
     * Get eAddressTypeId value
     * @return int
     */
    public function getEAddressTypeId(): int
    {
        return $this->eAddressTypeId;
    }
    /**
     * Set eAddressTypeId value
     * @param int $eAddressTypeId
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadEAddressTypeIdsForEmailResponse
     */
    public function setEAddressTypeId(int $eAddressTypeId): self
    {
        // validation for constraint: int
        if (!is_null($eAddressTypeId) && !(is_int($eAddressTypeId) || ctype_digit($eAddressTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($eAddressTypeId, true), gettype($eAddressTypeId)), __LINE__);
        }
        $this->eAddressTypeId = $eAddressTypeId;
        
        return $this;
    }
}
