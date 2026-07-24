<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteBuildingOpeninghoursEntry Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteBuildingOpeninghoursEntry extends AbstractStructBase
{
    /**
     * The openinghoursId
     * @var int
     */
    protected int $openinghoursId;
    /**
     * Constructor method for deleteBuildingOpeninghoursEntry
     * @uses DeleteBuildingOpeninghoursEntry::setOpeninghoursId()
     * @param int $openinghoursId
     */
    public function __construct(int $openinghoursId)
    {
        $this
            ->setOpeninghoursId($openinghoursId);
    }
    /**
     * Get openinghoursId value
     * @return int
     */
    public function getOpeninghoursId(): int
    {
        return $this->openinghoursId;
    }
    /**
     * Set openinghoursId value
     * @param int $openinghoursId
     * @return \FGTCLB\HisClient\FacilityService\Struct\DeleteBuildingOpeninghoursEntry
     */
    public function setOpeninghoursId(int $openinghoursId): self
    {
        // validation for constraint: int
        if (!is_null($openinghoursId) && !(is_int($openinghoursId) || ctype_digit($openinghoursId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($openinghoursId, true), gettype($openinghoursId)), __LINE__);
        }
        $this->openinghoursId = $openinghoursId;
        
        return $this;
    }
}
