<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getUniversityLidResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUniversityLidResponse extends AbstractStructBase
{
    /**
     * The universityLid
     * @var int
     */
    protected int $universityLid;
    /**
     * Constructor method for getUniversityLidResponse
     * @uses GetUniversityLidResponse::setUniversityLid()
     * @param int $universityLid
     */
    public function __construct(int $universityLid)
    {
        $this
            ->setUniversityLid($universityLid);
    }
    /**
     * Get universityLid value
     * @return int
     */
    public function getUniversityLid(): int
    {
        return $this->universityLid;
    }
    /**
     * Set universityLid value
     * @param int $universityLid
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\GetUniversityLidResponse
     */
    public function setUniversityLid(int $universityLid): self
    {
        // validation for constraint: int
        if (!is_null($universityLid) && !(is_int($universityLid) || ctype_digit($universityLid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($universityLid, true), gettype($universityLid)), __LINE__);
        }
        $this->universityLid = $universityLid;
        
        return $this;
    }
}
