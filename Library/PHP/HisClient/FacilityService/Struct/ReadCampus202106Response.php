<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readCampus202106Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadCampus202106Response extends AbstractStructBase
{
    /**
     * The campus
     * @var \FGTCLB\HisClient\FacilityService\Struct\Campus202106
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\Campus202106 $campus;
    /**
     * Constructor method for readCampus202106Response
     * @uses ReadCampus202106Response::setCampus()
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadCampus202106Response
     */
    public function setCampus(\FGTCLB\HisClient\FacilityService\Struct\Campus202106 $campus): self
    {
        $this->campus = $campus;
        
        return $this;
    }
}
