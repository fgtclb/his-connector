<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for valuesXtdType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValuesXtdType extends AbstractStructBase
{
    /**
     * The value
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\KeyvalueService\Struct\AbstractKeyValue[]
     */
    protected ?array $value = null;
    /**
     * Constructor method for valuesXtdType
     * @uses ValuesXtdType::setValue()
     * @param \FGTCLB\HisClient\KeyvalueService\Struct\AbstractKeyValue[] $value
     */
    public function __construct(?array $value = null)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\AbstractKeyValue[]
     */
    public function getValue(): ?array
    {
        return $this->value ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValueForArrayConstraintFromSetValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $valuesXtdTypeValueItem) {
            // validation for constraint: itemType
            if (!$valuesXtdTypeValueItem instanceof \FGTCLB\HisClient\KeyvalueService\Struct\AbstractKeyValue) {
                $invalidValues[] = is_object($valuesXtdTypeValueItem) ? get_class($valuesXtdTypeValueItem) : sprintf('%s(%s)', gettype($valuesXtdTypeValueItem), var_export($valuesXtdTypeValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The value property can only contain items of type \FGTCLB\HisClient\KeyvalueService\Struct\AbstractKeyValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\KeyvalueService\Struct\AbstractKeyValue[] $value
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ValuesXtdType
     */
    public function setValue(?array $value = null): self
    {
        // validation for constraint: array
        if ('' !== ($valueArrayErrorMessage = self::validateValueForArrayConstraintFromSetValue($value))) {
            throw new InvalidArgumentException($valueArrayErrorMessage, __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->value);
        } else {
            $this->value = $value;
        }
        
        return $this;
    }
    /**
     * Add item to value value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\KeyvalueService\Struct\AbstractKeyValue $item
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ValuesXtdType
     */
    public function addToValue(\FGTCLB\HisClient\KeyvalueService\Struct\AbstractKeyValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\KeyvalueService\Struct\AbstractKeyValue) {
            throw new InvalidArgumentException(sprintf('The value property can only contain items of type \FGTCLB\HisClient\KeyvalueService\Struct\AbstractKeyValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->value[] = $item;
        
        return $this;
    }
}
