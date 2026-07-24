<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readBuildingOpeninghours Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadBuildingOpeninghours extends AbstractStructBase
{
    /**
     * The buildingId
     * Meta information extracted from the WSDL
     * - documentation: The ID of the building to which the openinghours entries should be requested.
     * @var int
     */
    protected int $buildingId;
    /**
     * Constructor method for readBuildingOpeninghours
     * @uses ReadBuildingOpeninghours::setBuildingId()
     * @param int $buildingId
     */
    public function __construct(int $buildingId)
    {
        $this
            ->setBuildingId($buildingId);
    }
    /**
     * Get buildingId value
     * @return int
     */
    public function getBuildingId(): int
    {
        return $this->buildingId;
    }
    /**
     * Set buildingId value
     * @param int $buildingId
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadBuildingOpeninghours
     */
    public function setBuildingId(int $buildingId): self
    {
        // validation for constraint: int
        if (!is_null($buildingId) && !(is_int($buildingId) || ctype_digit($buildingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($buildingId, true), gettype($buildingId)), __LINE__);
        }
        $this->buildingId = $buildingId;
        
        return $this;
    }
}
