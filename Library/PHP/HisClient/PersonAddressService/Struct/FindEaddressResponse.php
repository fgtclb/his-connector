<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findEaddressResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindEaddressResponse extends AbstractStructBase
{
    /**
     * The eaddressInfos
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfosType
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfosType $eaddressInfos;
    /**
     * Constructor method for findEaddressResponse
     * @uses FindEaddressResponse::setEaddressInfos()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfosType $eaddressInfos
     */
    public function __construct(\FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfosType $eaddressInfos)
    {
        $this
            ->setEaddressInfos($eaddressInfos);
    }
    /**
     * Get eaddressInfos value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfosType
     */
    public function getEaddressInfos(): \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfosType
    {
        return $this->eaddressInfos;
    }
    /**
     * Set eaddressInfos value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfosType $eaddressInfos
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindEaddressResponse
     */
    public function setEaddressInfos(\FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfosType $eaddressInfos): self
    {
        $this->eaddressInfos = $eaddressInfos;
        
        return $this;
    }
}
