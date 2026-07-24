<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for removeLocationFromAffiliationResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RemoveLocationFromAffiliationResponse extends AbstractStructBase
{
    /**
     * The locationIsRemoved
     * @var bool
     */
    protected bool $locationIsRemoved;
    /**
     * Constructor method for removeLocationFromAffiliationResponse
     * @uses RemoveLocationFromAffiliationResponse::setLocationIsRemoved()
     * @param bool $locationIsRemoved
     */
    public function __construct(bool $locationIsRemoved)
    {
        $this
            ->setLocationIsRemoved($locationIsRemoved);
    }
    /**
     * Get locationIsRemoved value
     * @return bool
     */
    public function getLocationIsRemoved(): bool
    {
        return $this->locationIsRemoved;
    }
    /**
     * Set locationIsRemoved value
     * @param bool $locationIsRemoved
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\RemoveLocationFromAffiliationResponse
     */
    public function setLocationIsRemoved(bool $locationIsRemoved): self
    {
        // validation for constraint: boolean
        if (!is_null($locationIsRemoved) && !is_bool($locationIsRemoved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($locationIsRemoved, true), gettype($locationIsRemoved)), __LINE__);
        }
        $this->locationIsRemoved = $locationIsRemoved;
        
        return $this;
    }
}
