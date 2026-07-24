<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findOrgUnitResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindOrgUnitResponse extends AbstractStructBase
{
    /**
     * The orgUnitIds
     * @var \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitIdsType
     */
    protected \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitIdsType $orgUnitIds;
    /**
     * Constructor method for findOrgUnitResponse
     * @uses FindOrgUnitResponse::setOrgUnitIds()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitIdsType $orgUnitIds
     */
    public function __construct(\FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitIdsType $orgUnitIds)
    {
        $this
            ->setOrgUnitIds($orgUnitIds);
    }
    /**
     * Get orgUnitIds value
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitIdsType
     */
    public function getOrgUnitIds(): \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitIdsType
    {
        return $this->orgUnitIds;
    }
    /**
     * Set orgUnitIds value
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitIdsType $orgUnitIds
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnitResponse
     */
    public function setOrgUnitIds(\FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitIdsType $orgUnitIds): self
    {
        $this->orgUnitIds = $orgUnitIds;
        
        return $this;
    }
}
