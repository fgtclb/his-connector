<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchBuildingResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchBuildingResponse extends AbstractStructBase
{
    /**
     * The searchedBuildings
     * @var \FGTCLB\HisClient\FacilityService\Struct\SearchedBuildingsType
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\SearchedBuildingsType $searchedBuildings;
    /**
     * Constructor method for searchBuildingResponse
     * @uses SearchBuildingResponse::setSearchedBuildings()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SearchedBuildingsType $searchedBuildings
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\SearchedBuildingsType $searchedBuildings)
    {
        $this
            ->setSearchedBuildings($searchedBuildings);
    }
    /**
     * Get searchedBuildings value
     * @return \FGTCLB\HisClient\FacilityService\Struct\SearchedBuildingsType
     */
    public function getSearchedBuildings(): \FGTCLB\HisClient\FacilityService\Struct\SearchedBuildingsType
    {
        return $this->searchedBuildings;
    }
    /**
     * Set searchedBuildings value
     * @param \FGTCLB\HisClient\FacilityService\Struct\SearchedBuildingsType $searchedBuildings
     * @return \FGTCLB\HisClient\FacilityService\Struct\SearchBuildingResponse
     */
    public function setSearchedBuildings(\FGTCLB\HisClient\FacilityService\Struct\SearchedBuildingsType $searchedBuildings): self
    {
        $this->searchedBuildings = $searchedBuildings;
        
        return $this;
    }
}
