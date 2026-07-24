<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLocationFromAffiliationResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetLocationFromAffiliationResponse extends AbstractStructBase
{
    /**
     * The location
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationDto|null
     */
    protected ?\FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationDto $location = null;
    /**
     * Constructor method for getLocationFromAffiliationResponse
     * @uses GetLocationFromAffiliationResponse::setLocation()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationDto $location
     */
    public function __construct(?\FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationDto $location = null)
    {
        $this
            ->setLocation($location);
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\GetLocationFromAffiliationResponse
     */
    public function setLocation(?\FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationDto $location = null): self
    {
        $this->location = $location;
        
        return $this;
    }
}
