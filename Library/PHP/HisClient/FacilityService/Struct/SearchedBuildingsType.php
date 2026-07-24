<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchedBuildingsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchedBuildingsType extends AbstractStructBase
{
    /**
     * The buildingId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $buildingId = null;
    /**
     * Constructor method for searchedBuildingsType
     * @uses SearchedBuildingsType::setBuildingId()
     * @param int[] $buildingId
     */
    public function __construct(?array $buildingId = null)
    {
        $this
            ->setBuildingId($buildingId);
    }
    /**
     * Get buildingId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int[]
     */
    public function getBuildingId(): ?array
    {
        return $this->buildingId ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBuildingId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBuildingId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuildingIdForArrayConstraintFromSetBuildingId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchedBuildingsTypeBuildingIdItem) {
            // validation for constraint: itemType
            if (!(is_int($searchedBuildingsTypeBuildingIdItem) || ctype_digit($searchedBuildingsTypeBuildingIdItem))) {
                $invalidValues[] = is_object($searchedBuildingsTypeBuildingIdItem) ? get_class($searchedBuildingsTypeBuildingIdItem) : sprintf('%s(%s)', gettype($searchedBuildingsTypeBuildingIdItem), var_export($searchedBuildingsTypeBuildingIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The buildingId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set buildingId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param int[] $buildingId
     * @return \FGTCLB\HisClient\FacilityService\Struct\SearchedBuildingsType
     */
    public function setBuildingId(?array $buildingId = null): self
    {
        // validation for constraint: array
        if ('' !== ($buildingIdArrayErrorMessage = self::validateBuildingIdForArrayConstraintFromSetBuildingId($buildingId))) {
            throw new InvalidArgumentException($buildingIdArrayErrorMessage, __LINE__);
        }
        if (is_null($buildingId) || (is_array($buildingId) && empty($buildingId))) {
            unset($this->buildingId);
        } else {
            $this->buildingId = $buildingId;
        }
        
        return $this;
    }
    /**
     * Add item to buildingId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \FGTCLB\HisClient\FacilityService\Struct\SearchedBuildingsType
     */
    public function addToBuildingId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The buildingId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->buildingId[] = $item;
        
        return $this;
    }
}
