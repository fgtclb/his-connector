<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readOrgunitByIdResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadOrgunitByIdResponse extends AbstractStructBase
{
    /**
     * The orgunit
     * @var \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren
     */
    protected \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren $orgunit;
    /**
     * Constructor method for readOrgunitByIdResponse
     * @uses ReadOrgunitByIdResponse::setOrgunit()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren $orgunit
     */
    public function __construct(\FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren $orgunit)
    {
        $this
            ->setOrgunit($orgunit);
    }
    /**
     * Get orgunit value
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren
     */
    public function getOrgunit(): \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren $orgunit
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgunitByIdResponse
     */
    public function setOrgunit(\FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren $orgunit): self
    {
        $this->orgunit = $orgunit;
        
        return $this;
    }
}
