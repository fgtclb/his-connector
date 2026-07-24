<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateEmailResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateEmailResponse extends AbstractStructBase
{
    /**
     * The addressId
     * Meta information extracted from the WSDL
     * - documentation: The ID of the updated email address.
     * @var int
     */
    protected int $addressId;
    /**
     * Constructor method for updateEmailResponse
     * @uses UpdateEmailResponse::setAddressId()
     * @param int $addressId
     */
    public function __construct(int $addressId)
    {
        $this
            ->setAddressId($addressId);
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdateEmailResponse
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
}
