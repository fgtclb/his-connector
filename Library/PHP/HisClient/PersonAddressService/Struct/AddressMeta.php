<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressMeta Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class AddressMeta extends AbstractStructBase
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
     * The editable
     * @var bool
     */
    protected bool $editable;
    /**
     * The notificationCategories
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType $notificationCategories;
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
     * The createdAt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $createdAt = null;
    /**
     * The updatedAt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $updatedAt = null;
    /**
     * Constructor method for AddressMeta
     * @uses AddressMeta::setAddressId()
     * @uses AddressMeta::setPersonId()
     * @uses AddressMeta::setValidFrom()
     * @uses AddressMeta::setValidTo()
     * @uses AddressMeta::setEditable()
     * @uses AddressMeta::setNotificationCategories()
     * @uses AddressMeta::setObjGuid()
     * @uses AddressMeta::setCreatedAt()
     * @uses AddressMeta::setUpdatedAt()
     * @param int $addressId
     * @param int $personId
     * @param string $validFrom
     * @param string $validTo
     * @param bool $editable
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType $notificationCategories
     * @param string $objGuid
     * @param string $createdAt
     * @param string $updatedAt
     */
    public function __construct(int $addressId, int $personId, string $validFrom, string $validTo, bool $editable, \FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType $notificationCategories, ?string $objGuid = null, ?string $createdAt = null, ?string $updatedAt = null)
    {
        $this
            ->setAddressId($addressId)
            ->setPersonId($personId)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setEditable($editable)
            ->setNotificationCategories($notificationCategories)
            ->setObjGuid($objGuid)
            ->setCreatedAt($createdAt)
            ->setUpdatedAt($updatedAt);
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressMeta
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressMeta
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressMeta
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressMeta
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
     * Get editable value
     * @return bool
     */
    public function getEditable(): bool
    {
        return $this->editable;
    }
    /**
     * Set editable value
     * @param bool $editable
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressMeta
     */
    public function setEditable(bool $editable): self
    {
        // validation for constraint: boolean
        if (!is_null($editable) && !is_bool($editable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($editable, true), gettype($editable)), __LINE__);
        }
        $this->editable = $editable;
        
        return $this;
    }
    /**
     * Get notificationCategories value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType
     */
    public function getNotificationCategories(): \FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType
    {
        return $this->notificationCategories;
    }
    /**
     * Set notificationCategories value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType $notificationCategories
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressMeta
     */
    public function setNotificationCategories(\FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType $notificationCategories): self
    {
        $this->notificationCategories = $notificationCategories;
        
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressMeta
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressMeta
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressMeta
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
