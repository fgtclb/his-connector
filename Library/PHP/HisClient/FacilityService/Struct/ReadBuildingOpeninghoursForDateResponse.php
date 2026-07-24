<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readBuildingOpeninghoursForDateResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadBuildingOpeninghoursForDateResponse extends AbstractStructBase
{
    /**
     * The timeslots
     * Meta information extracted from the WSDL
     * - documentation: The timeslots indicating when the respective building is open.
     * @var \FGTCLB\HisClient\FacilityService\Struct\TimeslotsType
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\TimeslotsType $timeslots;
    /**
     * Constructor method for readBuildingOpeninghoursForDateResponse
     * @uses ReadBuildingOpeninghoursForDateResponse::setTimeslots()
     * @param \FGTCLB\HisClient\FacilityService\Struct\TimeslotsType $timeslots
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\TimeslotsType $timeslots)
    {
        $this
            ->setTimeslots($timeslots);
    }
    /**
     * Get timeslots value
     * @return \FGTCLB\HisClient\FacilityService\Struct\TimeslotsType
     */
    public function getTimeslots(): \FGTCLB\HisClient\FacilityService\Struct\TimeslotsType
    {
        return $this->timeslots;
    }
    /**
     * Set timeslots value
     * @param \FGTCLB\HisClient\FacilityService\Struct\TimeslotsType $timeslots
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadBuildingOpeninghoursForDateResponse
     */
    public function setTimeslots(\FGTCLB\HisClient\FacilityService\Struct\TimeslotsType $timeslots): self
    {
        $this->timeslots = $timeslots;
        
        return $this;
    }
}
