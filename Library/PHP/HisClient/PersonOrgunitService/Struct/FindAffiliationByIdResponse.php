<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findAffiliationByIdResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindAffiliationByIdResponse extends AbstractStructBase
{
    /**
     * The affiliation
     * @var \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation
     */
    protected \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation $affiliation;
    /**
     * Constructor method for findAffiliationByIdResponse
     * @uses FindAffiliationByIdResponse::setAffiliation()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation $affiliation
     */
    public function __construct(\FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation $affiliation)
    {
        $this
            ->setAffiliation($affiliation);
    }
    /**
     * Get affiliation value
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation
     */
    public function getAffiliation(): \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation
    {
        return $this->affiliation;
    }
    /**
     * Set affiliation value
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation $affiliation
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\FindAffiliationByIdResponse
     */
    public function setAffiliation(\FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation $affiliation): self
    {
        $this->affiliation = $affiliation;
        
        return $this;
    }
}
