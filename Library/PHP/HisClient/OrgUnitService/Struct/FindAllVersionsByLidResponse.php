<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findAllVersionsByLidResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindAllVersionsByLidResponse extends AbstractStructBase
{
    /**
     * The orgunits
     * @var \FGTCLB\HisClient\OrgUnitService\Struct\OrgunitsType
     */
    protected \FGTCLB\HisClient\OrgUnitService\Struct\OrgunitsType $orgunits;
    /**
     * Constructor method for findAllVersionsByLidResponse
     * @uses FindAllVersionsByLidResponse::setOrgunits()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\OrgunitsType $orgunits
     */
    public function __construct(\FGTCLB\HisClient\OrgUnitService\Struct\OrgunitsType $orgunits)
    {
        $this
            ->setOrgunits($orgunits);
    }
    /**
     * Get orgunits value
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgunitsType
     */
    public function getOrgunits(): \FGTCLB\HisClient\OrgUnitService\Struct\OrgunitsType
    {
        return $this->orgunits;
    }
    /**
     * Set orgunits value
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\OrgunitsType $orgunits
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindAllVersionsByLidResponse
     */
    public function setOrgunits(\FGTCLB\HisClient\OrgUnitService\Struct\OrgunitsType $orgunits): self
    {
        $this->orgunits = $orgunits;
        
        return $this;
    }
}
