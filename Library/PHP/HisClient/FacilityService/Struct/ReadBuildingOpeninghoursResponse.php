<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readBuildingOpeninghoursResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadBuildingOpeninghoursResponse extends AbstractStructBase
{
    /**
     * The openinghours
     * Meta information extracted from the WSDL
     * - documentation: The openinghours entries for the requested building.
     * @var \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType $openinghours;
    /**
     * Constructor method for readBuildingOpeninghoursResponse
     * @uses ReadBuildingOpeninghoursResponse::setOpeninghours()
     * @param \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType $openinghours
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType $openinghours)
    {
        $this
            ->setOpeninghours($openinghours);
    }
    /**
     * Get openinghours value
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType
     */
    public function getOpeninghours(): \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType
    {
        return $this->openinghours;
    }
    /**
     * Set openinghours value
     * @param \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType $openinghours
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadBuildingOpeninghoursResponse
     */
    public function setOpeninghours(\FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType $openinghours): self
    {
        $this->openinghours = $openinghours;
        
        return $this;
    }
}
