<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomOrgunit Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoomOrgunit extends AbstractStructBase
{
    /**
     * The isPrimary
     * @var bool
     */
    protected bool $isPrimary;
    /**
     * The orgunitLid
     * @var int
     */
    protected int $orgunitLid;
    /**
     * Constructor method for RoomOrgunit
     * @uses RoomOrgunit::setIsPrimary()
     * @uses RoomOrgunit::setOrgunitLid()
     * @param bool $isPrimary
     * @param int $orgunitLid
     */
    public function __construct(bool $isPrimary, int $orgunitLid)
    {
        $this
            ->setIsPrimary($isPrimary)
            ->setOrgunitLid($orgunitLid);
    }
    /**
     * Get isPrimary value
     * @return bool
     */
    public function getIsPrimary(): bool
    {
        return $this->isPrimary;
    }
    /**
     * Set isPrimary value
     * @param bool $isPrimary
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomOrgunit
     */
    public function setIsPrimary(bool $isPrimary): self
    {
        // validation for constraint: boolean
        if (!is_null($isPrimary) && !is_bool($isPrimary)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPrimary, true), gettype($isPrimary)), __LINE__);
        }
        $this->isPrimary = $isPrimary;
        
        return $this;
    }
    /**
     * Get orgunitLid value
     * @return int
     */
    public function getOrgunitLid(): int
    {
        return $this->orgunitLid;
    }
    /**
     * Set orgunitLid value
     * @param int $orgunitLid
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomOrgunit
     */
    public function setOrgunitLid(int $orgunitLid): self
    {
        // validation for constraint: int
        if (!is_null($orgunitLid) && !(is_int($orgunitLid) || ctype_digit($orgunitLid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orgunitLid, true), gettype($orgunitLid)), __LINE__);
        }
        $this->orgunitLid = $orgunitLid;
        
        return $this;
    }
}
