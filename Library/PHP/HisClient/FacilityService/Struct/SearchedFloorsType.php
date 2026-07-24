<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchedFloorsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchedFloorsType extends AbstractStructBase
{
    /**
     * The floorId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $floorId = null;
    /**
     * Constructor method for searchedFloorsType
     * @uses SearchedFloorsType::setFloorId()
     * @param int[] $floorId
     */
    public function __construct(?array $floorId = null)
    {
        $this
            ->setFloorId($floorId);
    }
    /**
     * Get floorId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int[]
     */
    public function getFloorId(): ?array
    {
        return $this->floorId ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFloorId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFloorId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFloorIdForArrayConstraintFromSetFloorId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchedFloorsTypeFloorIdItem) {
            // validation for constraint: itemType
            if (!(is_int($searchedFloorsTypeFloorIdItem) || ctype_digit($searchedFloorsTypeFloorIdItem))) {
                $invalidValues[] = is_object($searchedFloorsTypeFloorIdItem) ? get_class($searchedFloorsTypeFloorIdItem) : sprintf('%s(%s)', gettype($searchedFloorsTypeFloorIdItem), var_export($searchedFloorsTypeFloorIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The floorId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set floorId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param int[] $floorId
     * @return \FGTCLB\HisClient\FacilityService\Struct\SearchedFloorsType
     */
    public function setFloorId(?array $floorId = null): self
    {
        // validation for constraint: array
        if ('' !== ($floorIdArrayErrorMessage = self::validateFloorIdForArrayConstraintFromSetFloorId($floorId))) {
            throw new InvalidArgumentException($floorIdArrayErrorMessage, __LINE__);
        }
        if (is_null($floorId) || (is_array($floorId) && empty($floorId))) {
            unset($this->floorId);
        } else {
            $this->floorId = $floorId;
        }
        
        return $this;
    }
    /**
     * Add item to floorId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \FGTCLB\HisClient\FacilityService\Struct\SearchedFloorsType
     */
    public function addToFloorId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The floorId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->floorId[] = $item;
        
        return $this;
    }
}
