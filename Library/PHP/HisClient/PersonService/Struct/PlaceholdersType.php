<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for placeholdersType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PlaceholdersType extends AbstractStructBase
{
    /**
     * The placeholder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonService\Struct\Placeholder[]
     */
    protected ?array $placeholder = null;
    /**
     * Constructor method for placeholdersType
     * @uses PlaceholdersType::setPlaceholder()
     * @param \FGTCLB\HisClient\PersonService\Struct\Placeholder[] $placeholder
     */
    public function __construct(?array $placeholder = null)
    {
        $this
            ->setPlaceholder($placeholder);
    }
    /**
     * Get placeholder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonService\Struct\Placeholder[]
     */
    public function getPlaceholder(): ?array
    {
        return $this->placeholder ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPlaceholder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPlaceholder method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePlaceholderForArrayConstraintFromSetPlaceholder(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $placeholdersTypePlaceholderItem) {
            // validation for constraint: itemType
            if (!$placeholdersTypePlaceholderItem instanceof \FGTCLB\HisClient\PersonService\Struct\Placeholder) {
                $invalidValues[] = is_object($placeholdersTypePlaceholderItem) ? get_class($placeholdersTypePlaceholderItem) : sprintf('%s(%s)', gettype($placeholdersTypePlaceholderItem), var_export($placeholdersTypePlaceholderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The placeholder property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\Placeholder, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set placeholder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\Placeholder[] $placeholder
     * @return \FGTCLB\HisClient\PersonService\Struct\PlaceholdersType
     */
    public function setPlaceholder(?array $placeholder = null): self
    {
        // validation for constraint: array
        if ('' !== ($placeholderArrayErrorMessage = self::validatePlaceholderForArrayConstraintFromSetPlaceholder($placeholder))) {
            throw new InvalidArgumentException($placeholderArrayErrorMessage, __LINE__);
        }
        if (is_null($placeholder) || (is_array($placeholder) && empty($placeholder))) {
            unset($this->placeholder);
        } else {
            $this->placeholder = $placeholder;
        }
        
        return $this;
    }
    /**
     * Add item to placeholder value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\Placeholder $item
     * @return \FGTCLB\HisClient\PersonService\Struct\PlaceholdersType
     */
    public function addToPlaceholder(\FGTCLB\HisClient\PersonService\Struct\Placeholder $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonService\Struct\Placeholder) {
            throw new InvalidArgumentException(sprintf('The placeholder property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\Placeholder, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->placeholder[] = $item;
        
        return $this;
    }
}
