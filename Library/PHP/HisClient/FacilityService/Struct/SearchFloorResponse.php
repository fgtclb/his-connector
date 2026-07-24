<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchFloorResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchFloorResponse extends AbstractStructBase
{
    /**
     * The searchedFloors
     * @var \FGTCLB\HisClient\FacilityService\Struct\SearchedFloorsType
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\SearchedFloorsType $searchedFloors;
    /**
     * Constructor method for searchFloorResponse
     * @uses SearchFloorResponse::setSearchedFloors()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SearchedFloorsType $searchedFloors
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\SearchedFloorsType $searchedFloors)
    {
        $this
            ->setSearchedFloors($searchedFloors);
    }
    /**
     * Get searchedFloors value
     * @return \FGTCLB\HisClient\FacilityService\Struct\SearchedFloorsType
     */
    public function getSearchedFloors(): \FGTCLB\HisClient\FacilityService\Struct\SearchedFloorsType
    {
        return $this->searchedFloors;
    }
    /**
     * Set searchedFloors value
     * @param \FGTCLB\HisClient\FacilityService\Struct\SearchedFloorsType $searchedFloors
     * @return \FGTCLB\HisClient\FacilityService\Struct\SearchFloorResponse
     */
    public function setSearchedFloors(\FGTCLB\HisClient\FacilityService\Struct\SearchedFloorsType $searchedFloors): self
    {
        $this->searchedFloors = $searchedFloors;
        
        return $this;
    }
}
