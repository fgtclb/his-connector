<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for removeSecondaryOrgunitFromRoomResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RemoveSecondaryOrgunitFromRoomResponse extends AbstractStructBase
{
    /**
     * The isRemoved
     * @var bool
     */
    protected bool $isRemoved;
    /**
     * Constructor method for removeSecondaryOrgunitFromRoomResponse
     * @uses RemoveSecondaryOrgunitFromRoomResponse::setIsRemoved()
     * @param bool $isRemoved
     */
    public function __construct(bool $isRemoved)
    {
        $this
            ->setIsRemoved($isRemoved);
    }
    /**
     * Get isRemoved value
     * @return bool
     */
    public function getIsRemoved(): bool
    {
        return $this->isRemoved;
    }
    /**
     * Set isRemoved value
     * @param bool $isRemoved
     * @return \FGTCLB\HisClient\FacilityService\Struct\RemoveSecondaryOrgunitFromRoomResponse
     */
    public function setIsRemoved(bool $isRemoved): self
    {
        // validation for constraint: boolean
        if (!is_null($isRemoved) && !is_bool($isRemoved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRemoved, true), gettype($isRemoved)), __LINE__);
        }
        $this->isRemoved = $isRemoved;
        
        return $this;
    }
}
