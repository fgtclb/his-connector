<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateAffiliation60Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateAffiliation60Response extends AbstractStructBase
{
    /**
     * The affiliation
     * @var \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation60
     */
    protected \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation60 $affiliation;
    /**
     * Constructor method for updateAffiliation60Response
     * @uses UpdateAffiliation60Response::setAffiliation()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation60 $affiliation
     */
    public function __construct(\FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation60 $affiliation)
    {
        $this
            ->setAffiliation($affiliation);
    }
    /**
     * Get affiliation value
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation60
     */
    public function getAffiliation(): \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation60
    {
        return $this->affiliation;
    }
    /**
     * Set affiliation value
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation60 $affiliation
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\UpdateAffiliation60Response
     */
    public function setAffiliation(\FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation60 $affiliation): self
    {
        $this->affiliation = $affiliation;
        
        return $this;
    }
}
