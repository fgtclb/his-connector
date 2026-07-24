<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for plannedDatesType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PlannedDatesType extends AbstractStructBase
{
    /**
     * The plannedDateId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $plannedDateId = null;
    /**
     * Constructor method for plannedDatesType
     * @uses PlannedDatesType::setPlannedDateId()
     * @param int[] $plannedDateId
     */
    public function __construct(?array $plannedDateId = null)
    {
        $this
            ->setPlannedDateId($plannedDateId);
    }
    /**
     * Get plannedDateId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int[]
     */
    public function getPlannedDateId(): ?array
    {
        return $this->plannedDateId ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPlannedDateId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPlannedDateId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePlannedDateIdForArrayConstraintFromSetPlannedDateId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $plannedDatesTypePlannedDateIdItem) {
            // validation for constraint: itemType
            if (!(is_int($plannedDatesTypePlannedDateIdItem) || ctype_digit($plannedDatesTypePlannedDateIdItem))) {
                $invalidValues[] = is_object($plannedDatesTypePlannedDateIdItem) ? get_class($plannedDatesTypePlannedDateIdItem) : sprintf('%s(%s)', gettype($plannedDatesTypePlannedDateIdItem), var_export($plannedDatesTypePlannedDateIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The plannedDateId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set plannedDateId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param int[] $plannedDateId
     * @return \FGTCLB\HisClient\FacilityService\Struct\PlannedDatesType
     */
    public function setPlannedDateId(?array $plannedDateId = null): self
    {
        // validation for constraint: array
        if ('' !== ($plannedDateIdArrayErrorMessage = self::validatePlannedDateIdForArrayConstraintFromSetPlannedDateId($plannedDateId))) {
            throw new InvalidArgumentException($plannedDateIdArrayErrorMessage, __LINE__);
        }
        if (is_null($plannedDateId) || (is_array($plannedDateId) && empty($plannedDateId))) {
            unset($this->plannedDateId);
        } else {
            $this->plannedDateId = $plannedDateId;
        }
        
        return $this;
    }
    /**
     * Add item to plannedDateId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \FGTCLB\HisClient\FacilityService\Struct\PlannedDatesType
     */
    public function addToPlannedDateId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The plannedDateId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->plannedDateId[] = $item;
        
        return $this;
    }
}
