<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for phonesType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PhonesType extends AbstractStructBase
{
    /**
     * The phoneMeta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta[]
     */
    protected ?array $phoneMeta = null;
    /**
     * Constructor method for phonesType
     * @uses PhonesType::setPhoneMeta()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta[] $phoneMeta
     */
    public function __construct(?array $phoneMeta = null)
    {
        $this
            ->setPhoneMeta($phoneMeta);
    }
    /**
     * Get phoneMeta value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta[]
     */
    public function getPhoneMeta(): ?array
    {
        return $this->phoneMeta ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPhoneMeta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhoneMeta method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhoneMetaForArrayConstraintFromSetPhoneMeta(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $phonesTypePhoneMetaItem) {
            // validation for constraint: itemType
            if (!$phonesTypePhoneMetaItem instanceof \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta) {
                $invalidValues[] = is_object($phonesTypePhoneMetaItem) ? get_class($phonesTypePhoneMetaItem) : sprintf('%s(%s)', gettype($phonesTypePhoneMetaItem), var_export($phonesTypePhoneMetaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The phoneMeta property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set phoneMeta value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta[] $phoneMeta
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PhonesType
     */
    public function setPhoneMeta(?array $phoneMeta = null): self
    {
        // validation for constraint: array
        if ('' !== ($phoneMetaArrayErrorMessage = self::validatePhoneMetaForArrayConstraintFromSetPhoneMeta($phoneMeta))) {
            throw new InvalidArgumentException($phoneMetaArrayErrorMessage, __LINE__);
        }
        if (is_null($phoneMeta) || (is_array($phoneMeta) && empty($phoneMeta))) {
            unset($this->phoneMeta);
        } else {
            $this->phoneMeta = $phoneMeta;
        }
        
        return $this;
    }
    /**
     * Add item to phoneMeta value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta $item
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PhonesType
     */
    public function addToPhoneMeta(\FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta) {
            throw new InvalidArgumentException(sprintf('The phoneMeta property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->phoneMeta[] = $item;
        
        return $this;
    }
}
