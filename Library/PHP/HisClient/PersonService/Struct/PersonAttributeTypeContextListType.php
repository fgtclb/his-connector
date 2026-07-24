<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for personAttributeTypeContextListType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonAttributeTypeContextListType extends AbstractStructBase
{
    /**
     * The personAttributeTypeContext
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextDto[]
     */
    protected ?array $personAttributeTypeContext = null;
    /**
     * Constructor method for personAttributeTypeContextListType
     * @uses PersonAttributeTypeContextListType::setPersonAttributeTypeContext()
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextDto[] $personAttributeTypeContext
     */
    public function __construct(?array $personAttributeTypeContext = null)
    {
        $this
            ->setPersonAttributeTypeContext($personAttributeTypeContext);
    }
    /**
     * Get personAttributeTypeContext value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextDto[]
     */
    public function getPersonAttributeTypeContext(): ?array
    {
        return $this->personAttributeTypeContext ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPersonAttributeTypeContext method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonAttributeTypeContext method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonAttributeTypeContextForArrayConstraintFromSetPersonAttributeTypeContext(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $personAttributeTypeContextListTypePersonAttributeTypeContextItem) {
            // validation for constraint: itemType
            if (!$personAttributeTypeContextListTypePersonAttributeTypeContextItem instanceof \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextDto) {
                $invalidValues[] = is_object($personAttributeTypeContextListTypePersonAttributeTypeContextItem) ? get_class($personAttributeTypeContextListTypePersonAttributeTypeContextItem) : sprintf('%s(%s)', gettype($personAttributeTypeContextListTypePersonAttributeTypeContextItem), var_export($personAttributeTypeContextListTypePersonAttributeTypeContextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The personAttributeTypeContext property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextDto, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set personAttributeTypeContext value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextDto[] $personAttributeTypeContext
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextListType
     */
    public function setPersonAttributeTypeContext(?array $personAttributeTypeContext = null): self
    {
        // validation for constraint: array
        if ('' !== ($personAttributeTypeContextArrayErrorMessage = self::validatePersonAttributeTypeContextForArrayConstraintFromSetPersonAttributeTypeContext($personAttributeTypeContext))) {
            throw new InvalidArgumentException($personAttributeTypeContextArrayErrorMessage, __LINE__);
        }
        if (is_null($personAttributeTypeContext) || (is_array($personAttributeTypeContext) && empty($personAttributeTypeContext))) {
            unset($this->personAttributeTypeContext);
        } else {
            $this->personAttributeTypeContext = $personAttributeTypeContext;
        }
        
        return $this;
    }
    /**
     * Add item to personAttributeTypeContext value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextDto $item
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextListType
     */
    public function addToPersonAttributeTypeContext(\FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextDto $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextDto) {
            throw new InvalidArgumentException(sprintf('The personAttributeTypeContext property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextDto, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->personAttributeTypeContext[] = $item;
        
        return $this;
    }
}
