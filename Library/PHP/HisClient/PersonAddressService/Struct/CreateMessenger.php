<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createMessenger Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateMessenger extends AbstractStructBase
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
     * The messenger
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Messenger
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\Messenger $messenger;
    /**
     * Constructor method for createMessenger
     * @uses CreateMessenger::setPersonId()
     * @uses CreateMessenger::setNotificationCategory()
     * @uses CreateMessenger::setMessenger()
     * @param int $personId
     * @param string $notificationCategory
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Messenger $messenger
     */
    public function __construct(int $personId, string $notificationCategory, \FGTCLB\HisClient\PersonAddressService\Struct\Messenger $messenger)
    {
        $this
            ->setPersonId($personId)
            ->setNotificationCategory($notificationCategory)
            ->setMessenger($messenger);
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreateMessenger
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreateMessenger
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
     * Get messenger value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Messenger
     */
    public function getMessenger(): \FGTCLB\HisClient\PersonAddressService\Struct\Messenger
    {
        return $this->messenger;
    }
    /**
     * Set messenger value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Messenger $messenger
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreateMessenger
     */
    public function setMessenger(\FGTCLB\HisClient\PersonAddressService\Struct\Messenger $messenger): self
    {
        $this->messenger = $messenger;
        
        return $this;
    }
}
