<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for personAddressesByNotifications202506Type Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonAddressesByNotifications202506Type extends AbstractStructBase
{
    /**
     * The personAddressesByNotification202506
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506[]
     */
    protected ?array $personAddressesByNotification202506 = null;
    /**
     * Constructor method for personAddressesByNotifications202506Type
     * @uses PersonAddressesByNotifications202506Type::setPersonAddressesByNotification202506()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506[] $personAddressesByNotification202506
     */
    public function __construct(?array $personAddressesByNotification202506 = null)
    {
        $this
            ->setPersonAddressesByNotification202506($personAddressesByNotification202506);
    }
    /**
     * Get personAddressesByNotification202506 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506[]
     */
    public function getPersonAddressesByNotification202506(): ?array
    {
        return $this->personAddressesByNotification202506 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPersonAddressesByNotification202506 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonAddressesByNotification202506 method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonAddressesByNotification202506ForArrayConstraintFromSetPersonAddressesByNotification202506(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $personAddressesByNotifications202506TypePersonAddressesByNotification202506Item) {
            // validation for constraint: itemType
            if (!$personAddressesByNotifications202506TypePersonAddressesByNotification202506Item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506) {
                $invalidValues[] = is_object($personAddressesByNotifications202506TypePersonAddressesByNotification202506Item) ? get_class($personAddressesByNotifications202506TypePersonAddressesByNotification202506Item) : sprintf('%s(%s)', gettype($personAddressesByNotifications202506TypePersonAddressesByNotification202506Item), var_export($personAddressesByNotifications202506TypePersonAddressesByNotification202506Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The personAddressesByNotification202506 property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set personAddressesByNotification202506 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506[] $personAddressesByNotification202506
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotifications202506Type
     */
    public function setPersonAddressesByNotification202506(?array $personAddressesByNotification202506 = null): self
    {
        // validation for constraint: array
        if ('' !== ($personAddressesByNotification202506ArrayErrorMessage = self::validatePersonAddressesByNotification202506ForArrayConstraintFromSetPersonAddressesByNotification202506($personAddressesByNotification202506))) {
            throw new InvalidArgumentException($personAddressesByNotification202506ArrayErrorMessage, __LINE__);
        }
        if (is_null($personAddressesByNotification202506) || (is_array($personAddressesByNotification202506) && empty($personAddressesByNotification202506))) {
            unset($this->personAddressesByNotification202506);
        } else {
            $this->personAddressesByNotification202506 = $personAddressesByNotification202506;
        }
        
        return $this;
    }
    /**
     * Add item to personAddressesByNotification202506 value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506 $item
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotifications202506Type
     */
    public function addToPersonAddressesByNotification202506(\FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506) {
            throw new InvalidArgumentException(sprintf('The personAddressesByNotification202506 property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->personAddressesByNotification202506[] = $item;
        
        return $this;
    }
}
