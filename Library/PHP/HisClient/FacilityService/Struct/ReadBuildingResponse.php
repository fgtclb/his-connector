<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readBuildingResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadBuildingResponse extends AbstractStructBase
{
    /**
     * The building
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\FacilityService\Struct\Building|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\Building $building = null;
    /**
     * Constructor method for readBuildingResponse
     * @uses ReadBuildingResponse::setBuilding()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Building $building
     */
    public function __construct(?\FGTCLB\HisClient\FacilityService\Struct\Building $building = null)
    {
        $this
            ->setBuilding($building);
    }
    /**
     * Get building value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building|null
     */
    public function getBuilding(): ?\FGTCLB\HisClient\FacilityService\Struct\Building
    {
        return $this->building;
    }
    /**
     * Set building value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Building $building
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadBuildingResponse
     */
    public function setBuilding(?\FGTCLB\HisClient\FacilityService\Struct\Building $building = null): self
    {
        $this->building = $building;
        
        return $this;
    }
}
