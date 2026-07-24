<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for purposesType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PurposesType extends AbstractStructBase
{
    /**
     * The purpose
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto[]
     */
    protected ?array $purpose = null;
    /**
     * Constructor method for purposesType
     * @uses PurposesType::setPurpose()
     * @param \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto[] $purpose
     */
    public function __construct(?array $purpose = null)
    {
        $this
            ->setPurpose($purpose);
    }
    /**
     * Get purpose value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto[]
     */
    public function getPurpose(): ?array
    {
        return $this->purpose ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPurpose method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPurpose method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePurposeForArrayConstraintFromSetPurpose(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $purposesTypePurposeItem) {
            // validation for constraint: itemType
            if (!$purposesTypePurposeItem instanceof \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto) {
                $invalidValues[] = is_object($purposesTypePurposeItem) ? get_class($purposesTypePurposeItem) : sprintf('%s(%s)', gettype($purposesTypePurposeItem), var_export($purposesTypePurposeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The purpose property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set purpose value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto[] $purpose
     * @return \FGTCLB\HisClient\PersonService\Struct\PurposesType
     */
    public function setPurpose(?array $purpose = null): self
    {
        // validation for constraint: array
        if ('' !== ($purposeArrayErrorMessage = self::validatePurposeForArrayConstraintFromSetPurpose($purpose))) {
            throw new InvalidArgumentException($purposeArrayErrorMessage, __LINE__);
        }
        if (is_null($purpose) || (is_array($purpose) && empty($purpose))) {
            unset($this->purpose);
        } else {
            $this->purpose = $purpose;
        }
        
        return $this;
    }
    /**
     * Add item to purpose value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto $item
     * @return \FGTCLB\HisClient\PersonService\Struct\PurposesType
     */
    public function addToPurpose(\FGTCLB\HisClient\PersonService\Struct\PurposeValueDto $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto) {
            throw new InvalidArgumentException(sprintf('The purpose property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->purpose[] = $item;
        
        return $this;
    }
}
