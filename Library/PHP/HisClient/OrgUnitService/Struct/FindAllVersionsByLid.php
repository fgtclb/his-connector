<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findAllVersionsByLid Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindAllVersionsByLid extends AbstractStructBase
{
    /**
     * The lid
     * @var int
     */
    protected int $lid;
    /**
     * Constructor method for findAllVersionsByLid
     * @uses FindAllVersionsByLid::setLid()
     * @param int $lid
     */
    public function __construct(int $lid)
    {
        $this
            ->setLid($lid);
    }
    /**
     * Get lid value
     * @return int
     */
    public function getLid(): int
    {
        return $this->lid;
    }
    /**
     * Set lid value
     * @param int $lid
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindAllVersionsByLid
     */
    public function setLid(int $lid): self
    {
        // validation for constraint: int
        if (!is_null($lid) && !(is_int($lid) || ctype_digit($lid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lid, true), gettype($lid)), __LINE__);
        }
        $this->lid = $lid;
        
        return $this;
    }
}
