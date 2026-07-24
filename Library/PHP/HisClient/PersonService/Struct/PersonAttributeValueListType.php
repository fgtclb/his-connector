<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for personAttributeValueListType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonAttributeValueListType extends AbstractStructBase
{
    /**
     * The personAttributeValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto[]
     */
    protected ?array $personAttributeValue = null;
    /**
     * Constructor method for personAttributeValueListType
     * @uses PersonAttributeValueListType::setPersonAttributeValue()
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto[] $personAttributeValue
     */
    public function __construct(?array $personAttributeValue = null)
    {
        $this
            ->setPersonAttributeValue($personAttributeValue);
    }
    /**
     * Get personAttributeValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto[]
     */
    public function getPersonAttributeValue(): ?array
    {
        return $this->personAttributeValue ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPersonAttributeValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonAttributeValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonAttributeValueForArrayConstraintFromSetPersonAttributeValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $personAttributeValueListTypePersonAttributeValueItem) {
            // validation for constraint: itemType
            if (!$personAttributeValueListTypePersonAttributeValueItem instanceof \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto) {
                $invalidValues[] = is_object($personAttributeValueListTypePersonAttributeValueItem) ? get_class($personAttributeValueListTypePersonAttributeValueItem) : sprintf('%s(%s)', gettype($personAttributeValueListTypePersonAttributeValueItem), var_export($personAttributeValueListTypePersonAttributeValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The personAttributeValue property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set personAttributeValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto[] $personAttributeValue
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListType
     */
    public function setPersonAttributeValue(?array $personAttributeValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($personAttributeValueArrayErrorMessage = self::validatePersonAttributeValueForArrayConstraintFromSetPersonAttributeValue($personAttributeValue))) {
            throw new InvalidArgumentException($personAttributeValueArrayErrorMessage, __LINE__);
        }
        if (is_null($personAttributeValue) || (is_array($personAttributeValue) && empty($personAttributeValue))) {
            unset($this->personAttributeValue);
        } else {
            $this->personAttributeValue = $personAttributeValue;
        }
        
        return $this;
    }
    /**
     * Add item to personAttributeValue value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto $item
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListType
     */
    public function addToPersonAttributeValue(\FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto) {
            throw new InvalidArgumentException(sprintf('The personAttributeValue property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\PersonAttributeValueListDto, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->personAttributeValue[] = $item;
        
        return $this;
    }
}
