<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updatePhone Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdatePhone extends AbstractStructBase
{
    /**
     * The addressId
     * @var int
     */
    protected int $addressId;
    /**
     * The phone
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Phone
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\Phone $phone;
    /**
     * Constructor method for updatePhone
     * @uses UpdatePhone::setAddressId()
     * @uses UpdatePhone::setPhone()
     * @param int $addressId
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Phone $phone
     */
    public function __construct(int $addressId, \FGTCLB\HisClient\PersonAddressService\Struct\Phone $phone)
    {
        $this
            ->setAddressId($addressId)
            ->setPhone($phone);
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdatePhone
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
     * Get phone value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Phone
     */
    public function getPhone(): \FGTCLB\HisClient\PersonAddressService\Struct\Phone
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Phone $phone
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdatePhone
     */
    public function setPhone(\FGTCLB\HisClient\PersonAddressService\Struct\Phone $phone): self
    {
        $this->phone = $phone;
        
        return $this;
    }
}
