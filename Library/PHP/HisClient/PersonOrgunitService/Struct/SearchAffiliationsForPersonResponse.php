<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchAffiliationsForPersonResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchAffiliationsForPersonResponse extends AbstractStructBase
{
    /**
     * The affiliations
     * @var \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationsType
     */
    protected \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationsType $affiliations;
    /**
     * Constructor method for searchAffiliationsForPersonResponse
     * @uses SearchAffiliationsForPersonResponse::setAffiliations()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationsType $affiliations
     */
    public function __construct(\FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationsType $affiliations)
    {
        $this
            ->setAffiliations($affiliations);
    }
    /**
     * Get affiliations value
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationsType
     */
    public function getAffiliations(): \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationsType
    {
        return $this->affiliations;
    }
    /**
     * Set affiliations value
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationsType $affiliations
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationsForPersonResponse
     */
    public function setAffiliations(\FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationsType $affiliations): self
    {
        $this->affiliations = $affiliations;
        
        return $this;
    }
}
