<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findOrgUnit60Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindOrgUnit60Response extends AbstractStructBase
{
    /**
     * The searchedOrgunits
     * @var \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunitsType
     */
    protected \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunitsType $searchedOrgunits;
    /**
     * Constructor method for findOrgUnit60Response
     * @uses FindOrgUnit60Response::setSearchedOrgunits()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunitsType $searchedOrgunits
     */
    public function __construct(\FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunitsType $searchedOrgunits)
    {
        $this
            ->setSearchedOrgunits($searchedOrgunits);
    }
    /**
     * Get searchedOrgunits value
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunitsType
     */
    public function getSearchedOrgunits(): \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunitsType
    {
        return $this->searchedOrgunits;
    }
    /**
     * Set searchedOrgunits value
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunitsType $searchedOrgunits
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit60Response
     */
    public function setSearchedOrgunits(\FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunitsType $searchedOrgunits): self
    {
        $this->searchedOrgunits = $searchedOrgunits;
        
        return $this;
    }
}
