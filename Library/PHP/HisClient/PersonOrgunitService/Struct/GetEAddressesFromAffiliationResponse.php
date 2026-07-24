<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEAddressesFromAffiliationResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEAddressesFromAffiliationResponse extends AbstractStructBase
{
    /**
     * The eAddresses
     * @var \FGTCLB\HisClient\PersonOrgunitService\Struct\EAddressesType
     */
    protected \FGTCLB\HisClient\PersonOrgunitService\Struct\EAddressesType $eAddresses;
    /**
     * Constructor method for getEAddressesFromAffiliationResponse
     * @uses GetEAddressesFromAffiliationResponse::setEAddresses()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\EAddressesType $eAddresses
     */
    public function __construct(\FGTCLB\HisClient\PersonOrgunitService\Struct\EAddressesType $eAddresses)
    {
        $this
            ->setEAddresses($eAddresses);
    }
    /**
     * Get eAddresses value
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\EAddressesType
     */
    public function getEAddresses(): \FGTCLB\HisClient\PersonOrgunitService\Struct\EAddressesType
    {
        return $this->eAddresses;
    }
    /**
     * Set eAddresses value
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\EAddressesType $eAddresses
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\GetEAddressesFromAffiliationResponse
     */
    public function setEAddresses(\FGTCLB\HisClient\PersonOrgunitService\Struct\EAddressesType $eAddresses): self
    {
        $this->eAddresses = $eAddresses;
        
        return $this;
    }
}
