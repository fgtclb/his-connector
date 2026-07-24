<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readOrgUnitResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadOrgUnitResponse extends AbstractStructBase
{
    /**
     * The orgunit
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit|null
     */
    protected ?\FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $orgunit = null;
    /**
     * Constructor method for readOrgUnitResponse
     * @uses ReadOrgUnitResponse::setOrgunit()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $orgunit
     */
    public function __construct(?\FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $orgunit = null)
    {
        $this
            ->setOrgunit($orgunit);
    }
    /**
     * Get orgunit value
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit|null
     */
    public function getOrgunit(): ?\FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $orgunit
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnitResponse
     */
    public function setOrgunit(?\FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $orgunit = null): self
    {
        $this->orgunit = $orgunit;
        
        return $this;
    }
}
