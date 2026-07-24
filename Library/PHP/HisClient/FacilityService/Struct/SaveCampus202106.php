<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveCampus202106 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCampus202106 extends AbstractStructBase
{
    /**
     * The campus
     * @var \FGTCLB\HisClient\FacilityService\Struct\Campus202106
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\Campus202106 $campus;
    /**
     * Constructor method for saveCampus202106
     * @uses SaveCampus202106::setCampus()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Campus202106 $campus
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\Campus202106 $campus)
    {
        $this
            ->setCampus($campus);
    }
    /**
     * Get campus value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Campus202106
     */
    public function getCampus(): \FGTCLB\HisClient\FacilityService\Struct\Campus202106
    {
        return $this->campus;
    }
    /**
     * Set campus value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Campus202106 $campus
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveCampus202106
     */
    public function setCampus(\FGTCLB\HisClient\FacilityService\Struct\Campus202106 $campus): self
    {
        $this->campus = $campus;
        
        return $this;
    }
}
