<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateMessenger Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateMessenger extends AbstractStructBase
{
    /**
     * The addressId
     * @var int
     */
    protected int $addressId;
    /**
     * The messenger
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Messenger
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\Messenger $messenger;
    /**
     * Constructor method for updateMessenger
     * @uses UpdateMessenger::setAddressId()
     * @uses UpdateMessenger::setMessenger()
     * @param int $addressId
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Messenger $messenger
     */
    public function __construct(int $addressId, \FGTCLB\HisClient\PersonAddressService\Struct\Messenger $messenger)
    {
        $this
            ->setAddressId($addressId)
            ->setMessenger($messenger);
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdateMessenger
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdateMessenger
     */
    public function setMessenger(\FGTCLB\HisClient\PersonAddressService\Struct\Messenger $messenger): self
    {
        $this->messenger = $messenger;
        
        return $this;
    }
}
