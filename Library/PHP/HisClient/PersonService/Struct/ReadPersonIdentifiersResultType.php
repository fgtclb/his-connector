<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readPersonIdentifiersResultType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadPersonIdentifiersResultType extends AbstractStructBase
{
    /**
     * The personIdentifier
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier[]
     */
    protected ?array $personIdentifier = null;
    /**
     * Constructor method for readPersonIdentifiersResultType
     * @uses ReadPersonIdentifiersResultType::setPersonIdentifier()
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier[] $personIdentifier
     */
    public function __construct(?array $personIdentifier = null)
    {
        $this
            ->setPersonIdentifier($personIdentifier);
    }
    /**
     * Get personIdentifier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier[]
     */
    public function getPersonIdentifier(): ?array
    {
        return $this->personIdentifier ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPersonIdentifier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonIdentifier method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonIdentifierForArrayConstraintFromSetPersonIdentifier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $readPersonIdentifiersResultTypePersonIdentifierItem) {
            // validation for constraint: itemType
            if (!$readPersonIdentifiersResultTypePersonIdentifierItem instanceof \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier) {
                $invalidValues[] = is_object($readPersonIdentifiersResultTypePersonIdentifierItem) ? get_class($readPersonIdentifiersResultTypePersonIdentifierItem) : sprintf('%s(%s)', gettype($readPersonIdentifiersResultTypePersonIdentifierItem), var_export($readPersonIdentifiersResultTypePersonIdentifierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The personIdentifier property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set personIdentifier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier[] $personIdentifier
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPersonIdentifiersResultType
     */
    public function setPersonIdentifier(?array $personIdentifier = null): self
    {
        // validation for constraint: array
        if ('' !== ($personIdentifierArrayErrorMessage = self::validatePersonIdentifierForArrayConstraintFromSetPersonIdentifier($personIdentifier))) {
            throw new InvalidArgumentException($personIdentifierArrayErrorMessage, __LINE__);
        }
        if (is_null($personIdentifier) || (is_array($personIdentifier) && empty($personIdentifier))) {
            unset($this->personIdentifier);
        } else {
            $this->personIdentifier = $personIdentifier;
        }
        
        return $this;
    }
    /**
     * Add item to personIdentifier value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier $item
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPersonIdentifiersResultType
     */
    public function addToPersonIdentifier(\FGTCLB\HisClient\PersonService\Struct\PersonIdentifier $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier) {
            throw new InvalidArgumentException(sprintf('The personIdentifier property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->personIdentifier[] = $item;
        
        return $this;
    }
}
