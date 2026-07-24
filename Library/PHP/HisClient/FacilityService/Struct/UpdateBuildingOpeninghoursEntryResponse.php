<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateBuildingOpeninghoursEntryResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateBuildingOpeninghoursEntryResponse extends AbstractStructBase
{
    /**
     * The updated
     * Meta information extracted from the WSDL
     * - documentation: Always 'true' if no exception occurred.
     * @var bool
     */
    protected bool $updated;
    /**
     * Constructor method for updateBuildingOpeninghoursEntryResponse
     * @uses UpdateBuildingOpeninghoursEntryResponse::setUpdated()
     * @param bool $updated
     */
    public function __construct(bool $updated)
    {
        $this
            ->setUpdated($updated);
    }
    /**
     * Get updated value
     * @return bool
     */
    public function getUpdated(): bool
    {
        return $this->updated;
    }
    /**
     * Set updated value
     * @param bool $updated
     * @return \FGTCLB\HisClient\FacilityService\Struct\UpdateBuildingOpeninghoursEntryResponse
     */
    public function setUpdated(bool $updated): self
    {
        // validation for constraint: boolean
        if (!is_null($updated) && !is_bool($updated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($updated, true), gettype($updated)), __LINE__);
        }
        $this->updated = $updated;
        
        return $this;
    }
}
