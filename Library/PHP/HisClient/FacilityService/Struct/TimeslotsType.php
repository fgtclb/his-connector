<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for timeslotsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TimeslotsType extends AbstractStructBase
{
    /**
     * The timeslot
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursTimeslot[]
     */
    protected ?array $timeslot = null;
    /**
     * Constructor method for timeslotsType
     * @uses TimeslotsType::setTimeslot()
     * @param \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursTimeslot[] $timeslot
     */
    public function __construct(?array $timeslot = null)
    {
        $this
            ->setTimeslot($timeslot);
    }
    /**
     * Get timeslot value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursTimeslot[]
     */
    public function getTimeslot(): ?array
    {
        return $this->timeslot ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTimeslot method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTimeslot method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTimeslotForArrayConstraintFromSetTimeslot(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $timeslotsTypeTimeslotItem) {
            // validation for constraint: itemType
            if (!$timeslotsTypeTimeslotItem instanceof \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursTimeslot) {
                $invalidValues[] = is_object($timeslotsTypeTimeslotItem) ? get_class($timeslotsTypeTimeslotItem) : sprintf('%s(%s)', gettype($timeslotsTypeTimeslotItem), var_export($timeslotsTypeTimeslotItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The timeslot property can only contain items of type \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursTimeslot, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set timeslot value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursTimeslot[] $timeslot
     * @return \FGTCLB\HisClient\FacilityService\Struct\TimeslotsType
     */
    public function setTimeslot(?array $timeslot = null): self
    {
        // validation for constraint: array
        if ('' !== ($timeslotArrayErrorMessage = self::validateTimeslotForArrayConstraintFromSetTimeslot($timeslot))) {
            throw new InvalidArgumentException($timeslotArrayErrorMessage, __LINE__);
        }
        if (is_null($timeslot) || (is_array($timeslot) && empty($timeslot))) {
            unset($this->timeslot);
        } else {
            $this->timeslot = $timeslot;
        }
        
        return $this;
    }
    /**
     * Add item to timeslot value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursTimeslot $item
     * @return \FGTCLB\HisClient\FacilityService\Struct\TimeslotsType
     */
    public function addToTimeslot(\FGTCLB\HisClient\FacilityService\Struct\OpeninghoursTimeslot $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursTimeslot) {
            throw new InvalidArgumentException(sprintf('The timeslot property can only contain items of type \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursTimeslot, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->timeslot[] = $item;
        
        return $this;
    }
}
