<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findPersonIdentifiersResultType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindPersonIdentifiersResultType extends AbstractStructBase
{
    /**
     * The personIdentifierInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonIdentifierInfo[]
     */
    protected ?array $personIdentifierInfo = null;
    /**
     * Constructor method for findPersonIdentifiersResultType
     * @uses FindPersonIdentifiersResultType::setPersonIdentifierInfo()
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonIdentifierInfo[] $personIdentifierInfo
     */
    public function __construct(?array $personIdentifierInfo = null)
    {
        $this
            ->setPersonIdentifierInfo($personIdentifierInfo);
    }
    /**
     * Get personIdentifierInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonIdentifierInfo[]
     */
    public function getPersonIdentifierInfo(): ?array
    {
        return $this->personIdentifierInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPersonIdentifierInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonIdentifierInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonIdentifierInfoForArrayConstraintFromSetPersonIdentifierInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $findPersonIdentifiersResultTypePersonIdentifierInfoItem) {
            // validation for constraint: itemType
            if (!$findPersonIdentifiersResultTypePersonIdentifierInfoItem instanceof \FGTCLB\HisClient\PersonService\Struct\PersonIdentifierInfo) {
                $invalidValues[] = is_object($findPersonIdentifiersResultTypePersonIdentifierInfoItem) ? get_class($findPersonIdentifiersResultTypePersonIdentifierInfoItem) : sprintf('%s(%s)', gettype($findPersonIdentifiersResultTypePersonIdentifierInfoItem), var_export($findPersonIdentifiersResultTypePersonIdentifierInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The personIdentifierInfo property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\PersonIdentifierInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set personIdentifierInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonIdentifierInfo[] $personIdentifierInfo
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPersonIdentifiersResultType
     */
    public function setPersonIdentifierInfo(?array $personIdentifierInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($personIdentifierInfoArrayErrorMessage = self::validatePersonIdentifierInfoForArrayConstraintFromSetPersonIdentifierInfo($personIdentifierInfo))) {
            throw new InvalidArgumentException($personIdentifierInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($personIdentifierInfo) || (is_array($personIdentifierInfo) && empty($personIdentifierInfo))) {
            unset($this->personIdentifierInfo);
        } else {
            $this->personIdentifierInfo = $personIdentifierInfo;
        }
        
        return $this;
    }
    /**
     * Add item to personIdentifierInfo value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonIdentifierInfo $item
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPersonIdentifiersResultType
     */
    public function addToPersonIdentifierInfo(\FGTCLB\HisClient\PersonService\Struct\PersonIdentifierInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonService\Struct\PersonIdentifierInfo) {
            throw new InvalidArgumentException(sprintf('The personIdentifierInfo property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\PersonIdentifierInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->personIdentifierInfo[] = $item;
        
        return $this;
    }
}
