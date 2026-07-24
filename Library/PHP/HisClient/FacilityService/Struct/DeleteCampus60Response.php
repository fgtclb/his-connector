<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteCampus60Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCampus60Response extends AbstractStructBase
{
    /**
     * The deleted
     * @var bool
     */
    protected bool $deleted;
    /**
     * Constructor method for deleteCampus60Response
     * @uses DeleteCampus60Response::setDeleted()
     * @param bool $deleted
     */
    public function __construct(bool $deleted)
    {
        $this
            ->setDeleted($deleted);
    }
    /**
     * Get deleted value
     * @return bool
     */
    public function getDeleted(): bool
    {
        return $this->deleted;
    }
    /**
     * Set deleted value
     * @param bool $deleted
     * @return \FGTCLB\HisClient\FacilityService\Struct\DeleteCampus60Response
     */
    public function setDeleted(bool $deleted): self
    {
        // validation for constraint: boolean
        if (!is_null($deleted) && !is_bool($deleted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deleted, true), gettype($deleted)), __LINE__);
        }
        $this->deleted = $deleted;
        
        return $this;
    }
}
