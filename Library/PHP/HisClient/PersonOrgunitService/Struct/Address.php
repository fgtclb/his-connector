<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class Address extends AbstractStructBase
{
    /**
     * The addresstagId
     * Meta information extracted from the WSDL
     * - documentation: ID of a tag concerning an address (e.g. postaddress, privat, delivery, billing, office, home).
     * @var int
     */
    protected int $addresstagId;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: The technical database-ID.
     * - nillable: true
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The objGuid
     * Meta information extracted from the WSDL
     * - documentation: Globally unique Identifier.
     * - nillable: true
     * @var string|null
     */
    protected ?string $objGuid = null;
    /**
     * The sortorder
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $sortorder = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The personId
     * Meta information extracted from the WSDL
     * - documentation: Reference to owner - in this case person (A Person represents the identity of any natural person that is used throughout the system.).
     * - nillable: true
     * @var int|null
     */
    protected ?int $personId = null;
    /**
     * The orgunitLid
     * Meta information extracted from the WSDL
     * - documentation: Long-living id. Reference to owner - in this case facility.
     * - nillable: true
     * @var int|null
     */
    protected ?int $orgunitLid = null;
    /**
     * The buildingId
     * Meta information extracted from the WSDL
     * - documentation: ID of building (e.g. lecture building, administrative building).
     * - nillable: true
     * @var int|null
     */
    protected ?int $buildingId = null;
    /**
     * The createdAt
     * Meta information extracted from the WSDL
     * - documentation: Date and time of creation.
     * - nillable: true
     * @var string|null
     */
    protected ?string $createdAt = null;
    /**
     * The updatedAt
     * Meta information extracted from the WSDL
     * - documentation: Date and time of last update.
     * - nillable: true
     * @var string|null
     */
    protected ?string $updatedAt = null;
    /**
     * Constructor method for Address
     * @uses Address::setAddresstagId()
     * @uses Address::setId()
     * @uses Address::setObjGuid()
     * @uses Address::setSortorder()
     * @uses Address::setValidTo()
     * @uses Address::setValidFrom()
     * @uses Address::setPersonId()
     * @uses Address::setOrgunitLid()
     * @uses Address::setBuildingId()
     * @uses Address::setCreatedAt()
     * @uses Address::setUpdatedAt()
     * @param int $addresstagId
     * @param int $id
     * @param string $objGuid
     * @param int $sortorder
     * @param string $validTo
     * @param string $validFrom
     * @param int $personId
     * @param int $orgunitLid
     * @param int $buildingId
     * @param string $createdAt
     * @param string $updatedAt
     */
    public function __construct(int $addresstagId, ?int $id = null, ?string $objGuid = null, ?int $sortorder = null, ?string $validTo = null, ?string $validFrom = null, ?int $personId = null, ?int $orgunitLid = null, ?int $buildingId = null, ?string $createdAt = null, ?string $updatedAt = null)
    {
        $this
            ->setAddresstagId($addresstagId)
            ->setId($id)
            ->setObjGuid($objGuid)
            ->setSortorder($sortorder)
            ->setValidTo($validTo)
            ->setValidFrom($validFrom)
            ->setPersonId($personId)
            ->setOrgunitLid($orgunitLid)
            ->setBuildingId($buildingId)
            ->setCreatedAt($createdAt)
            ->setUpdatedAt($updatedAt);
    }
    /**
     * Get addresstagId value
     * @return int
     */
    public function getAddresstagId(): int
    {
        return $this->addresstagId;
    }
    /**
     * Set addresstagId value
     * @param int $addresstagId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Address
     */
    public function setAddresstagId(int $addresstagId): self
    {
        // validation for constraint: int
        if (!is_null($addresstagId) && !(is_int($addresstagId) || ctype_digit($addresstagId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addresstagId, true), gettype($addresstagId)), __LINE__);
        }
        $this->addresstagId = $addresstagId;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Address
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get objGuid value
     * @return string|null
     */
    public function getObjGuid(): ?string
    {
        return $this->objGuid;
    }
    /**
     * Set objGuid value
     * @param string $objGuid
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Address
     */
    public function setObjGuid(?string $objGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($objGuid) && !is_string($objGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objGuid, true), gettype($objGuid)), __LINE__);
        }
        $this->objGuid = $objGuid;
        
        return $this;
    }
    /**
     * Get sortorder value
     * @return int|null
     */
    public function getSortorder(): ?int
    {
        return $this->sortorder;
    }
    /**
     * Set sortorder value
     * @param int $sortorder
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Address
     */
    public function setSortorder(?int $sortorder = null): self
    {
        // validation for constraint: int
        if (!is_null($sortorder) && !(is_int($sortorder) || ctype_digit($sortorder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortorder, true), gettype($sortorder)), __LINE__);
        }
        $this->sortorder = $sortorder;
        
        return $this;
    }
    /**
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Address
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Address
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get personId value
     * @return int|null
     */
    public function getPersonId(): ?int
    {
        return $this->personId;
    }
    /**
     * Set personId value
     * @param int $personId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Address
     */
    public function setPersonId(?int $personId = null): self
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
     * @return int|null
     */
    public function getOrgunitLid(): ?int
    {
        return $this->orgunitLid;
    }
    /**
     * Set orgunitLid value
     * @param int $orgunitLid
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Address
     */
    public function setOrgunitLid(?int $orgunitLid = null): self
    {
        // validation for constraint: int
        if (!is_null($orgunitLid) && !(is_int($orgunitLid) || ctype_digit($orgunitLid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orgunitLid, true), gettype($orgunitLid)), __LINE__);
        }
        $this->orgunitLid = $orgunitLid;
        
        return $this;
    }
    /**
     * Get buildingId value
     * @return int|null
     */
    public function getBuildingId(): ?int
    {
        return $this->buildingId;
    }
    /**
     * Set buildingId value
     * @param int $buildingId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Address
     */
    public function setBuildingId(?int $buildingId = null): self
    {
        // validation for constraint: int
        if (!is_null($buildingId) && !(is_int($buildingId) || ctype_digit($buildingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($buildingId, true), gettype($buildingId)), __LINE__);
        }
        $this->buildingId = $buildingId;
        
        return $this;
    }
    /**
     * Get createdAt value
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
    /**
     * Set createdAt value
     * @param string $createdAt
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Address
     */
    public function setCreatedAt(?string $createdAt = null): self
    {
        // validation for constraint: string
        if (!is_null($createdAt) && !is_string($createdAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdAt, true), gettype($createdAt)), __LINE__);
        }
        $this->createdAt = $createdAt;
        
        return $this;
    }
    /**
     * Get updatedAt value
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }
    /**
     * Set updatedAt value
     * @param string $updatedAt
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Address
     */
    public function setUpdatedAt(?string $updatedAt = null): self
    {
        // validation for constraint: string
        if (!is_null($updatedAt) && !is_string($updatedAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updatedAt, true), gettype($updatedAt)), __LINE__);
        }
        $this->updatedAt = $updatedAt;
        
        return $this;
    }
}
