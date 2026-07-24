<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveNewOrgunitResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveNewOrgunitResponse extends AbstractStructBase
{
    /**
     * The savedOrgunit
     * @var \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit
     */
    protected \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $savedOrgunit;
    /**
     * Constructor method for saveNewOrgunitResponse
     * @uses SaveNewOrgunitResponse::setSavedOrgunit()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $savedOrgunit
     */
    public function __construct(\FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $savedOrgunit)
    {
        $this
            ->setSavedOrgunit($savedOrgunit);
    }
    /**
     * Get savedOrgunit value
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit
     */
    public function getSavedOrgunit(): \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit
    {
        return $this->savedOrgunit;
    }
    /**
     * Set savedOrgunit value
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $savedOrgunit
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\SaveNewOrgunitResponse
     */
    public function setSavedOrgunit(\FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $savedOrgunit): self
    {
        $this->savedOrgunit = $savedOrgunit;
        
        return $this;
    }
}
