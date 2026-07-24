<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchedAffiliationExtended Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchedAffiliationExtended extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: The technical database-ID.
     * @var int
     */
    protected int $id;
    /**
     * The personId
     * Meta information extracted from the WSDL
     * - documentation: Reference to owner - in this case person (A Person represents the identity of any natural person that is used throughout the system.).
     * @var int
     */
    protected int $personId;
    /**
     * The orgunitLid
     * Meta information extracted from the WSDL
     * - documentation: Long-living id. Reference to owner - in this case facility.
     * @var int
     */
    protected int $orgunitLid;
    /**
     * The affiliationTypeId
     * Meta information extracted from the WSDL
     * - documentation: ID of function name.
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
     * The longtext
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $longtext = null;
    /**
     * The supplement
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $supplement = null;
    /**
     * Constructor method for SearchedAffiliationExtended
     * @uses SearchedAffiliationExtended::setId()
     * @uses SearchedAffiliationExtended::setPersonId()
     * @uses SearchedAffiliationExtended::setOrgunitLid()
     * @uses SearchedAffiliationExtended::setAffiliationTypeId()
     * @uses SearchedAffiliationExtended::setValidFrom()
     * @uses SearchedAffiliationExtended::setValidTo()
     * @uses SearchedAffiliationExtended::setLongtext()
     * @uses SearchedAffiliationExtended::setSupplement()
     * @param int $id
     * @param int $personId
     * @param int $orgunitLid
     * @param int $affiliationTypeId
     * @param string $validFrom
     * @param string $validTo
     * @param string $longtext
     * @param string $supplement
     */
    public function __construct(int $id, int $personId, int $orgunitLid, int $affiliationTypeId, string $validFrom, string $validTo, ?string $longtext = null, ?string $supplement = null)
    {
        $this
            ->setId($id)
            ->setPersonId($personId)
            ->setOrgunitLid($orgunitLid)
            ->setAffiliationTypeId($affiliationTypeId)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setLongtext($longtext)
            ->setSupplement($supplement);
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended
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
     * Get longtext value
     * @return string|null
     */
    public function getLongtext(): ?string
    {
        return $this->longtext;
    }
    /**
     * Set longtext value
     * @param string $longtext
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended
     */
    public function setLongtext(?string $longtext = null): self
    {
        // validation for constraint: string
        if (!is_null($longtext) && !is_string($longtext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longtext, true), gettype($longtext)), __LINE__);
        }
        $this->longtext = $longtext;
        
        return $this;
    }
    /**
     * Get supplement value
     * @return string|null
     */
    public function getSupplement(): ?string
    {
        return $this->supplement;
    }
    /**
     * Set supplement value
     * @param string $supplement
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended
     */
    public function setSupplement(?string $supplement = null): self
    {
        // validation for constraint: string
        if (!is_null($supplement) && !is_string($supplement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplement, true), gettype($supplement)), __LINE__);
        }
        $this->supplement = $supplement;
        
        return $this;
    }
}
