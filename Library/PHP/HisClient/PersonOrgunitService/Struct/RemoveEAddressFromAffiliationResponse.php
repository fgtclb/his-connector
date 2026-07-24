<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for removeEAddressFromAffiliationResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RemoveEAddressFromAffiliationResponse extends AbstractStructBase
{
    /**
     * The eAddressIsRemoved
     * @var bool
     */
    protected bool $eAddressIsRemoved;
    /**
     * Constructor method for removeEAddressFromAffiliationResponse
     * @uses RemoveEAddressFromAffiliationResponse::setEAddressIsRemoved()
     * @param bool $eAddressIsRemoved
     */
    public function __construct(bool $eAddressIsRemoved)
    {
        $this
            ->setEAddressIsRemoved($eAddressIsRemoved);
    }
    /**
     * Get eAddressIsRemoved value
     * @return bool
     */
    public function getEAddressIsRemoved(): bool
    {
        return $this->eAddressIsRemoved;
    }
    /**
     * Set eAddressIsRemoved value
     * @param bool $eAddressIsRemoved
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\RemoveEAddressFromAffiliationResponse
     */
    public function setEAddressIsRemoved(bool $eAddressIsRemoved): self
    {
        // validation for constraint: boolean
        if (!is_null($eAddressIsRemoved) && !is_bool($eAddressIsRemoved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eAddressIsRemoved, true), gettype($eAddressIsRemoved)), __LINE__);
        }
        $this->eAddressIsRemoved = $eAddressIsRemoved;
        
        return $this;
    }
}
