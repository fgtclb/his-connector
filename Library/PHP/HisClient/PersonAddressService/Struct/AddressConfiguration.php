<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressConfiguration Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddressConfiguration extends AbstractStructBase
{
    /**
     * The notificationCategory
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'NotificationCategoryValue'. Examples: COMA, ALU, ALUG, ALUK, ALUR, CA, COM, OFFICE, UP, DOSV
     * @var string
     */
    protected string $notificationCategory;
    /**
     * The addressType
     * @var string
     */
    protected string $addressType;
    /**
     * The upperLimit
     * Meta information extracted from the WSDL
     * - documentation: The upper limit of addresses of given type that may be assigned to this notification category.
     * @var int
     */
    protected int $upperLimit;
    /**
     * The required
     * Meta information extracted from the WSDL
     * - documentation: If true, at least one address of given type must be assigned to this notification category. This depends on the subject person!
     * @var bool
     */
    protected bool $required;
    /**
     * The assignable
     * Meta information extracted from the WSDL
     * - documentation: If true, the authenticated user is authorized to change the assignement of addresses to this notification category.
     * @var bool
     */
    protected bool $assignable;
    /**
     * Constructor method for AddressConfiguration
     * @uses AddressConfiguration::setNotificationCategory()
     * @uses AddressConfiguration::setAddressType()
     * @uses AddressConfiguration::setUpperLimit()
     * @uses AddressConfiguration::setRequired()
     * @uses AddressConfiguration::setAssignable()
     * @param string $notificationCategory
     * @param string $addressType
     * @param int $upperLimit
     * @param bool $required
     * @param bool $assignable
     */
    public function __construct(string $notificationCategory, string $addressType, int $upperLimit, bool $required, bool $assignable)
    {
        $this
            ->setNotificationCategory($notificationCategory)
            ->setAddressType($addressType)
            ->setUpperLimit($upperLimit)
            ->setRequired($required)
            ->setAssignable($assignable);
    }
    /**
     * Get notificationCategory value
     * @return string
     */
    public function getNotificationCategory(): string
    {
        return $this->notificationCategory;
    }
    /**
     * Set notificationCategory value
     * @param string $notificationCategory
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfiguration
     */
    public function setNotificationCategory(string $notificationCategory): self
    {
        // validation for constraint: string
        if (!is_null($notificationCategory) && !is_string($notificationCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notificationCategory, true), gettype($notificationCategory)), __LINE__);
        }
        $this->notificationCategory = $notificationCategory;
        
        return $this;
    }
    /**
     * Get addressType value
     * @return string
     */
    public function getAddressType(): string
    {
        return $this->addressType;
    }
    /**
     * Set addressType value
     * @uses \FGTCLB\HisClient\PersonAddressService\Enum\AddressTypeType::valueIsValid()
     * @uses \FGTCLB\HisClient\PersonAddressService\Enum\AddressTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $addressType
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfiguration
     */
    public function setAddressType(string $addressType): self
    {
        // validation for constraint: enumeration
        if (!\FGTCLB\HisClient\PersonAddressService\Enum\AddressTypeType::valueIsValid($addressType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \FGTCLB\HisClient\PersonAddressService\Enum\AddressTypeType', is_array($addressType) ? implode(', ', $addressType) : var_export($addressType, true), implode(', ', \FGTCLB\HisClient\PersonAddressService\Enum\AddressTypeType::getValidValues())), __LINE__);
        }
        $this->addressType = $addressType;
        
        return $this;
    }
    /**
     * Get upperLimit value
     * @return int
     */
    public function getUpperLimit(): int
    {
        return $this->upperLimit;
    }
    /**
     * Set upperLimit value
     * @param int $upperLimit
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfiguration
     */
    public function setUpperLimit(int $upperLimit): self
    {
        // validation for constraint: int
        if (!is_null($upperLimit) && !(is_int($upperLimit) || ctype_digit($upperLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($upperLimit, true), gettype($upperLimit)), __LINE__);
        }
        $this->upperLimit = $upperLimit;
        
        return $this;
    }
    /**
     * Get required value
     * @return bool
     */
    public function getRequired(): bool
    {
        return $this->required;
    }
    /**
     * Set required value
     * @param bool $required
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfiguration
     */
    public function setRequired(bool $required): self
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->required = $required;
        
        return $this;
    }
    /**
     * Get assignable value
     * @return bool
     */
    public function getAssignable(): bool
    {
        return $this->assignable;
    }
    /**
     * Set assignable value
     * @param bool $assignable
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfiguration
     */
    public function setAssignable(bool $assignable): self
    {
        // validation for constraint: boolean
        if (!is_null($assignable) && !is_bool($assignable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($assignable, true), gettype($assignable)), __LINE__);
        }
        $this->assignable = $assignable;
        
        return $this;
    }
}
