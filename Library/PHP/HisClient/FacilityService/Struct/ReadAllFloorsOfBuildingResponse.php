<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAllFloorsOfBuildingResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAllFloorsOfBuildingResponse extends AbstractStructBase
{
    /**
     * The floors
     * @var \FGTCLB\HisClient\FacilityService\Struct\FloorsType
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\FloorsType $floors;
    /**
     * Constructor method for readAllFloorsOfBuildingResponse
     * @uses ReadAllFloorsOfBuildingResponse::setFloors()
     * @param \FGTCLB\HisClient\FacilityService\Struct\FloorsType $floors
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\FloorsType $floors)
    {
        $this
            ->setFloors($floors);
    }
    /**
     * Get floors value
     * @return \FGTCLB\HisClient\FacilityService\Struct\FloorsType
     */
    public function getFloors(): \FGTCLB\HisClient\FacilityService\Struct\FloorsType
    {
        return $this->floors;
    }
    /**
     * Set floors value
     * @param \FGTCLB\HisClient\FacilityService\Struct\FloorsType $floors
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadAllFloorsOfBuildingResponse
     */
    public function setFloors(\FGTCLB\HisClient\FacilityService\Struct\FloorsType $floors): self
    {
        $this->floors = $floors;
        
        return $this;
    }
}
