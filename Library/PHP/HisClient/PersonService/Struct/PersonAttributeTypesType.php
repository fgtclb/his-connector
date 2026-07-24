<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for personAttributeTypesType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonAttributeTypesType extends AbstractStructBase
{
    /**
     * The personAttributeType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto[]
     */
    protected ?array $personAttributeType = null;
    /**
     * Constructor method for personAttributeTypesType
     * @uses PersonAttributeTypesType::setPersonAttributeType()
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto[] $personAttributeType
     */
    public function __construct(?array $personAttributeType = null)
    {
        $this
            ->setPersonAttributeType($personAttributeType);
    }
    /**
     * Get personAttributeType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto[]
     */
    public function getPersonAttributeType(): ?array
    {
        return $this->personAttributeType ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPersonAttributeType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonAttributeType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonAttributeTypeForArrayConstraintFromSetPersonAttributeType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $personAttributeTypesTypePersonAttributeTypeItem) {
            // validation for constraint: itemType
            if (!$personAttributeTypesTypePersonAttributeTypeItem instanceof \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto) {
                $invalidValues[] = is_object($personAttributeTypesTypePersonAttributeTypeItem) ? get_class($personAttributeTypesTypePersonAttributeTypeItem) : sprintf('%s(%s)', gettype($personAttributeTypesTypePersonAttributeTypeItem), var_export($personAttributeTypesTypePersonAttributeTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The personAttributeType property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set personAttributeType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto[] $personAttributeType
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypesType
     */
    public function setPersonAttributeType(?array $personAttributeType = null): self
    {
        // validation for constraint: array
        if ('' !== ($personAttributeTypeArrayErrorMessage = self::validatePersonAttributeTypeForArrayConstraintFromSetPersonAttributeType($personAttributeType))) {
            throw new InvalidArgumentException($personAttributeTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($personAttributeType) || (is_array($personAttributeType) && empty($personAttributeType))) {
            unset($this->personAttributeType);
        } else {
            $this->personAttributeType = $personAttributeType;
        }
        
        return $this;
    }
    /**
     * Add item to personAttributeType value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto $item
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypesType
     */
    public function addToPersonAttributeType(\FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto) {
            throw new InvalidArgumentException(sprintf('The personAttributeType property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->personAttributeType[] = $item;
        
        return $this;
    }
}
