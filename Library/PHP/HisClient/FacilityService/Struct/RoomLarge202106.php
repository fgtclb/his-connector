<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomLarge202106 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoomLarge202106 extends RoomLarge201706
{
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
     * The validFrom
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * The centralised
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $centralised = null;
    /**
     * Constructor method for RoomLarge202106
     * @uses RoomLarge202106::setOrgunitLid()
     * @uses RoomLarge202106::setValidFrom()
     * @uses RoomLarge202106::setValidTo()
     * @uses RoomLarge202106::setCentralised()
     * @param int $orgunitLid
     * @param string $validFrom
     * @param string $validTo
     * @param bool $centralised
     */
    public function __construct(?int $orgunitLid = null, ?string $validFrom = null, ?string $validTo = null, ?bool $centralised = null)
    {
        $this
            ->setOrgunitLid($orgunitLid)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setCentralised($centralised);
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202106
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202106
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202106
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
     * Get centralised value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getCentralised(): ?bool
    {
        return $this->centralised ?? null;
    }
    /**
     * Set centralised value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $centralised
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202106
     */
    public function setCentralised(?bool $centralised = null): self
    {
        // validation for constraint: boolean
        if (!is_null($centralised) && !is_bool($centralised)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($centralised, true), gettype($centralised)), __LINE__);
        }
        if (is_null($centralised) || (is_array($centralised) && empty($centralised))) {
            unset($this->centralised);
        } else {
            $this->centralised = $centralised;
        }
        
        return $this;
    }
}
