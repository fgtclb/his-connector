<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

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
     * The notificationCategory
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'NotificationCategoryValue'. Examples: COMA, ALU, ALUG, ALUK, ALUR, CA, COM, OFFICE, UP, DOSV
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $notificationCategory = null;
    /**
     * Constructor method for notificationCategoriesType
     * @uses NotificationCategoriesType::setNotificationCategory()
     * @param string[] $notificationCategory
     */
    public function __construct(?array $notificationCategory = null)
    {
        $this
            ->setNotificationCategory($notificationCategory);
    }
    /**
     * Get notificationCategory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]
     */
    public function getNotificationCategory(): ?array
    {
        return $this->notificationCategory ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setNotificationCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotificationCategory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotificationCategoryForArrayConstraintFromSetNotificationCategory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $notificationCategoriesTypeNotificationCategoryItem) {
            // validation for constraint: itemType
            if (!is_string($notificationCategoriesTypeNotificationCategoryItem)) {
                $invalidValues[] = is_object($notificationCategoriesTypeNotificationCategoryItem) ? get_class($notificationCategoriesTypeNotificationCategoryItem) : sprintf('%s(%s)', gettype($notificationCategoriesTypeNotificationCategoryItem), var_export($notificationCategoriesTypeNotificationCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The notificationCategory property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set notificationCategory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param string[] $notificationCategory
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType
     */
    public function setNotificationCategory(?array $notificationCategory = null): self
    {
        // validation for constraint: array
        if ('' !== ($notificationCategoryArrayErrorMessage = self::validateNotificationCategoryForArrayConstraintFromSetNotificationCategory($notificationCategory))) {
            throw new InvalidArgumentException($notificationCategoryArrayErrorMessage, __LINE__);
        }
        if (is_null($notificationCategory) || (is_array($notificationCategory) && empty($notificationCategory))) {
            unset($this->notificationCategory);
        } else {
            $this->notificationCategory = $notificationCategory;
        }
        
        return $this;
    }
    /**
     * Add item to notificationCategory value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\NotificationCategoriesType
     */
    public function addToNotificationCategory(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The notificationCategory property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->notificationCategory[] = $item;
        
        return $this;
    }
}
