<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

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
     * The id
     * Meta information extracted from the WSDL
     * - documentation: The technical database-ID.
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The objGuid
     * Meta information extracted from the WSDL
     * - documentation: Globally unique Identifier.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $objGuid = null;
    /**
     * The addresstagId
     * Meta information extracted from the WSDL
     * - documentation: ID of a tag concerning an address (e.g. postaddress, privat, delivery, billing, office, home).
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $addresstagId = null;
    /**
     * The sortorder
     * Meta information extracted from the WSDL
     * - documentation: Sort
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $sortorder = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The personId
     * Meta information extracted from the WSDL
     * - documentation: Reference to owner - in this case person (A Person represents the identity of any natural person that is used throughout the system.).
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $personId = null;
    /**
     * The orgunitLid
     * Meta information extracted from the WSDL
     * - documentation: long-living id. Reference to owner - in this case facility.
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $orgunitLid = null;
    /**
     * The buildingId
     * Meta information extracted from the WSDL
     * - documentation: ID of building (e.g. lecture building, administrative building).
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $buildingId = null;
    /**
     * The createdAt
     * Meta information extracted from the WSDL
     * - documentation: Date and time of creation.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $createdAt = null;
    /**
     * The updatedAt
     * Meta information extracted from the WSDL
     * - documentation: Date and time of last update.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $updatedAt = null;
    /**
     * Constructor method for Address
     * @uses Address::setId()
     * @uses Address::setObjGuid()
     * @uses Address::setAddresstagId()
     * @uses Address::setSortorder()
     * @uses Address::setValidTo()
     * @uses Address::setValidFrom()
     * @uses Address::setPersonId()
     * @uses Address::setOrgunitLid()
     * @uses Address::setBuildingId()
     * @uses Address::setCreatedAt()
     * @uses Address::setUpdatedAt()
     * @param int $id
     * @param string $objGuid
     * @param int $addresstagId
     * @param int $sortorder
     * @param string $validTo
     * @param string $validFrom
     * @param int $personId
     * @param int $orgunitLid
     * @param int $buildingId
     * @param string $createdAt
     * @param string $updatedAt
     */
    public function __construct(?int $id = null, ?string $objGuid = null, ?int $addresstagId = null, ?int $sortorder = null, ?string $validTo = null, ?string $validFrom = null, ?int $personId = null, ?int $orgunitLid = null, ?int $buildingId = null, ?string $createdAt = null, ?string $updatedAt = null)
    {
        $this
            ->setId($id)
            ->setObjGuid($objGuid)
            ->setAddresstagId($addresstagId)
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
     * Get id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id ?? null;
    }
    /**
     * Set id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $id
     * @return \FGTCLB\HisClient\AddressService\Struct\Address
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
        }
        
        return $this;
    }
    /**
     * Get objGuid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getObjGuid(): ?string
    {
        return $this->objGuid ?? null;
    }
    /**
     * Set objGuid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $objGuid
     * @return \FGTCLB\HisClient\AddressService\Struct\Address
     */
    public function setObjGuid(?string $objGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($objGuid) && !is_string($objGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objGuid, true), gettype($objGuid)), __LINE__);
        }
        if (is_null($objGuid) || (is_array($objGuid) && empty($objGuid))) {
            unset($this->objGuid);
        } else {
            $this->objGuid = $objGuid;
        }
        
        return $this;
    }
    /**
     * Get addresstagId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getAddresstagId(): ?int
    {
        return $this->addresstagId ?? null;
    }
    /**
     * Set addresstagId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $addresstagId
     * @return \FGTCLB\HisClient\AddressService\Struct\Address
     */
    public function setAddresstagId(?int $addresstagId = null): self
    {
        // validation for constraint: int
        if (!is_null($addresstagId) && !(is_int($addresstagId) || ctype_digit($addresstagId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addresstagId, true), gettype($addresstagId)), __LINE__);
        }
        if (is_null($addresstagId) || (is_array($addresstagId) && empty($addresstagId))) {
            unset($this->addresstagId);
        } else {
            $this->addresstagId = $addresstagId;
        }
        
        return $this;
    }
    /**
     * Get sortorder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getSortorder(): ?int
    {
        return $this->sortorder ?? null;
    }
    /**
     * Set sortorder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $sortorder
     * @return \FGTCLB\HisClient\AddressService\Struct\Address
     */
    public function setSortorder(?int $sortorder = null): self
    {
        // validation for constraint: int
        if (!is_null($sortorder) && !(is_int($sortorder) || ctype_digit($sortorder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortorder, true), gettype($sortorder)), __LINE__);
        }
        if (is_null($sortorder) || (is_array($sortorder) && empty($sortorder))) {
            unset($this->sortorder);
        } else {
            $this->sortorder = $sortorder;
        }
        
        return $this;
    }
    /**
     * Get validTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo ?? null;
    }
    /**
     * Set validTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validTo
     * @return \FGTCLB\HisClient\AddressService\Struct\Address
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        if (is_null($validTo) || (is_array($validTo) && empty($validTo))) {
            unset($this->validTo);
        } else {
            $this->validTo = $validTo;
        }
        
        return $this;
    }
    /**
     * Get validFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom ?? null;
    }
    /**
     * Set validFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validFrom
     * @return \FGTCLB\HisClient\AddressService\Struct\Address
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        if (is_null($validFrom) || (is_array($validFrom) && empty($validFrom))) {
            unset($this->validFrom);
        } else {
            $this->validFrom = $validFrom;
        }
        
        return $this;
    }
    /**
     * Get personId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPersonId(): ?int
    {
        return $this->personId ?? null;
    }
    /**
     * Set personId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $personId
     * @return \FGTCLB\HisClient\AddressService\Struct\Address
     */
    public function setPersonId(?int $personId = null): self
    {
        // validation for constraint: int
        if (!is_null($personId) && !(is_int($personId) || ctype_digit($personId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personId, true), gettype($personId)), __LINE__);
        }
        if (is_null($personId) || (is_array($personId) && empty($personId))) {
            unset($this->personId);
        } else {
            $this->personId = $personId;
        }
        
        return $this;
    }
    /**
     * Get orgunitLid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOrgunitLid(): ?int
    {
        return $this->orgunitLid ?? null;
    }
    /**
     * Set orgunitLid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $orgunitLid
     * @return \FGTCLB\HisClient\AddressService\Struct\Address
     */
    public function setOrgunitLid(?int $orgunitLid = null): self
    {
        // validation for constraint: int
        if (!is_null($orgunitLid) && !(is_int($orgunitLid) || ctype_digit($orgunitLid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orgunitLid, true), gettype($orgunitLid)), __LINE__);
        }
        if (is_null($orgunitLid) || (is_array($orgunitLid) && empty($orgunitLid))) {
            unset($this->orgunitLid);
        } else {
            $this->orgunitLid = $orgunitLid;
        }
        
        return $this;
    }
    /**
     * Get buildingId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getBuildingId(): ?int
    {
        return $this->buildingId ?? null;
    }
    /**
     * Set buildingId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $buildingId
     * @return \FGTCLB\HisClient\AddressService\Struct\Address
     */
    public function setBuildingId(?int $buildingId = null): self
    {
        // validation for constraint: int
        if (!is_null($buildingId) && !(is_int($buildingId) || ctype_digit($buildingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($buildingId, true), gettype($buildingId)), __LINE__);
        }
        if (is_null($buildingId) || (is_array($buildingId) && empty($buildingId))) {
            unset($this->buildingId);
        } else {
            $this->buildingId = $buildingId;
        }
        
        return $this;
    }
    /**
     * Get createdAt value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt ?? null;
    }
    /**
     * Set createdAt value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $createdAt
     * @return \FGTCLB\HisClient\AddressService\Struct\Address
     */
    public function setCreatedAt(?string $createdAt = null): self
    {
        // validation for constraint: string
        if (!is_null($createdAt) && !is_string($createdAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdAt, true), gettype($createdAt)), __LINE__);
        }
        if (is_null($createdAt) || (is_array($createdAt) && empty($createdAt))) {
            unset($this->createdAt);
        } else {
            $this->createdAt = $createdAt;
        }
        
        return $this;
    }
    /**
     * Get updatedAt value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt ?? null;
    }
    /**
     * Set updatedAt value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $updatedAt
     * @return \FGTCLB\HisClient\AddressService\Struct\Address
     */
    public function setUpdatedAt(?string $updatedAt = null): self
    {
        // validation for constraint: string
        if (!is_null($updatedAt) && !is_string($updatedAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updatedAt, true), gettype($updatedAt)), __LINE__);
        }
        if (is_null($updatedAt) || (is_array($updatedAt) && empty($updatedAt))) {
            unset($this->updatedAt);
        } else {
            $this->updatedAt = $updatedAt;
        }
        
        return $this;
    }
}
