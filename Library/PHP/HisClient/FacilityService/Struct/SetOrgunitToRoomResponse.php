<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setOrgunitToRoomResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetOrgunitToRoomResponse extends AbstractStructBase
{
    /**
     * The isAssigned
     * @var bool
     */
    protected bool $isAssigned;
    /**
     * Constructor method for setOrgunitToRoomResponse
     * @uses SetOrgunitToRoomResponse::setIsAssigned()
     * @param bool $isAssigned
     */
    public function __construct(bool $isAssigned)
    {
        $this
            ->setIsAssigned($isAssigned);
    }
    /**
     * Get isAssigned value
     * @return bool
     */
    public function getIsAssigned(): bool
    {
        return $this->isAssigned;
    }
    /**
     * Set isAssigned value
     * @param bool $isAssigned
     * @return \FGTCLB\HisClient\FacilityService\Struct\SetOrgunitToRoomResponse
     */
    public function setIsAssigned(bool $isAssigned): self
    {
        // validation for constraint: boolean
        if (!is_null($isAssigned) && !is_bool($isAssigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAssigned, true), gettype($isAssigned)), __LINE__);
        }
        $this->isAssigned = $isAssigned;
        
        return $this;
    }
}
