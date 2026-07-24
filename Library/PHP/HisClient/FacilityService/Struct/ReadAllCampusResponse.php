<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAllCampusResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAllCampusResponse extends AbstractStructBase
{
    /**
     * The campus
     * @var \FGTCLB\HisClient\FacilityService\Struct\CampusType
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\CampusType $campus;
    /**
     * Constructor method for readAllCampusResponse
     * @uses ReadAllCampusResponse::setCampus()
     * @param \FGTCLB\HisClient\FacilityService\Struct\CampusType $campus
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\CampusType $campus)
    {
        $this
            ->setCampus($campus);
    }
    /**
     * Get campus value
     * @return \FGTCLB\HisClient\FacilityService\Struct\CampusType
     */
    public function getCampus(): \FGTCLB\HisClient\FacilityService\Struct\CampusType
    {
        return $this->campus;
    }
    /**
     * Set campus value
     * @param \FGTCLB\HisClient\FacilityService\Struct\CampusType $campus
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadAllCampusResponse
     */
    public function setCampus(\FGTCLB\HisClient\FacilityService\Struct\CampusType $campus): self
    {
        $this->campus = $campus;
        
        return $this;
    }
}
