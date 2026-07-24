<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readBuilding202112Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadBuilding202112Response extends AbstractStructBase
{
    /**
     * The building
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\FacilityService\Struct\Building202112|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\Building202112 $building = null;
    /**
     * Constructor method for readBuilding202112Response
     * @uses ReadBuilding202112Response::setBuilding()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Building202112 $building
     */
    public function __construct(?\FGTCLB\HisClient\FacilityService\Struct\Building202112 $building = null)
    {
        $this
            ->setBuilding($building);
    }
    /**
     * Get building value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202112|null
     */
    public function getBuilding(): ?\FGTCLB\HisClient\FacilityService\Struct\Building202112
    {
        return $this->building;
    }
    /**
     * Set building value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Building202112 $building
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadBuilding202112Response
     */
    public function setBuilding(?\FGTCLB\HisClient\FacilityService\Struct\Building202112 $building = null): self
    {
        $this->building = $building;
        
        return $this;
    }
}
