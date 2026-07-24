<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readOrgUnitsChildren61Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadOrgUnitsChildren61Response extends AbstractStructBase
{
    /**
     * The children61
     * @var \FGTCLB\HisClient\OrgUnitService\Struct\Children61Type
     */
    protected \FGTCLB\HisClient\OrgUnitService\Struct\Children61Type $children61;
    /**
     * Constructor method for readOrgUnitsChildren61Response
     * @uses ReadOrgUnitsChildren61Response::setChildren61()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\Children61Type $children61
     */
    public function __construct(\FGTCLB\HisClient\OrgUnitService\Struct\Children61Type $children61)
    {
        $this
            ->setChildren61($children61);
    }
    /**
     * Get children61 value
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Children61Type
     */
    public function getChildren61(): \FGTCLB\HisClient\OrgUnitService\Struct\Children61Type
    {
        return $this->children61;
    }
    /**
     * Set children61 value
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\Children61Type $children61
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnitsChildren61Response
     */
    public function setChildren61(\FGTCLB\HisClient\OrgUnitService\Struct\Children61Type $children61): self
    {
        $this->children61 = $children61;
        
        return $this;
    }
}
