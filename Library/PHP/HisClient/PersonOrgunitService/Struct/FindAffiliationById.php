<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findAffiliationById Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindAffiliationById extends AbstractStructBase
{
    /**
     * The personOrgunitId
     * @var int
     */
    protected int $personOrgunitId;
    /**
     * Constructor method for findAffiliationById
     * @uses FindAffiliationById::setPersonOrgunitId()
     * @param int $personOrgunitId
     */
    public function __construct(int $personOrgunitId)
    {
        $this
            ->setPersonOrgunitId($personOrgunitId);
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\FindAffiliationById
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
}
