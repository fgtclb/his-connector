<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for compareEAddressRequired Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CompareEAddressRequired extends AbstractStructBase
{
    /**
     * The eAddressOne
     * @var \FGTCLB\HisClient\AddressService\Struct\EAddress
     */
    protected \FGTCLB\HisClient\AddressService\Struct\EAddress $eAddressOne;
    /**
     * The eAddressTwo
     * @var \FGTCLB\HisClient\AddressService\Struct\EAddress
     */
    protected \FGTCLB\HisClient\AddressService\Struct\EAddress $eAddressTwo;
    /**
     * Constructor method for compareEAddressRequired
     * @uses CompareEAddressRequired::setEAddressOne()
     * @uses CompareEAddressRequired::setEAddressTwo()
     * @param \FGTCLB\HisClient\AddressService\Struct\EAddress $eAddressOne
     * @param \FGTCLB\HisClient\AddressService\Struct\EAddress $eAddressTwo
     */
    public function __construct(\FGTCLB\HisClient\AddressService\Struct\EAddress $eAddressOne, \FGTCLB\HisClient\AddressService\Struct\EAddress $eAddressTwo)
    {
        $this
            ->setEAddressOne($eAddressOne)
            ->setEAddressTwo($eAddressTwo);
    }
    /**
     * Get eAddressOne value
     * @return \FGTCLB\HisClient\AddressService\Struct\EAddress
     */
    public function getEAddressOne(): \FGTCLB\HisClient\AddressService\Struct\EAddress
    {
        return $this->eAddressOne;
    }
    /**
     * Set eAddressOne value
     * @param \FGTCLB\HisClient\AddressService\Struct\EAddress $eAddressOne
     * @return \FGTCLB\HisClient\AddressService\Struct\CompareEAddressRequired
     */
    public function setEAddressOne(\FGTCLB\HisClient\AddressService\Struct\EAddress $eAddressOne): self
    {
        $this->eAddressOne = $eAddressOne;
        
        return $this;
    }
    /**
     * Get eAddressTwo value
     * @return \FGTCLB\HisClient\AddressService\Struct\EAddress
     */
    public function getEAddressTwo(): \FGTCLB\HisClient\AddressService\Struct\EAddress
    {
        return $this->eAddressTwo;
    }
    /**
     * Set eAddressTwo value
     * @param \FGTCLB\HisClient\AddressService\Struct\EAddress $eAddressTwo
     * @return \FGTCLB\HisClient\AddressService\Struct\CompareEAddressRequired
     */
    public function setEAddressTwo(\FGTCLB\HisClient\AddressService\Struct\EAddress $eAddressTwo): self
    {
        $this->eAddressTwo = $eAddressTwo;
        
        return $this;
    }
}
