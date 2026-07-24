<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Affiliation60 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Affiliation60 extends Affiliation
{
    /**
     * The eaddresses
     * @var \FGTCLB\HisClient\PersonOrgunitService\Struct\EaddressesType_1
     */
    protected \FGTCLB\HisClient\PersonOrgunitService\Struct\EaddressesType_1 $eaddresses;
    /**
     * The location
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationDto|null
     */
    protected ?\FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationDto $location = null;
    /**
     * Constructor method for Affiliation60
     * @uses Affiliation60::setEaddresses()
     * @uses Affiliation60::setLocation()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\EaddressesType_1 $eaddresses
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationDto $location
     */
    public function __construct(\FGTCLB\HisClient\PersonOrgunitService\Struct\EaddressesType_1 $eaddresses, ?\FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationDto $location = null)
    {
        $this
            ->setEaddresses($eaddresses)
            ->setLocation($location);
    }
    /**
     * Get eaddresses value
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\EaddressesType_1
     */
    public function getEaddresses(): \FGTCLB\HisClient\PersonOrgunitService\Struct\EaddressesType_1
    {
        return $this->eaddresses;
    }
    /**
     * Set eaddresses value
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\EaddressesType_1 $eaddresses
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation60
     */
    public function setEaddresses(\FGTCLB\HisClient\PersonOrgunitService\Struct\EaddressesType_1 $eaddresses): self
    {
        $this->eaddresses = $eaddresses;
        
        return $this;
    }
    /**
     * Get location value
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationDto|null
     */
    public function getLocation(): ?\FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationDto
    {
        return $this->location;
    }
    /**
     * Set location value
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationDto $location
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation60
     */
    public function setLocation(?\FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationDto $location = null): self
    {
        $this->location = $location;
        
        return $this;
    }
}
