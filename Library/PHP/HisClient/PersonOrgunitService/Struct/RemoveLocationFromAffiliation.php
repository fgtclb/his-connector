<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for removeLocationFromAffiliation Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RemoveLocationFromAffiliation extends AbstractStructBase
{
    /**
     * The personOrgunitRelId
     * @var int
     */
    protected int $personOrgunitRelId;
    /**
     * Constructor method for removeLocationFromAffiliation
     * @uses RemoveLocationFromAffiliation::setPersonOrgunitRelId()
     * @param int $personOrgunitRelId
     */
    public function __construct(int $personOrgunitRelId)
    {
        $this
            ->setPersonOrgunitRelId($personOrgunitRelId);
    }
    /**
     * Get personOrgunitRelId value
     * @return int
     */
    public function getPersonOrgunitRelId(): int
    {
        return $this->personOrgunitRelId;
    }
    /**
     * Set personOrgunitRelId value
     * @param int $personOrgunitRelId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\RemoveLocationFromAffiliation
     */
    public function setPersonOrgunitRelId(int $personOrgunitRelId): self
    {
        // validation for constraint: int
        if (!is_null($personOrgunitRelId) && !(is_int($personOrgunitRelId) || ctype_digit($personOrgunitRelId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personOrgunitRelId, true), gettype($personOrgunitRelId)), __LINE__);
        }
        $this->personOrgunitRelId = $personOrgunitRelId;
        
        return $this;
    }
}
