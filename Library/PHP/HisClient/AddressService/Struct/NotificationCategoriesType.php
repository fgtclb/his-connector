<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for notificationCategoriesType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class NotificationCategoriesType extends AbstractStructBase
{
    /**
     * The notificationCategorie
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\AddressService\Struct\NotificationCategorie[]
     */
    protected ?array $notificationCategorie = null;
    /**
     * Constructor method for notificationCategoriesType
     * @uses NotificationCategoriesType::setNotificationCategorie()
     * @param \FGTCLB\HisClient\AddressService\Struct\NotificationCategorie[] $notificationCategorie
     */
    public function __construct(?array $notificationCategorie = null)
    {
        $this
            ->setNotificationCategorie($notificationCategorie);
    }
    /**
     * Get notificationCategorie value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\AddressService\Struct\NotificationCategorie[]
     */
    public function getNotificationCategorie(): ?array
    {
        return $this->notificationCategorie ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setNotificationCategorie method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotificationCategorie method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotificationCategorieForArrayConstraintFromSetNotificationCategorie(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $notificationCategoriesTypeNotificationCategorieItem) {
            // validation for constraint: itemType
            if (!$notificationCategoriesTypeNotificationCategorieItem instanceof \FGTCLB\HisClient\AddressService\Struct\NotificationCategorie) {
                $invalidValues[] = is_object($notificationCategoriesTypeNotificationCategorieItem) ? get_class($notificationCategoriesTypeNotificationCategorieItem) : sprintf('%s(%s)', gettype($notificationCategoriesTypeNotificationCategorieItem), var_export($notificationCategoriesTypeNotificationCategorieItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The notificationCategorie property can only contain items of type \FGTCLB\HisClient\AddressService\Struct\NotificationCategorie, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set notificationCategorie value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AddressService\Struct\NotificationCategorie[] $notificationCategorie
     * @return \FGTCLB\HisClient\AddressService\Struct\NotificationCategoriesType
     */
    public function setNotificationCategorie(?array $notificationCategorie = null): self
    {
        // validation for constraint: array
        if ('' !== ($notificationCategorieArrayErrorMessage = self::validateNotificationCategorieForArrayConstraintFromSetNotificationCategorie($notificationCategorie))) {
            throw new InvalidArgumentException($notificationCategorieArrayErrorMessage, __LINE__);
        }
        if (is_null($notificationCategorie) || (is_array($notificationCategorie) && empty($notificationCategorie))) {
            unset($this->notificationCategorie);
        } else {
            $this->notificationCategorie = $notificationCategorie;
        }
        
        return $this;
    }
    /**
     * Add item to notificationCategorie value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AddressService\Struct\NotificationCategorie $item
     * @return \FGTCLB\HisClient\AddressService\Struct\NotificationCategoriesType
     */
    public function addToNotificationCategorie(\FGTCLB\HisClient\AddressService\Struct\NotificationCategorie $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\AddressService\Struct\NotificationCategorie) {
            throw new InvalidArgumentException(sprintf('The notificationCategorie property can only contain items of type \FGTCLB\HisClient\AddressService\Struct\NotificationCategorie, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->notificationCategorie[] = $item;
        
        return $this;
    }
}
