<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for phones202506Type Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Phones202506Type extends AbstractStructBase
{
    /**
     * The phoneMeta202506
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta[]
     */
    protected ?array $phoneMeta202506 = null;
    /**
     * Constructor method for phones202506Type
     * @uses Phones202506Type::setPhoneMeta202506()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta[] $phoneMeta202506
     */
    public function __construct(?array $phoneMeta202506 = null)
    {
        $this
            ->setPhoneMeta202506($phoneMeta202506);
    }
    /**
     * Get phoneMeta202506 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta[]
     */
    public function getPhoneMeta202506(): ?array
    {
        return $this->phoneMeta202506 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPhoneMeta202506 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhoneMeta202506 method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhoneMeta202506ForArrayConstraintFromSetPhoneMeta202506(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $phones202506TypePhoneMeta202506Item) {
            // validation for constraint: itemType
            if (!$phones202506TypePhoneMeta202506Item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta) {
                $invalidValues[] = is_object($phones202506TypePhoneMeta202506Item) ? get_class($phones202506TypePhoneMeta202506Item) : sprintf('%s(%s)', gettype($phones202506TypePhoneMeta202506Item), var_export($phones202506TypePhoneMeta202506Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The phoneMeta202506 property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set phoneMeta202506 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta[] $phoneMeta202506
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Phones202506Type
     */
    public function setPhoneMeta202506(?array $phoneMeta202506 = null): self
    {
        // validation for constraint: array
        if ('' !== ($phoneMeta202506ArrayErrorMessage = self::validatePhoneMeta202506ForArrayConstraintFromSetPhoneMeta202506($phoneMeta202506))) {
            throw new InvalidArgumentException($phoneMeta202506ArrayErrorMessage, __LINE__);
        }
        if (is_null($phoneMeta202506) || (is_array($phoneMeta202506) && empty($phoneMeta202506))) {
            unset($this->phoneMeta202506);
        } else {
            $this->phoneMeta202506 = $phoneMeta202506;
        }
        
        return $this;
    }
    /**
     * Add item to phoneMeta202506 value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta $item
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Phones202506Type
     */
    public function addToPhoneMeta202506(\FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta) {
            throw new InvalidArgumentException(sprintf('The phoneMeta202506 property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->phoneMeta202506[] = $item;
        
        return $this;
    }
}
