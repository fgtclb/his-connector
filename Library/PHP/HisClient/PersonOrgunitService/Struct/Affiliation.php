<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Affiliation Struct
 * Meta information extracted from the WSDL
 * - documentation: Load additional data for given affiliation.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Affiliation extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: The technical database-ID.
     * @var int
     */
    protected int $id;
    /**
     * The affiliationTypeId
     * Meta information extracted from the WSDL
     * - documentation: ID of function name.
     * @var int
     */
    protected int $affiliationTypeId;
    /**
     * The orgunitLid
     * Meta information extracted from the WSDL
     * - documentation: Long-living id. Reference to owner - in this case facility.
     * @var int
     */
    protected int $orgunitLid;
    /**
     * The personId
     * Meta information extracted from the WSDL
     * - documentation: Reference to owner - in this case person (A Person represents the identity of any natural person that is used throughout the system.).
     * @var int
     */
    protected int $personId;
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
     * The orgunitId
     * Meta information extracted from the WSDL
     * - documentation: ID of current Orgunit. Nil if a valid Orgunit does not exist.
     * - nillable: true
     * @var int|null
     */
    protected ?int $orgunitId = null;
    /**
     * Constructor method for Affiliation
     * @uses Affiliation::setId()
     * @uses Affiliation::setAffiliationTypeId()
     * @uses Affiliation::setOrgunitLid()
     * @uses Affiliation::setPersonId()
     * @uses Affiliation::setValidFrom()
     * @uses Affiliation::setValidTo()
     * @uses Affiliation::setOrgunitId()
     * @param int $id
     * @param int $affiliationTypeId
     * @param int $orgunitLid
     * @param int $personId
     * @param string $validFrom
     * @param string $validTo
     * @param int $orgunitId
     */
    public function __construct(int $id, int $affiliationTypeId, int $orgunitLid, int $personId, string $validFrom, string $validTo, ?int $orgunitId = null)
    {
        $this
            ->setId($id)
            ->setAffiliationTypeId($affiliationTypeId)
            ->setOrgunitLid($orgunitLid)
            ->setPersonId($personId)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setOrgunitId($orgunitId);
    }
    /**
     * Get id value
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation
     */
    public function setId(int $id): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation
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
    /**
     * Get orgunitId value
     * @return int|null
     */
    public function getOrgunitId(): ?int
    {
        return $this->orgunitId;
    }
    /**
     * Set orgunitId value
     * @param int $orgunitId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation
     */
    public function setOrgunitId(?int $orgunitId = null): self
    {
        // validation for constraint: int
        if (!is_null($orgunitId) && !(is_int($orgunitId) || ctype_digit($orgunitId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orgunitId, true), gettype($orgunitId)), __LINE__);
        }
        $this->orgunitId = $orgunitId;
        
        return $this;
    }
}
