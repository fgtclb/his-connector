<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for exceptionsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExceptionsType extends AbstractStructBase
{
    /**
     * The exceptionEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursException[]
     */
    protected ?array $exceptionEntry = null;
    /**
     * Constructor method for exceptionsType
     * @uses ExceptionsType::setExceptionEntry()
     * @param \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursException[] $exceptionEntry
     */
    public function __construct(?array $exceptionEntry = null)
    {
        $this
            ->setExceptionEntry($exceptionEntry);
    }
    /**
     * Get exceptionEntry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursException[]
     */
    public function getExceptionEntry(): ?array
    {
        return $this->exceptionEntry ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setExceptionEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExceptionEntry method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExceptionEntryForArrayConstraintFromSetExceptionEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $exceptionsTypeExceptionEntryItem) {
            // validation for constraint: itemType
            if (!$exceptionsTypeExceptionEntryItem instanceof \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursException) {
                $invalidValues[] = is_object($exceptionsTypeExceptionEntryItem) ? get_class($exceptionsTypeExceptionEntryItem) : sprintf('%s(%s)', gettype($exceptionsTypeExceptionEntryItem), var_export($exceptionsTypeExceptionEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The exceptionEntry property can only contain items of type \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set exceptionEntry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursException[] $exceptionEntry
     * @return \FGTCLB\HisClient\FacilityService\Struct\ExceptionsType
     */
    public function setExceptionEntry(?array $exceptionEntry = null): self
    {
        // validation for constraint: array
        if ('' !== ($exceptionEntryArrayErrorMessage = self::validateExceptionEntryForArrayConstraintFromSetExceptionEntry($exceptionEntry))) {
            throw new InvalidArgumentException($exceptionEntryArrayErrorMessage, __LINE__);
        }
        if (is_null($exceptionEntry) || (is_array($exceptionEntry) && empty($exceptionEntry))) {
            unset($this->exceptionEntry);
        } else {
            $this->exceptionEntry = $exceptionEntry;
        }
        
        return $this;
    }
    /**
     * Add item to exceptionEntry value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursException $item
     * @return \FGTCLB\HisClient\FacilityService\Struct\ExceptionsType
     */
    public function addToExceptionEntry(\FGTCLB\HisClient\FacilityService\Struct\OpeninghoursException $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursException) {
            throw new InvalidArgumentException(sprintf('The exceptionEntry property can only contain items of type \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->exceptionEntry[] = $item;
        
        return $this;
    }
}
