<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for postAdressesType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PostAdressesType extends AbstractStructBase
{
    /**
     * The postAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode[]
     */
    protected ?array $postAddress = null;
    /**
     * Constructor method for postAdressesType
     * @uses PostAdressesType::setPostAddress()
     * @param \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode[] $postAddress
     */
    public function __construct(?array $postAddress = null)
    {
        $this
            ->setPostAddress($postAddress);
    }
    /**
     * Get postAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode[]
     */
    public function getPostAddress(): ?array
    {
        return $this->postAddress ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPostAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPostAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePostAddressForArrayConstraintFromSetPostAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $postAdressesTypePostAddressItem) {
            // validation for constraint: itemType
            if (!$postAdressesTypePostAddressItem instanceof \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode) {
                $invalidValues[] = is_object($postAdressesTypePostAddressItem) ? get_class($postAdressesTypePostAddressItem) : sprintf('%s(%s)', gettype($postAdressesTypePostAddressItem), var_export($postAdressesTypePostAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The postAddress property can only contain items of type \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set postAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode[] $postAddress
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAdressesType
     */
    public function setPostAddress(?array $postAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($postAddressArrayErrorMessage = self::validatePostAddressForArrayConstraintFromSetPostAddress($postAddress))) {
            throw new InvalidArgumentException($postAddressArrayErrorMessage, __LINE__);
        }
        if (is_null($postAddress) || (is_array($postAddress) && empty($postAddress))) {
            unset($this->postAddress);
        } else {
            $this->postAddress = $postAddress;
        }
        
        return $this;
    }
    /**
     * Add item to postAddress value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode $item
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAdressesType
     */
    public function addToPostAddress(\FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode) {
            throw new InvalidArgumentException(sprintf('The postAddress property can only contain items of type \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->postAddress[] = $item;
        
        return $this;
    }
}
