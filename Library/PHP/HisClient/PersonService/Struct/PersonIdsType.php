<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for personIdsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonIdsType extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $id = null;
    /**
     * Constructor method for personIdsType
     * @uses PersonIdsType::setId()
     * @param int[] $id
     */
    public function __construct(?array $id = null)
    {
        $this
            ->setId($id);
    }
    /**
     * Get id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int[]
     */
    public function getId(): ?array
    {
        return $this->id ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdForArrayConstraintFromSetId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $personIdsTypeIdItem) {
            // validation for constraint: itemType
            if (!(is_int($personIdsTypeIdItem) || ctype_digit($personIdsTypeIdItem))) {
                $invalidValues[] = is_object($personIdsTypeIdItem) ? get_class($personIdsTypeIdItem) : sprintf('%s(%s)', gettype($personIdsTypeIdItem), var_export($personIdsTypeIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The id property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param int[] $id
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonIdsType
     */
    public function setId(?array $id = null): self
    {
        // validation for constraint: array
        if ('' !== ($idArrayErrorMessage = self::validateIdForArrayConstraintFromSetId($id))) {
            throw new InvalidArgumentException($idArrayErrorMessage, __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
        }
        
        return $this;
    }
    /**
     * Add item to id value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonIdsType
     */
    public function addToId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The id property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->id[] = $item;
        
        return $this;
    }
}
