<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readCampus202112Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadCampus202112Response extends AbstractStructBase
{
    /**
     * The campus
     * @var \FGTCLB\HisClient\FacilityService\Struct\Campus202112
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\Campus202112 $campus;
    /**
     * Constructor method for readCampus202112Response
     * @uses ReadCampus202112Response::setCampus()
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadCampus202112Response
     */
    public function setCampus(\FGTCLB\HisClient\FacilityService\Struct\Campus202112 $campus): self
    {
        $this->campus = $campus;
        
        return $this;
    }
}
