<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateOrgunit Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateOrgunit extends AbstractStructBase
{
    /**
     * The orgunit
     * @var \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit
     */
    protected \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $orgunit;
    /**
     * Constructor method for updateOrgunit
     * @uses UpdateOrgunit::setOrgunit()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $orgunit
     */
    public function __construct(\FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $orgunit)
    {
        $this
            ->setOrgunit($orgunit);
    }
    /**
     * Get orgunit value
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit
     */
    public function getOrgunit(): \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $orgunit
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\UpdateOrgunit
     */
    public function setOrgunit(\FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $orgunit): self
    {
        $this->orgunit = $orgunit;
        
        return $this;
    }
}
