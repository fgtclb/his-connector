<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eAddressesType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EAddressesType extends AbstractStructBase
{
    /**
     * The eAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\AddressService\Struct\EAddress[]
     */
    protected ?array $eAddress = null;
    /**
     * Constructor method for eAddressesType
     * @uses EAddressesType::setEAddress()
     * @param \FGTCLB\HisClient\AddressService\Struct\EAddress[] $eAddress
     */
    public function __construct(?array $eAddress = null)
    {
        $this
            ->setEAddress($eAddress);
    }
    /**
     * Get eAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\AddressService\Struct\EAddress[]
     */
    public function getEAddress(): ?array
    {
        return $this->eAddress ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEAddressForArrayConstraintFromSetEAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $eAddressesTypeEAddressItem) {
            // validation for constraint: itemType
            if (!$eAddressesTypeEAddressItem instanceof \FGTCLB\HisClient\AddressService\Struct\EAddress) {
                $invalidValues[] = is_object($eAddressesTypeEAddressItem) ? get_class($eAddressesTypeEAddressItem) : sprintf('%s(%s)', gettype($eAddressesTypeEAddressItem), var_export($eAddressesTypeEAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The eAddress property can only contain items of type \FGTCLB\HisClient\AddressService\Struct\EAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set eAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AddressService\Struct\EAddress[] $eAddress
     * @return \FGTCLB\HisClient\AddressService\Struct\EAddressesType
     */
    public function setEAddress(?array $eAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($eAddressArrayErrorMessage = self::validateEAddressForArrayConstraintFromSetEAddress($eAddress))) {
            throw new InvalidArgumentException($eAddressArrayErrorMessage, __LINE__);
        }
        if (is_null($eAddress) || (is_array($eAddress) && empty($eAddress))) {
            unset($this->eAddress);
        } else {
            $this->eAddress = $eAddress;
        }
        
        return $this;
    }
    /**
     * Add item to eAddress value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AddressService\Struct\EAddress $item
     * @return \FGTCLB\HisClient\AddressService\Struct\EAddressesType
     */
    public function addToEAddress(\FGTCLB\HisClient\AddressService\Struct\EAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\AddressService\Struct\EAddress) {
            throw new InvalidArgumentException(sprintf('The eAddress property can only contain items of type \FGTCLB\HisClient\AddressService\Struct\EAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->eAddress[] = $item;
        
        return $this;
    }
}
