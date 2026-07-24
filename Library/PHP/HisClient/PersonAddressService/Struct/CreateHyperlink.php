<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createHyperlink Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateHyperlink extends AbstractStructBase
{
    /**
     * The personId
     * Meta information extracted from the WSDL
     * - documentation: The owner of this address.
     * @var int
     */
    protected int $personId;
    /**
     * The notificationCategory
     * Meta information extracted from the WSDL
     * - documentation: This is the initial notification category of this address. More may be added with 'assignAddressToNotification'. See KeyvalueService with valueClass = 'NotificationCategoryValue'. Examples: COMA, ALU, ALUG, ALUK, ALUR, CA, COM,
     * OFFICE, UP, DOSV
     * @var string
     */
    protected string $notificationCategory;
    /**
     * The hyperlink
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink $hyperlink;
    /**
     * Constructor method for createHyperlink
     * @uses CreateHyperlink::setPersonId()
     * @uses CreateHyperlink::setNotificationCategory()
     * @uses CreateHyperlink::setHyperlink()
     * @param int $personId
     * @param string $notificationCategory
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink $hyperlink
     */
    public function __construct(int $personId, string $notificationCategory, \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink $hyperlink)
    {
        $this
            ->setPersonId($personId)
            ->setNotificationCategory($notificationCategory)
            ->setHyperlink($hyperlink);
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreateHyperlink
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreateHyperlink
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
     * Get hyperlink value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink
     */
    public function getHyperlink(): \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink
    {
        return $this->hyperlink;
    }
    /**
     * Set hyperlink value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink $hyperlink
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreateHyperlink
     */
    public function setHyperlink(\FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink $hyperlink): self
    {
        $this->hyperlink = $hyperlink;
        
        return $this;
    }
}
