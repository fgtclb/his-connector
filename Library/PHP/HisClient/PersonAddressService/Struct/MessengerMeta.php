<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessengerMeta Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MessengerMeta extends AddressMeta
{
    /**
     * The messenger
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Messenger
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\Messenger $messenger;
    /**
     * Constructor method for MessengerMeta
     * @uses MessengerMeta::setMessenger()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Messenger $messenger
     */
    public function __construct(\FGTCLB\HisClient\PersonAddressService\Struct\Messenger $messenger)
    {
        $this
            ->setMessenger($messenger);
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta
     */
    public function setMessenger(\FGTCLB\HisClient\PersonAddressService\Struct\Messenger $messenger): self
    {
        $this->messenger = $messenger;
        
        return $this;
    }
}
