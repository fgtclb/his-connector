<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for personAttributes202006Type Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonAttributes202006Type extends AbstractStructBase
{
    /**
     * The personAttribute202006
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonAttribute202006[]
     */
    protected ?array $personAttribute202006 = null;
    /**
     * Constructor method for personAttributes202006Type
     * @uses PersonAttributes202006Type::setPersonAttribute202006()
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttribute202006[] $personAttribute202006
     */
    public function __construct(?array $personAttribute202006 = null)
    {
        $this
            ->setPersonAttribute202006($personAttribute202006);
    }
    /**
     * Get personAttribute202006 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttribute202006[]
     */
    public function getPersonAttribute202006(): ?array
    {
        return $this->personAttribute202006 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPersonAttribute202006 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonAttribute202006 method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonAttribute202006ForArrayConstraintFromSetPersonAttribute202006(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $personAttributes202006TypePersonAttribute202006Item) {
            // validation for constraint: itemType
            if (!$personAttributes202006TypePersonAttribute202006Item instanceof \FGTCLB\HisClient\PersonService\Struct\PersonAttribute202006) {
                $invalidValues[] = is_object($personAttributes202006TypePersonAttribute202006Item) ? get_class($personAttributes202006TypePersonAttribute202006Item) : sprintf('%s(%s)', gettype($personAttributes202006TypePersonAttribute202006Item), var_export($personAttributes202006TypePersonAttribute202006Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The personAttribute202006 property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\PersonAttribute202006, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set personAttribute202006 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttribute202006[] $personAttribute202006
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributes202006Type
     */
    public function setPersonAttribute202006(?array $personAttribute202006 = null): self
    {
        // validation for constraint: array
        if ('' !== ($personAttribute202006ArrayErrorMessage = self::validatePersonAttribute202006ForArrayConstraintFromSetPersonAttribute202006($personAttribute202006))) {
            throw new InvalidArgumentException($personAttribute202006ArrayErrorMessage, __LINE__);
        }
        if (is_null($personAttribute202006) || (is_array($personAttribute202006) && empty($personAttribute202006))) {
            unset($this->personAttribute202006);
        } else {
            $this->personAttribute202006 = $personAttribute202006;
        }
        
        return $this;
    }
    /**
     * Add item to personAttribute202006 value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttribute202006 $item
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributes202006Type
     */
    public function addToPersonAttribute202006(\FGTCLB\HisClient\PersonService\Struct\PersonAttribute202006 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonService\Struct\PersonAttribute202006) {
            throw new InvalidArgumentException(sprintf('The personAttribute202006 property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\PersonAttribute202006, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->personAttribute202006[] = $item;
        
        return $this;
    }
}
