<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addAffiliationToPerson Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddAffiliationToPerson extends AbstractStructBase
{
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * The orgunitLid
     * @var int
     */
    protected int $orgunitLid;
    /**
     * The affiliationTypeId
     * @var int
     */
    protected int $affiliationTypeId;
    /**
     * The validFrom
     * @var string
     */
    protected string $validFrom;
    /**
     * The validTo
     * @var string
     */
    protected string $validTo;
    /**
     * Constructor method for addAffiliationToPerson
     * @uses AddAffiliationToPerson::setPersonId()
     * @uses AddAffiliationToPerson::setOrgunitLid()
     * @uses AddAffiliationToPerson::setAffiliationTypeId()
     * @uses AddAffiliationToPerson::setValidFrom()
     * @uses AddAffiliationToPerson::setValidTo()
     * @param int $personId
     * @param int $orgunitLid
     * @param int $affiliationTypeId
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(int $personId, int $orgunitLid, int $affiliationTypeId, string $validFrom, string $validTo)
    {
        $this
            ->setPersonId($personId)
            ->setOrgunitLid($orgunitLid)
            ->setAffiliationTypeId($affiliationTypeId)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get personId value
     * @return int
     */
    public function getPersonId(): int
    {
        return $this->personId;
    }
    /**
     * Set personId value
     * @param int $personId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\AddAffiliationToPerson
     */
    public function setPersonId(int $personId): self
    {
        // validation for constraint: int
        if (!is_null($personId) && !(is_int($personId) || ctype_digit($personId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personId, true), gettype($personId)), __LINE__);
        }
        $this->personId = $personId;
        
        return $this;
    }
    /**
     * Get orgunitLid value
     * @return int
     */
    public function getOrgunitLid(): int
    {
        return $this->orgunitLid;
    }
    /**
     * Set orgunitLid value
     * @param int $orgunitLid
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\AddAffiliationToPerson
     */
    public function setOrgunitLid(int $orgunitLid): self
    {
        // validation for constraint: int
        if (!is_null($orgunitLid) && !(is_int($orgunitLid) || ctype_digit($orgunitLid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orgunitLid, true), gettype($orgunitLid)), __LINE__);
        }
        $this->orgunitLid = $orgunitLid;
        
        return $this;
    }
    /**
     * Get affiliationTypeId value
     * @return int
     */
    public function getAffiliationTypeId(): int
    {
        return $this->affiliationTypeId;
    }
    /**
     * Set affiliationTypeId value
     * @param int $affiliationTypeId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\AddAffiliationToPerson
     */
    public function setAffiliationTypeId(int $affiliationTypeId): self
    {
        // validation for constraint: int
        if (!is_null($affiliationTypeId) && !(is_int($affiliationTypeId) || ctype_digit($affiliationTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($affiliationTypeId, true), gettype($affiliationTypeId)), __LINE__);
        }
        $this->affiliationTypeId = $affiliationTypeId;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string
     */
    public function getValidFrom(): string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\AddAffiliationToPerson
     */
    public function setValidFrom(string $validFrom): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validTo value
     * @return string
     */
    public function getValidTo(): string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\AddAffiliationToPerson
     */
    public function setValidTo(string $validTo): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
}
