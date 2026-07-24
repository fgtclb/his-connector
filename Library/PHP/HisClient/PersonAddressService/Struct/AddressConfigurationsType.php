<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressConfigurationsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddressConfigurationsType extends AbstractStructBase
{
    /**
     * The addressConfiguration
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfiguration[]
     */
    protected ?array $addressConfiguration = null;
    /**
     * Constructor method for addressConfigurationsType
     * @uses AddressConfigurationsType::setAddressConfiguration()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfiguration[] $addressConfiguration
     */
    public function __construct(?array $addressConfiguration = null)
    {
        $this
            ->setAddressConfiguration($addressConfiguration);
    }
    /**
     * Get addressConfiguration value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfiguration[]
     */
    public function getAddressConfiguration(): ?array
    {
        return $this->addressConfiguration ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAddressConfiguration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddressConfiguration method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddressConfigurationForArrayConstraintFromSetAddressConfiguration(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $addressConfigurationsTypeAddressConfigurationItem) {
            // validation for constraint: itemType
            if (!$addressConfigurationsTypeAddressConfigurationItem instanceof \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfiguration) {
                $invalidValues[] = is_object($addressConfigurationsTypeAddressConfigurationItem) ? get_class($addressConfigurationsTypeAddressConfigurationItem) : sprintf('%s(%s)', gettype($addressConfigurationsTypeAddressConfigurationItem), var_export($addressConfigurationsTypeAddressConfigurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The addressConfiguration property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfiguration, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set addressConfiguration value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfiguration[] $addressConfiguration
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfigurationsType
     */
    public function setAddressConfiguration(?array $addressConfiguration = null): self
    {
        // validation for constraint: array
        if ('' !== ($addressConfigurationArrayErrorMessage = self::validateAddressConfigurationForArrayConstraintFromSetAddressConfiguration($addressConfiguration))) {
            throw new InvalidArgumentException($addressConfigurationArrayErrorMessage, __LINE__);
        }
        if (is_null($addressConfiguration) || (is_array($addressConfiguration) && empty($addressConfiguration))) {
            unset($this->addressConfiguration);
        } else {
            $this->addressConfiguration = $addressConfiguration;
        }
        
        return $this;
    }
    /**
     * Add item to addressConfiguration value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfiguration $item
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfigurationsType
     */
    public function addToAddressConfiguration(\FGTCLB\HisClient\PersonAddressService\Struct\AddressConfiguration $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfiguration) {
            throw new InvalidArgumentException(sprintf('The addressConfiguration property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\AddressConfiguration, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->addressConfiguration[] = $item;
        
        return $this;
    }
}
