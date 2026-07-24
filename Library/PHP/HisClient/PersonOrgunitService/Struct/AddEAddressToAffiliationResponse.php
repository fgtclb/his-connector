<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addEAddressToAffiliationResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddEAddressToAffiliationResponse extends AbstractStructBase
{
    /**
     * The eAddressIsAdded
     * @var bool
     */
    protected bool $eAddressIsAdded;
    /**
     * Constructor method for addEAddressToAffiliationResponse
     * @uses AddEAddressToAffiliationResponse::setEAddressIsAdded()
     * @param bool $eAddressIsAdded
     */
    public function __construct(bool $eAddressIsAdded)
    {
        $this
            ->setEAddressIsAdded($eAddressIsAdded);
    }
    /**
     * Get eAddressIsAdded value
     * @return bool
     */
    public function getEAddressIsAdded(): bool
    {
        return $this->eAddressIsAdded;
    }
    /**
     * Set eAddressIsAdded value
     * @param bool $eAddressIsAdded
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\AddEAddressToAffiliationResponse
     */
    public function setEAddressIsAdded(bool $eAddressIsAdded): self
    {
        // validation for constraint: boolean
        if (!is_null($eAddressIsAdded) && !is_bool($eAddressIsAdded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eAddressIsAdded, true), gettype($eAddressIsAdded)), __LINE__);
        }
        $this->eAddressIsAdded = $eAddressIsAdded;
        
        return $this;
    }
}
