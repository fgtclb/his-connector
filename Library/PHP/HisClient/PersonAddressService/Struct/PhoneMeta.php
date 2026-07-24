<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneMeta Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PhoneMeta extends AddressMeta
{
    /**
     * The phone
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Phone
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\Phone $phone;
    /**
     * Constructor method for PhoneMeta
     * @uses PhoneMeta::setPhone()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Phone $phone
     */
    public function __construct(\FGTCLB\HisClient\PersonAddressService\Struct\Phone $phone)
    {
        $this
            ->setPhone($phone);
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta
     */
    public function setPhone(\FGTCLB\HisClient\PersonAddressService\Struct\Phone $phone): self
    {
        $this->phone = $phone;
        
        return $this;
    }
}
