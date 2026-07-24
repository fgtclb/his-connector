<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchAffiliationById Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchAffiliationById extends AbstractStructBase
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
     * The affiliationId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $affiliationId = null;
    /**
     * Constructor method for searchAffiliationById
     * @uses SearchAffiliationById::setPersonId()
     * @uses SearchAffiliationById::setAffiliationId()
     * @param string $personId
     * @param string $affiliationId
     */
    public function __construct(?string $personId = null, ?string $affiliationId = null)
    {
        $this
            ->setPersonId($personId)
            ->setAffiliationId($affiliationId);
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationById
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
     * Get affiliationId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAffiliationId(): ?string
    {
        return $this->affiliationId ?? null;
    }
    /**
     * Set affiliationId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $affiliationId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationById
     */
    public function setAffiliationId(?string $affiliationId = null): self
    {
        // validation for constraint: string
        if (!is_null($affiliationId) && !is_string($affiliationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($affiliationId, true), gettype($affiliationId)), __LINE__);
        }
        if (is_null($affiliationId) || (is_array($affiliationId) && empty($affiliationId))) {
            unset($this->affiliationId);
        } else {
            $this->affiliationId = $affiliationId;
        }
        
        return $this;
    }
}
