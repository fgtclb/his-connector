<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readBuilding202106Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadBuilding202106Response extends AbstractStructBase
{
    /**
     * The building
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\FacilityService\Struct\Building202106|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\Building202106 $building = null;
    /**
     * Constructor method for readBuilding202106Response
     * @uses ReadBuilding202106Response::setBuilding()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Building202106 $building
     */
    public function __construct(?\FGTCLB\HisClient\FacilityService\Struct\Building202106 $building = null)
    {
        $this
            ->setBuilding($building);
    }
    /**
     * Get building value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202106|null
     */
    public function getBuilding(): ?\FGTCLB\HisClient\FacilityService\Struct\Building202106
    {
        return $this->building;
    }
    /**
     * Set building value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Building202106 $building
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadBuilding202106Response
     */
    public function setBuilding(?\FGTCLB\HisClient\FacilityService\Struct\Building202106 $building = null): self
    {
        $this->building = $building;
        
        return $this;
    }
}
