<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findVerifiedEmailsResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindVerifiedEmailsResponse extends AbstractStructBase
{
    /**
     * The eaddressInfos
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfosType
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfosType $eaddressInfos;
    /**
     * Constructor method for findVerifiedEmailsResponse
     * @uses FindVerifiedEmailsResponse::setEaddressInfos()
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindVerifiedEmailsResponse
     */
    public function setEaddressInfos(\FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfosType $eaddressInfos): self
    {
        $this->eaddressInfos = $eaddressInfos;
        
        return $this;
    }
}
