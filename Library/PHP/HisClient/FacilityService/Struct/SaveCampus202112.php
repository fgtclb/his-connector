<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveCampus202112 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCampus202112 extends AbstractStructBase
{
    /**
     * The campus
     * @var \FGTCLB\HisClient\FacilityService\Struct\Campus202112
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\Campus202112 $campus;
    /**
     * Constructor method for saveCampus202112
     * @uses SaveCampus202112::setCampus()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Campus202112 $campus
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\Campus202112 $campus)
    {
        $this
            ->setCampus($campus);
    }
    /**
     * Get campus value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Campus202112
     */
    public function getCampus(): \FGTCLB\HisClient\FacilityService\Struct\Campus202112
    {
        return $this->campus;
    }
    /**
     * Set campus value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Campus202112 $campus
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveCampus202112
     */
    public function setCampus(\FGTCLB\HisClient\FacilityService\Struct\Campus202112 $campus): self
    {
        $this->campus = $campus;
        
        return $this;
    }
}
