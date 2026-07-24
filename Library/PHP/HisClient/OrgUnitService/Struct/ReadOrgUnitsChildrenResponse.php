<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readOrgUnitsChildrenResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadOrgUnitsChildrenResponse extends AbstractStructBase
{
    /**
     * The children
     * @var \FGTCLB\HisClient\OrgUnitService\Struct\ChildrenType
     */
    protected \FGTCLB\HisClient\OrgUnitService\Struct\ChildrenType $children;
    /**
     * Constructor method for readOrgUnitsChildrenResponse
     * @uses ReadOrgUnitsChildrenResponse::setChildren()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\ChildrenType $children
     */
    public function __construct(\FGTCLB\HisClient\OrgUnitService\Struct\ChildrenType $children)
    {
        $this
            ->setChildren($children);
    }
    /**
     * Get children value
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ChildrenType
     */
    public function getChildren(): \FGTCLB\HisClient\OrgUnitService\Struct\ChildrenType
    {
        return $this->children;
    }
    /**
     * Set children value
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\ChildrenType $children
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnitsChildrenResponse
     */
    public function setChildren(\FGTCLB\HisClient\OrgUnitService\Struct\ChildrenType $children): self
    {
        $this->children = $children;
        
        return $this;
    }
}
