<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAddressTagIdForPrivateResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAddressTagIdForPrivateResponse extends AbstractStructBase
{
    /**
     * The addressTagId
     * @var int
     */
    protected int $addressTagId;
    /**
     * Constructor method for readAddressTagIdForPrivateResponse
     * @uses ReadAddressTagIdForPrivateResponse::setAddressTagId()
     * @param int $addressTagId
     */
    public function __construct(int $addressTagId)
    {
        $this
            ->setAddressTagId($addressTagId);
    }
    /**
     * Get addressTagId value
     * @return int
     */
    public function getAddressTagId(): int
    {
        return $this->addressTagId;
    }
    /**
     * Set addressTagId value
     * @param int $addressTagId
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadAddressTagIdForPrivateResponse
     */
    public function setAddressTagId(int $addressTagId): self
    {
        // validation for constraint: int
        if (!is_null($addressTagId) && !(is_int($addressTagId) || ctype_digit($addressTagId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressTagId, true), gettype($addressTagId)), __LINE__);
        }
        $this->addressTagId = $addressTagId;
        
        return $this;
    }
}
