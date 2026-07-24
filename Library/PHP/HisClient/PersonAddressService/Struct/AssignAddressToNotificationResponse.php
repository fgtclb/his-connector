<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for assignAddressToNotificationResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AssignAddressToNotificationResponse extends AbstractStructBase
{
    /**
     * The addressId
     * Meta information extracted from the WSDL
     * - documentation: If the notification category was removed from another address, this will be the ID of that address. Null otherwise.
     * - nillable: true
     * @var int|null
     */
    protected ?int $addressId = null;
    /**
     * Constructor method for assignAddressToNotificationResponse
     * @uses AssignAddressToNotificationResponse::setAddressId()
     * @param int $addressId
     */
    public function __construct(?int $addressId = null)
    {
        $this
            ->setAddressId($addressId);
    }
    /**
     * Get addressId value
     * @return int|null
     */
    public function getAddressId(): ?int
    {
        return $this->addressId;
    }
    /**
     * Set addressId value
     * @param int $addressId
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AssignAddressToNotificationResponse
     */
    public function setAddressId(?int $addressId = null): self
    {
        // validation for constraint: int
        if (!is_null($addressId) && !(is_int($addressId) || ctype_digit($addressId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressId, true), gettype($addressId)), __LINE__);
        }
        $this->addressId = $addressId;
        
        return $this;
    }
}
