<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchAffiliationByIdResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchAffiliationByIdResponse extends AbstractStructBase
{
    /**
     * The searchedAffiliations
     * @var \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationsType
     */
    protected \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationsType $searchedAffiliations;
    /**
     * Constructor method for searchAffiliationByIdResponse
     * @uses SearchAffiliationByIdResponse::setSearchedAffiliations()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationsType $searchedAffiliations
     */
    public function __construct(\FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationsType $searchedAffiliations)
    {
        $this
            ->setSearchedAffiliations($searchedAffiliations);
    }
    /**
     * Get searchedAffiliations value
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationsType
     */
    public function getSearchedAffiliations(): \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationsType
    {
        return $this->searchedAffiliations;
    }
    /**
     * Set searchedAffiliations value
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationsType $searchedAffiliations
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationByIdResponse
     */
    public function setSearchedAffiliations(\FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationsType $searchedAffiliations): self
    {
        $this->searchedAffiliations = $searchedAffiliations;
        
        return $this;
    }
}
