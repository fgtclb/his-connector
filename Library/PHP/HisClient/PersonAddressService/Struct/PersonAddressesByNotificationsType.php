<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for personAddressesByNotificationsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonAddressesByNotificationsType extends AbstractStructBase
{
    /**
     * The personAddressesByNotification
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification[]
     */
    protected ?array $personAddressesByNotification = null;
    /**
     * Constructor method for personAddressesByNotificationsType
     * @uses PersonAddressesByNotificationsType::setPersonAddressesByNotification()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification[] $personAddressesByNotification
     */
    public function __construct(?array $personAddressesByNotification = null)
    {
        $this
            ->setPersonAddressesByNotification($personAddressesByNotification);
    }
    /**
     * Get personAddressesByNotification value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification[]
     */
    public function getPersonAddressesByNotification(): ?array
    {
        return $this->personAddressesByNotification ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPersonAddressesByNotification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonAddressesByNotification method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonAddressesByNotificationForArrayConstraintFromSetPersonAddressesByNotification(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $personAddressesByNotificationsTypePersonAddressesByNotificationItem) {
            // validation for constraint: itemType
            if (!$personAddressesByNotificationsTypePersonAddressesByNotificationItem instanceof \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification) {
                $invalidValues[] = is_object($personAddressesByNotificationsTypePersonAddressesByNotificationItem) ? get_class($personAddressesByNotificationsTypePersonAddressesByNotificationItem) : sprintf('%s(%s)', gettype($personAddressesByNotificationsTypePersonAddressesByNotificationItem), var_export($personAddressesByNotificationsTypePersonAddressesByNotificationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The personAddressesByNotification property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set personAddressesByNotification value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification[] $personAddressesByNotification
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotificationsType
     */
    public function setPersonAddressesByNotification(?array $personAddressesByNotification = null): self
    {
        // validation for constraint: array
        if ('' !== ($personAddressesByNotificationArrayErrorMessage = self::validatePersonAddressesByNotificationForArrayConstraintFromSetPersonAddressesByNotification($personAddressesByNotification))) {
            throw new InvalidArgumentException($personAddressesByNotificationArrayErrorMessage, __LINE__);
        }
        if (is_null($personAddressesByNotification) || (is_array($personAddressesByNotification) && empty($personAddressesByNotification))) {
            unset($this->personAddressesByNotification);
        } else {
            $this->personAddressesByNotification = $personAddressesByNotification;
        }
        
        return $this;
    }
    /**
     * Add item to personAddressesByNotification value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification $item
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotificationsType
     */
    public function addToPersonAddressesByNotification(\FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification) {
            throw new InvalidArgumentException(sprintf('The personAddressesByNotification property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->personAddressesByNotification[] = $item;
        
        return $this;
    }
}
