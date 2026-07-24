<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for removeEAddressFromAffiliation Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RemoveEAddressFromAffiliation extends AbstractStructBase
{
    /**
     * The personOrgunitId
     * @var int
     */
    protected int $personOrgunitId;
    /**
     * The eaddressId
     * @var int
     */
    protected int $eaddressId;
    /**
     * Constructor method for removeEAddressFromAffiliation
     * @uses RemoveEAddressFromAffiliation::setPersonOrgunitId()
     * @uses RemoveEAddressFromAffiliation::setEaddressId()
     * @param int $personOrgunitId
     * @param int $eaddressId
     */
    public function __construct(int $personOrgunitId, int $eaddressId)
    {
        $this
            ->setPersonOrgunitId($personOrgunitId)
            ->setEaddressId($eaddressId);
    }
    /**
     * Get personOrgunitId value
     * @return int
     */
    public function getPersonOrgunitId(): int
    {
        return $this->personOrgunitId;
    }
    /**
     * Set personOrgunitId value
     * @param int $personOrgunitId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\RemoveEAddressFromAffiliation
     */
    public function setPersonOrgunitId(int $personOrgunitId): self
    {
        // validation for constraint: int
        if (!is_null($personOrgunitId) && !(is_int($personOrgunitId) || ctype_digit($personOrgunitId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personOrgunitId, true), gettype($personOrgunitId)), __LINE__);
        }
        $this->personOrgunitId = $personOrgunitId;
        
        return $this;
    }
    /**
     * Get eaddressId value
     * @return int
     */
    public function getEaddressId(): int
    {
        return $this->eaddressId;
    }
    /**
     * Set eaddressId value
     * @param int $eaddressId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\RemoveEAddressFromAffiliation
     */
    public function setEaddressId(int $eaddressId): self
    {
        // validation for constraint: int
        if (!is_null($eaddressId) && !(is_int($eaddressId) || ctype_digit($eaddressId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($eaddressId, true), gettype($eaddressId)), __LINE__);
        }
        $this->eaddressId = $eaddressId;
        
        return $this;
    }
}
