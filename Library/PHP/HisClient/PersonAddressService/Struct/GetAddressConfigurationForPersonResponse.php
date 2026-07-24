<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAddressConfigurationForPersonResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAddressConfigurationForPersonResponse extends AbstractStructBase
{
    /**
     * The addressConfigurations
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfigurationsType
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfigurationsType $addressConfigurations;
    /**
     * Constructor method for getAddressConfigurationForPersonResponse
     * @uses GetAddressConfigurationForPersonResponse::setAddressConfigurations()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfigurationsType $addressConfigurations
     */
    public function __construct(\FGTCLB\HisClient\PersonAddressService\Struct\AddressConfigurationsType $addressConfigurations)
    {
        $this
            ->setAddressConfigurations($addressConfigurations);
    }
    /**
     * Get addressConfigurations value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfigurationsType
     */
    public function getAddressConfigurations(): \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfigurationsType
    {
        return $this->addressConfigurations;
    }
    /**
     * Set addressConfigurations value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfigurationsType $addressConfigurations
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\GetAddressConfigurationForPersonResponse
     */
    public function setAddressConfigurations(\FGTCLB\HisClient\PersonAddressService\Struct\AddressConfigurationsType $addressConfigurations): self
    {
        $this->addressConfigurations = $addressConfigurations;
        
        return $this;
    }
}
