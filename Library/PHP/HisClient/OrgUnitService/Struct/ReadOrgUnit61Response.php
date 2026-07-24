<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readOrgUnit61Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadOrgUnit61Response extends AbstractStructBase
{
    /**
     * The orgunit
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61|null
     */
    protected ?\FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61 $orgunit = null;
    /**
     * Constructor method for readOrgUnit61Response
     * @uses ReadOrgUnit61Response::setOrgunit()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61 $orgunit
     */
    public function __construct(?\FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61 $orgunit = null)
    {
        $this
            ->setOrgunit($orgunit);
    }
    /**
     * Get orgunit value
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61|null
     */
    public function getOrgunit(): ?\FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61 $orgunit
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnit61Response
     */
    public function setOrgunit(?\FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61 $orgunit = null): self
    {
        $this->orgunit = $orgunit;
        
        return $this;
    }
}
