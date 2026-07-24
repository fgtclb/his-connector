<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchAffiliation202412 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchAffiliation202412 extends AbstractStructBase
{
    /**
     * The personId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $personId = null;
    /**
     * The orgunitLid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $orgunitLid = null;
    /**
     * The affiliationTypeId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $affiliationTypeId = null;
    /**
     * The supplement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $supplement = null;
    /**
     * The visibilityValueId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $visibilityValueId = null;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for searchAffiliation202412
     * @uses SearchAffiliation202412::setPersonId()
     * @uses SearchAffiliation202412::setOrgunitLid()
     * @uses SearchAffiliation202412::setAffiliationTypeId()
     * @uses SearchAffiliation202412::setSupplement()
     * @uses SearchAffiliation202412::setVisibilityValueId()
     * @uses SearchAffiliation202412::setValidFrom()
     * @uses SearchAffiliation202412::setValidTo()
     * @param string $personId
     * @param string $orgunitLid
     * @param string $affiliationTypeId
     * @param string $supplement
     * @param string $visibilityValueId
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(?string $personId = null, ?string $orgunitLid = null, ?string $affiliationTypeId = null, ?string $supplement = null, ?string $visibilityValueId = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setPersonId($personId)
            ->setOrgunitLid($orgunitLid)
            ->setAffiliationTypeId($affiliationTypeId)
            ->setSupplement($supplement)
            ->setVisibilityValueId($visibilityValueId)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get personId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPersonId(): ?string
    {
        return $this->personId ?? null;
    }
    /**
     * Set personId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $personId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliation202412
     */
    public function setPersonId(?string $personId = null): self
    {
        // validation for constraint: string
        if (!is_null($personId) && !is_string($personId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personId, true), gettype($personId)), __LINE__);
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
     * @return string|null
     */
    public function getOrgunitLid(): ?string
    {
        return $this->orgunitLid ?? null;
    }
    /**
     * Set orgunitLid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orgunitLid
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliation202412
     */
    public function setOrgunitLid(?string $orgunitLid = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunitLid) && !is_string($orgunitLid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunitLid, true), gettype($orgunitLid)), __LINE__);
        }
        if (is_null($orgunitLid) || (is_array($orgunitLid) && empty($orgunitLid))) {
            unset($this->orgunitLid);
        } else {
            $this->orgunitLid = $orgunitLid;
        }
        
        return $this;
    }
    /**
     * Get affiliationTypeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAffiliationTypeId(): ?string
    {
        return $this->affiliationTypeId ?? null;
    }
    /**
     * Set affiliationTypeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $affiliationTypeId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliation202412
     */
    public function setAffiliationTypeId(?string $affiliationTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($affiliationTypeId) && !is_string($affiliationTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($affiliationTypeId, true), gettype($affiliationTypeId)), __LINE__);
        }
        if (is_null($affiliationTypeId) || (is_array($affiliationTypeId) && empty($affiliationTypeId))) {
            unset($this->affiliationTypeId);
        } else {
            $this->affiliationTypeId = $affiliationTypeId;
        }
        
        return $this;
    }
    /**
     * Get supplement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSupplement(): ?string
    {
        return $this->supplement ?? null;
    }
    /**
     * Set supplement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $supplement
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliation202412
     */
    public function setSupplement(?string $supplement = null): self
    {
        // validation for constraint: string
        if (!is_null($supplement) && !is_string($supplement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplement, true), gettype($supplement)), __LINE__);
        }
        if (is_null($supplement) || (is_array($supplement) && empty($supplement))) {
            unset($this->supplement);
        } else {
            $this->supplement = $supplement;
        }
        
        return $this;
    }
    /**
     * Get visibilityValueId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVisibilityValueId(): ?string
    {
        return $this->visibilityValueId ?? null;
    }
    /**
     * Set visibilityValueId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $visibilityValueId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliation202412
     */
    public function setVisibilityValueId(?string $visibilityValueId = null): self
    {
        // validation for constraint: string
        if (!is_null($visibilityValueId) && !is_string($visibilityValueId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($visibilityValueId, true), gettype($visibilityValueId)), __LINE__);
        }
        if (is_null($visibilityValueId) || (is_array($visibilityValueId) && empty($visibilityValueId))) {
            unset($this->visibilityValueId);
        } else {
            $this->visibilityValueId = $visibilityValueId;
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliation202412
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliation202412
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
}
