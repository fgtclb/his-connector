<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAllBuildingsResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAllBuildingsResponse extends AbstractStructBase
{
    /**
     * The buildings
     * @var \FGTCLB\HisClient\FacilityService\Struct\BuildingsType
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\BuildingsType $buildings;
    /**
     * Constructor method for readAllBuildingsResponse
     * @uses ReadAllBuildingsResponse::setBuildings()
     * @param \FGTCLB\HisClient\FacilityService\Struct\BuildingsType $buildings
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\BuildingsType $buildings)
    {
        $this
            ->setBuildings($buildings);
    }
    /**
     * Get buildings value
     * @return \FGTCLB\HisClient\FacilityService\Struct\BuildingsType
     */
    public function getBuildings(): \FGTCLB\HisClient\FacilityService\Struct\BuildingsType
    {
        return $this->buildings;
    }
    /**
     * Set buildings value
     * @param \FGTCLB\HisClient\FacilityService\Struct\BuildingsType $buildings
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadAllBuildingsResponse
     */
    public function setBuildings(\FGTCLB\HisClient\FacilityService\Struct\BuildingsType $buildings): self
    {
        $this->buildings = $buildings;
        
        return $this;
    }
}
