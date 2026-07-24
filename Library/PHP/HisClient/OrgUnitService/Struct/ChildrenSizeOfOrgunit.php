<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for childrenSizeOfOrgunit Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ChildrenSizeOfOrgunit extends AbstractStructBase
{
    /**
     * The lid
     * Meta information extracted from the WSDL
     * - documentation: long-living id of an organizational unit
     * @var int
     */
    protected int $lid;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\OrgUnitService\Struct\VersionDateRange|null
     */
    protected ?\FGTCLB\HisClient\OrgUnitService\Struct\VersionDateRange $date = null;
    /**
     * Constructor method for childrenSizeOfOrgunit
     * @uses ChildrenSizeOfOrgunit::setLid()
     * @uses ChildrenSizeOfOrgunit::setDate()
     * @param int $lid
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\VersionDateRange $date
     */
    public function __construct(int $lid, ?\FGTCLB\HisClient\OrgUnitService\Struct\VersionDateRange $date = null)
    {
        $this
            ->setLid($lid)
            ->setDate($date);
    }
    /**
     * Get lid value
     * @return int
     */
    public function getLid(): int
    {
        return $this->lid;
    }
    /**
     * Set lid value
     * @param int $lid
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ChildrenSizeOfOrgunit
     */
    public function setLid(int $lid): self
    {
        // validation for constraint: int
        if (!is_null($lid) && !(is_int($lid) || ctype_digit($lid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lid, true), gettype($lid)), __LINE__);
        }
        $this->lid = $lid;
        
        return $this;
    }
    /**
     * Get date value
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\VersionDateRange|null
     */
    public function getDate(): ?\FGTCLB\HisClient\OrgUnitService\Struct\VersionDateRange
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\VersionDateRange $date
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ChildrenSizeOfOrgunit
     */
    public function setDate(?\FGTCLB\HisClient\OrgUnitService\Struct\VersionDateRange $date = null): self
    {
        $this->date = $date;
        
        return $this;
    }
}
