<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for openinghoursType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OpeninghoursType extends AbstractStructBase
{
    /**
     * The openinghoursEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours[]
     */
    protected ?array $openinghoursEntry = null;
    /**
     * Constructor method for openinghoursType
     * @uses OpeninghoursType::setOpeninghoursEntry()
     * @param \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours[] $openinghoursEntry
     */
    public function __construct(?array $openinghoursEntry = null)
    {
        $this
            ->setOpeninghoursEntry($openinghoursEntry);
    }
    /**
     * Get openinghoursEntry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours[]
     */
    public function getOpeninghoursEntry(): ?array
    {
        return $this->openinghoursEntry ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOpeninghoursEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOpeninghoursEntry method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOpeninghoursEntryForArrayConstraintFromSetOpeninghoursEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $openinghoursTypeOpeninghoursEntryItem) {
            // validation for constraint: itemType
            if (!$openinghoursTypeOpeninghoursEntryItem instanceof \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours) {
                $invalidValues[] = is_object($openinghoursTypeOpeninghoursEntryItem) ? get_class($openinghoursTypeOpeninghoursEntryItem) : sprintf('%s(%s)', gettype($openinghoursTypeOpeninghoursEntryItem), var_export($openinghoursTypeOpeninghoursEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The openinghoursEntry property can only contain items of type \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set openinghoursEntry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours[] $openinghoursEntry
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType
     */
    public function setOpeninghoursEntry(?array $openinghoursEntry = null): self
    {
        // validation for constraint: array
        if ('' !== ($openinghoursEntryArrayErrorMessage = self::validateOpeninghoursEntryForArrayConstraintFromSetOpeninghoursEntry($openinghoursEntry))) {
            throw new InvalidArgumentException($openinghoursEntryArrayErrorMessage, __LINE__);
        }
        if (is_null($openinghoursEntry) || (is_array($openinghoursEntry) && empty($openinghoursEntry))) {
            unset($this->openinghoursEntry);
        } else {
            $this->openinghoursEntry = $openinghoursEntry;
        }
        
        return $this;
    }
    /**
     * Add item to openinghoursEntry value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours $item
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType
     */
    public function addToOpeninghoursEntry(\FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours) {
            throw new InvalidArgumentException(sprintf('The openinghoursEntry property can only contain items of type \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->openinghoursEntry[] = $item;
        
        return $this;
    }
}
