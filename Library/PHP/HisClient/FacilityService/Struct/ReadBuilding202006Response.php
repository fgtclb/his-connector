<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readBuilding202006Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadBuilding202006Response extends AbstractStructBase
{
    /**
     * The building
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\FacilityService\Struct\Building202006|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\Building202006 $building = null;
    /**
     * Constructor method for readBuilding202006Response
     * @uses ReadBuilding202006Response::setBuilding()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Building202006 $building
     */
    public function __construct(?\FGTCLB\HisClient\FacilityService\Struct\Building202006 $building = null)
    {
        $this
            ->setBuilding($building);
    }
    /**
     * Get building value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202006|null
     */
    public function getBuilding(): ?\FGTCLB\HisClient\FacilityService\Struct\Building202006
    {
        return $this->building;
    }
    /**
     * Set building value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Building202006 $building
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadBuilding202006Response
     */
    public function setBuilding(?\FGTCLB\HisClient\FacilityService\Struct\Building202006 $building = null): self
    {
        $this->building = $building;
        
        return $this;
    }
}
