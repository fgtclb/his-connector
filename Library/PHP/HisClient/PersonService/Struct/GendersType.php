<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for gendersType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GendersType extends AbstractStructBase
{
    /**
     * The gender
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonService\Struct\Gender[]
     */
    protected ?array $gender = null;
    /**
     * Constructor method for gendersType
     * @uses GendersType::setGender()
     * @param \FGTCLB\HisClient\PersonService\Struct\Gender[] $gender
     */
    public function __construct(?array $gender = null)
    {
        $this
            ->setGender($gender);
    }
    /**
     * Get gender value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonService\Struct\Gender[]
     */
    public function getGender(): ?array
    {
        return $this->gender ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGender method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGender method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGenderForArrayConstraintFromSetGender(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $gendersTypeGenderItem) {
            // validation for constraint: itemType
            if (!$gendersTypeGenderItem instanceof \FGTCLB\HisClient\PersonService\Struct\Gender) {
                $invalidValues[] = is_object($gendersTypeGenderItem) ? get_class($gendersTypeGenderItem) : sprintf('%s(%s)', gettype($gendersTypeGenderItem), var_export($gendersTypeGenderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The gender property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\Gender, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set gender value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\Gender[] $gender
     * @return \FGTCLB\HisClient\PersonService\Struct\GendersType
     */
    public function setGender(?array $gender = null): self
    {
        // validation for constraint: array
        if ('' !== ($genderArrayErrorMessage = self::validateGenderForArrayConstraintFromSetGender($gender))) {
            throw new InvalidArgumentException($genderArrayErrorMessage, __LINE__);
        }
        if (is_null($gender) || (is_array($gender) && empty($gender))) {
            unset($this->gender);
        } else {
            $this->gender = $gender;
        }
        
        return $this;
    }
    /**
     * Add item to gender value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\Gender $item
     * @return \FGTCLB\HisClient\PersonService\Struct\GendersType
     */
    public function addToGender(\FGTCLB\HisClient\PersonService\Struct\Gender $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonService\Struct\Gender) {
            throw new InvalidArgumentException(sprintf('The gender property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\Gender, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->gender[] = $item;
        
        return $this;
    }
}
