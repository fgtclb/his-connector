<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAffiliation202412Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAffiliation202412Response extends AbstractStructBase
{
    /**
     * The affiliation202412
     * @var \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation202412
     */
    protected \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation202412 $affiliation202412;
    /**
     * Constructor method for readAffiliation202412Response
     * @uses ReadAffiliation202412Response::setAffiliation202412()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation202412 $affiliation202412
     */
    public function __construct(\FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation202412 $affiliation202412)
    {
        $this
            ->setAffiliation202412($affiliation202412);
    }
    /**
     * Get affiliation202412 value
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation202412
     */
    public function getAffiliation202412(): \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation202412
    {
        return $this->affiliation202412;
    }
    /**
     * Set affiliation202412 value
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation202412 $affiliation202412
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\ReadAffiliation202412Response
     */
    public function setAffiliation202412(\FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation202412 $affiliation202412): self
    {
        $this->affiliation202412 = $affiliation202412;
        
        return $this;
    }
}
