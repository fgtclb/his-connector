<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for personAttributeDtosType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonAttributeDtosType extends AbstractStructBase
{
    /**
     * The personAttributeDto
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto[]
     */
    protected ?array $personAttributeDto = null;
    /**
     * Constructor method for personAttributeDtosType
     * @uses PersonAttributeDtosType::setPersonAttributeDto()
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto[] $personAttributeDto
     */
    public function __construct(?array $personAttributeDto = null)
    {
        $this
            ->setPersonAttributeDto($personAttributeDto);
    }
    /**
     * Get personAttributeDto value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto[]
     */
    public function getPersonAttributeDto(): ?array
    {
        return $this->personAttributeDto ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPersonAttributeDto method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonAttributeDto method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonAttributeDtoForArrayConstraintFromSetPersonAttributeDto(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $personAttributeDtosTypePersonAttributeDtoItem) {
            // validation for constraint: itemType
            if (!$personAttributeDtosTypePersonAttributeDtoItem instanceof \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto) {
                $invalidValues[] = is_object($personAttributeDtosTypePersonAttributeDtoItem) ? get_class($personAttributeDtosTypePersonAttributeDtoItem) : sprintf('%s(%s)', gettype($personAttributeDtosTypePersonAttributeDtoItem), var_export($personAttributeDtosTypePersonAttributeDtoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The personAttributeDto property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set personAttributeDto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto[] $personAttributeDto
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDtosType
     */
    public function setPersonAttributeDto(?array $personAttributeDto = null): self
    {
        // validation for constraint: array
        if ('' !== ($personAttributeDtoArrayErrorMessage = self::validatePersonAttributeDtoForArrayConstraintFromSetPersonAttributeDto($personAttributeDto))) {
            throw new InvalidArgumentException($personAttributeDtoArrayErrorMessage, __LINE__);
        }
        if (is_null($personAttributeDto) || (is_array($personAttributeDto) && empty($personAttributeDto))) {
            unset($this->personAttributeDto);
        } else {
            $this->personAttributeDto = $personAttributeDto;
        }
        
        return $this;
    }
    /**
     * Add item to personAttributeDto value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto $item
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDtosType
     */
    public function addToPersonAttributeDto(\FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto) {
            throw new InvalidArgumentException(sprintf('The personAttributeDto property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->personAttributeDto[] = $item;
        
        return $this;
    }
}
