<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for messengers202506Type Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Messengers202506Type extends AbstractStructBase
{
    /**
     * The messengerMeta202506
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta[]
     */
    protected ?array $messengerMeta202506 = null;
    /**
     * Constructor method for messengers202506Type
     * @uses Messengers202506Type::setMessengerMeta202506()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta[] $messengerMeta202506
     */
    public function __construct(?array $messengerMeta202506 = null)
    {
        $this
            ->setMessengerMeta202506($messengerMeta202506);
    }
    /**
     * Get messengerMeta202506 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta[]
     */
    public function getMessengerMeta202506(): ?array
    {
        return $this->messengerMeta202506 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMessengerMeta202506 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessengerMeta202506 method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessengerMeta202506ForArrayConstraintFromSetMessengerMeta202506(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $messengers202506TypeMessengerMeta202506Item) {
            // validation for constraint: itemType
            if (!$messengers202506TypeMessengerMeta202506Item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta) {
                $invalidValues[] = is_object($messengers202506TypeMessengerMeta202506Item) ? get_class($messengers202506TypeMessengerMeta202506Item) : sprintf('%s(%s)', gettype($messengers202506TypeMessengerMeta202506Item), var_export($messengers202506TypeMessengerMeta202506Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The messengerMeta202506 property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set messengerMeta202506 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta[] $messengerMeta202506
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Messengers202506Type
     */
    public function setMessengerMeta202506(?array $messengerMeta202506 = null): self
    {
        // validation for constraint: array
        if ('' !== ($messengerMeta202506ArrayErrorMessage = self::validateMessengerMeta202506ForArrayConstraintFromSetMessengerMeta202506($messengerMeta202506))) {
            throw new InvalidArgumentException($messengerMeta202506ArrayErrorMessage, __LINE__);
        }
        if (is_null($messengerMeta202506) || (is_array($messengerMeta202506) && empty($messengerMeta202506))) {
            unset($this->messengerMeta202506);
        } else {
            $this->messengerMeta202506 = $messengerMeta202506;
        }
        
        return $this;
    }
    /**
     * Add item to messengerMeta202506 value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta $item
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Messengers202506Type
     */
    public function addToMessengerMeta202506(\FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta) {
            throw new InvalidArgumentException(sprintf('The messengerMeta202506 property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->messengerMeta202506[] = $item;
        
        return $this;
    }
}
