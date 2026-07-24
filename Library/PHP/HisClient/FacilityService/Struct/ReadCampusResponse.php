<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readCampusResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadCampusResponse extends AbstractStructBase
{
    /**
     * The campus
     * @var \FGTCLB\HisClient\FacilityService\Struct\Campus
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\Campus $campus;
    /**
     * Constructor method for readCampusResponse
     * @uses ReadCampusResponse::setCampus()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Campus $campus
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\Campus $campus)
    {
        $this
            ->setCampus($campus);
    }
    /**
     * Get campus value
     * @return \FGTCLB\HisClient\FacilityService\Struct\Campus
     */
    public function getCampus(): \FGTCLB\HisClient\FacilityService\Struct\Campus
    {
        return $this->campus;
    }
    /**
     * Set campus value
     * @param \FGTCLB\HisClient\FacilityService\Struct\Campus $campus
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadCampusResponse
     */
    public function setCampus(\FGTCLB\HisClient\FacilityService\Struct\Campus $campus): self
    {
        $this->campus = $campus;
        
        return $this;
    }
}
