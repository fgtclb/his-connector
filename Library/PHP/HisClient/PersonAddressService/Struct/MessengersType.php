<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for messengersType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MessengersType extends AbstractStructBase
{
    /**
     * The messengerMeta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta[]
     */
    protected ?array $messengerMeta = null;
    /**
     * Constructor method for messengersType
     * @uses MessengersType::setMessengerMeta()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta[] $messengerMeta
     */
    public function __construct(?array $messengerMeta = null)
    {
        $this
            ->setMessengerMeta($messengerMeta);
    }
    /**
     * Get messengerMeta value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta[]
     */
    public function getMessengerMeta(): ?array
    {
        return $this->messengerMeta ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMessengerMeta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessengerMeta method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessengerMetaForArrayConstraintFromSetMessengerMeta(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $messengersTypeMessengerMetaItem) {
            // validation for constraint: itemType
            if (!$messengersTypeMessengerMetaItem instanceof \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta) {
                $invalidValues[] = is_object($messengersTypeMessengerMetaItem) ? get_class($messengersTypeMessengerMetaItem) : sprintf('%s(%s)', gettype($messengersTypeMessengerMetaItem), var_export($messengersTypeMessengerMetaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The messengerMeta property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set messengerMeta value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta[] $messengerMeta
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\MessengersType
     */
    public function setMessengerMeta(?array $messengerMeta = null): self
    {
        // validation for constraint: array
        if ('' !== ($messengerMetaArrayErrorMessage = self::validateMessengerMetaForArrayConstraintFromSetMessengerMeta($messengerMeta))) {
            throw new InvalidArgumentException($messengerMetaArrayErrorMessage, __LINE__);
        }
        if (is_null($messengerMeta) || (is_array($messengerMeta) && empty($messengerMeta))) {
            unset($this->messengerMeta);
        } else {
            $this->messengerMeta = $messengerMeta;
        }
        
        return $this;
    }
    /**
     * Add item to messengerMeta value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta $item
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\MessengersType
     */
    public function addToMessengerMeta(\FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta) {
            throw new InvalidArgumentException(sprintf('The messengerMeta property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->messengerMeta[] = $item;
        
        return $this;
    }
}
