<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EaddressInfo Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EaddressInfo extends AbstractStructBase
{
    /**
     * The addressId
     * @var int
     */
    protected int $addressId;
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * The eaddressType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $eaddressType = null;
    /**
     * The eaddressValue
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $eaddressValue = null;
    /**
     * Constructor method for EaddressInfo
     * @uses EaddressInfo::setAddressId()
     * @uses EaddressInfo::setPersonId()
     * @uses EaddressInfo::setEaddressType()
     * @uses EaddressInfo::setEaddressValue()
     * @param int $addressId
     * @param int $personId
     * @param string $eaddressType
     * @param string $eaddressValue
     */
    public function __construct(int $addressId, int $personId, ?string $eaddressType = null, ?string $eaddressValue = null)
    {
        $this
            ->setAddressId($addressId)
            ->setPersonId($personId)
            ->setEaddressType($eaddressType)
            ->setEaddressValue($eaddressValue);
    }
    /**
     * Get addressId value
     * @return int
     */
    public function getAddressId(): int
    {
        return $this->addressId;
    }
    /**
     * Set addressId value
     * @param int $addressId
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfo
     */
    public function setAddressId(int $addressId): self
    {
        // validation for constraint: int
        if (!is_null($addressId) && !(is_int($addressId) || ctype_digit($addressId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressId, true), gettype($addressId)), __LINE__);
        }
        $this->addressId = $addressId;
        
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfo
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
     * Get eaddressType value
     * @return string|null
     */
    public function getEaddressType(): ?string
    {
        return $this->eaddressType;
    }
    /**
     * Set eaddressType value
     * @param string $eaddressType
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfo
     */
    public function setEaddressType(?string $eaddressType = null): self
    {
        // validation for constraint: string
        if (!is_null($eaddressType) && !is_string($eaddressType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eaddressType, true), gettype($eaddressType)), __LINE__);
        }
        $this->eaddressType = $eaddressType;
        
        return $this;
    }
    /**
     * Get eaddressValue value
     * @return string|null
     */
    public function getEaddressValue(): ?string
    {
        return $this->eaddressValue;
    }
    /**
     * Set eaddressValue value
     * @param string $eaddressValue
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfo
     */
    public function setEaddressValue(?string $eaddressValue = null): self
    {
        // validation for constraint: string
        if (!is_null($eaddressValue) && !is_string($eaddressValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eaddressValue, true), gettype($eaddressValue)), __LINE__);
        }
        $this->eaddressValue = $eaddressValue;
        
        return $this;
    }
}
