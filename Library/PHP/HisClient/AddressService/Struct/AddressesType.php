<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressesType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddressesType extends AbstractStructBase
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\AddressService\Struct\Address[]
     */
    protected ?array $address = null;
    /**
     * Constructor method for addressesType
     * @uses AddressesType::setAddress()
     * @param \FGTCLB\HisClient\AddressService\Struct\Address[] $address
     */
    public function __construct(?array $address = null)
    {
        $this
            ->setAddress($address);
    }
    /**
     * Get address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\AddressService\Struct\Address[]
     */
    public function getAddress(): ?array
    {
        return $this->address ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddressForArrayConstraintFromSetAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $addressesTypeAddressItem) {
            // validation for constraint: itemType
            if (!$addressesTypeAddressItem instanceof \FGTCLB\HisClient\AddressService\Struct\Address) {
                $invalidValues[] = is_object($addressesTypeAddressItem) ? get_class($addressesTypeAddressItem) : sprintf('%s(%s)', gettype($addressesTypeAddressItem), var_export($addressesTypeAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The address property can only contain items of type \FGTCLB\HisClient\AddressService\Struct\Address, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AddressService\Struct\Address[] $address
     * @return \FGTCLB\HisClient\AddressService\Struct\AddressesType
     */
    public function setAddress(?array $address = null): self
    {
        // validation for constraint: array
        if ('' !== ($addressArrayErrorMessage = self::validateAddressForArrayConstraintFromSetAddress($address))) {
            throw new InvalidArgumentException($addressArrayErrorMessage, __LINE__);
        }
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->address);
        } else {
            $this->address = $address;
        }
        
        return $this;
    }
    /**
     * Add item to address value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AddressService\Struct\Address $item
     * @return \FGTCLB\HisClient\AddressService\Struct\AddressesType
     */
    public function addToAddress(\FGTCLB\HisClient\AddressService\Struct\Address $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\AddressService\Struct\Address) {
            throw new InvalidArgumentException(sprintf('The address property can only contain items of type \FGTCLB\HisClient\AddressService\Struct\Address, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->address[] = $item;
        
        return $this;
    }
}
