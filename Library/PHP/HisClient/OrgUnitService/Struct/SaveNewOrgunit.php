<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveNewOrgunit Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveNewOrgunit extends AbstractStructBase
{
    /**
     * The orgunit
     * @var \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit
     */
    protected \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $orgunit;
    /**
     * Constructor method for saveNewOrgunit
     * @uses SaveNewOrgunit::setOrgunit()
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
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\SaveNewOrgunit
     */
    public function setOrgunit(\FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $orgunit): self
    {
        $this->orgunit = $orgunit;
        
        return $this;
    }
}
