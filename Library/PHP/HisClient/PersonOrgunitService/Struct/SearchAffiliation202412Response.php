<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchAffiliation202412Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchAffiliation202412Response extends AbstractStructBase
{
    /**
     * The affiliationInfos
     * @var \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationInfosType
     */
    protected \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationInfosType $affiliationInfos;
    /**
     * Constructor method for searchAffiliation202412Response
     * @uses SearchAffiliation202412Response::setAffiliationInfos()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationInfosType $affiliationInfos
     */
    public function __construct(\FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationInfosType $affiliationInfos)
    {
        $this
            ->setAffiliationInfos($affiliationInfos);
    }
    /**
     * Get affiliationInfos value
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationInfosType
     */
    public function getAffiliationInfos(): \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationInfosType
    {
        return $this->affiliationInfos;
    }
    /**
     * Set affiliationInfos value
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationInfosType $affiliationInfos
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliation202412Response
     */
    public function setAffiliationInfos(\FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationInfosType $affiliationInfos): self
    {
        $this->affiliationInfos = $affiliationInfos;
        
        return $this;
    }
}
