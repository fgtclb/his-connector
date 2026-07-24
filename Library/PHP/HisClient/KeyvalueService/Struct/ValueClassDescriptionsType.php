<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for valueClassDescriptionsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValueClassDescriptionsType extends AbstractStructBase
{
    /**
     * The valueClassDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescription[]
     */
    protected ?array $valueClassDescription = null;
    /**
     * Constructor method for valueClassDescriptionsType
     * @uses ValueClassDescriptionsType::setValueClassDescription()
     * @param \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescription[] $valueClassDescription
     */
    public function __construct(?array $valueClassDescription = null)
    {
        $this
            ->setValueClassDescription($valueClassDescription);
    }
    /**
     * Get valueClassDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescription[]
     */
    public function getValueClassDescription(): ?array
    {
        return $this->valueClassDescription ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setValueClassDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValueClassDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValueClassDescriptionForArrayConstraintFromSetValueClassDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $valueClassDescriptionsTypeValueClassDescriptionItem) {
            // validation for constraint: itemType
            if (!$valueClassDescriptionsTypeValueClassDescriptionItem instanceof \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescription) {
                $invalidValues[] = is_object($valueClassDescriptionsTypeValueClassDescriptionItem) ? get_class($valueClassDescriptionsTypeValueClassDescriptionItem) : sprintf('%s(%s)', gettype($valueClassDescriptionsTypeValueClassDescriptionItem), var_export($valueClassDescriptionsTypeValueClassDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The valueClassDescription property can only contain items of type \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescription, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set valueClassDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescription[] $valueClassDescription
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescriptionsType
     */
    public function setValueClassDescription(?array $valueClassDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($valueClassDescriptionArrayErrorMessage = self::validateValueClassDescriptionForArrayConstraintFromSetValueClassDescription($valueClassDescription))) {
            throw new InvalidArgumentException($valueClassDescriptionArrayErrorMessage, __LINE__);
        }
        if (is_null($valueClassDescription) || (is_array($valueClassDescription) && empty($valueClassDescription))) {
            unset($this->valueClassDescription);
        } else {
            $this->valueClassDescription = $valueClassDescription;
        }
        
        return $this;
    }
    /**
     * Add item to valueClassDescription value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescription $item
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescriptionsType
     */
    public function addToValueClassDescription(\FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescription $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescription) {
            throw new InvalidArgumentException(sprintf('The valueClassDescription property can only contain items of type \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescription, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->valueClassDescription[] = $item;
        
        return $this;
    }
}
