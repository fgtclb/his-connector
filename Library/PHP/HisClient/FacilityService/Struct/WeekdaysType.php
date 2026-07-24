<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for weekdaysType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WeekdaysType extends AbstractStructBase
{
    /**
     * The weekdayEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday[]
     */
    protected ?array $weekdayEntry = null;
    /**
     * Constructor method for weekdaysType
     * @uses WeekdaysType::setWeekdayEntry()
     * @param \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday[] $weekdayEntry
     */
    public function __construct(?array $weekdayEntry = null)
    {
        $this
            ->setWeekdayEntry($weekdayEntry);
    }
    /**
     * Get weekdayEntry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday[]
     */
    public function getWeekdayEntry(): ?array
    {
        return $this->weekdayEntry ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setWeekdayEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWeekdayEntry method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWeekdayEntryForArrayConstraintFromSetWeekdayEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $weekdaysTypeWeekdayEntryItem) {
            // validation for constraint: itemType
            if (!$weekdaysTypeWeekdayEntryItem instanceof \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday) {
                $invalidValues[] = is_object($weekdaysTypeWeekdayEntryItem) ? get_class($weekdaysTypeWeekdayEntryItem) : sprintf('%s(%s)', gettype($weekdaysTypeWeekdayEntryItem), var_export($weekdaysTypeWeekdayEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The weekdayEntry property can only contain items of type \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set weekdayEntry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday[] $weekdayEntry
     * @return \FGTCLB\HisClient\FacilityService\Struct\WeekdaysType
     */
    public function setWeekdayEntry(?array $weekdayEntry = null): self
    {
        // validation for constraint: array
        if ('' !== ($weekdayEntryArrayErrorMessage = self::validateWeekdayEntryForArrayConstraintFromSetWeekdayEntry($weekdayEntry))) {
            throw new InvalidArgumentException($weekdayEntryArrayErrorMessage, __LINE__);
        }
        if (is_null($weekdayEntry) || (is_array($weekdayEntry) && empty($weekdayEntry))) {
            unset($this->weekdayEntry);
        } else {
            $this->weekdayEntry = $weekdayEntry;
        }
        
        return $this;
    }
    /**
     * Add item to weekdayEntry value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday $item
     * @return \FGTCLB\HisClient\FacilityService\Struct\WeekdaysType
     */
    public function addToWeekdayEntry(\FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday) {
            throw new InvalidArgumentException(sprintf('The weekdayEntry property can only contain items of type \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->weekdayEntry[] = $item;
        
        return $this;
    }
}
