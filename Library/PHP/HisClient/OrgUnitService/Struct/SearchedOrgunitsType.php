<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchedOrgunitsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchedOrgunitsType extends AbstractStructBase
{
    /**
     * The searchedOrgunit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunit60[]
     */
    protected ?array $searchedOrgunit = null;
    /**
     * Constructor method for searchedOrgunitsType
     * @uses SearchedOrgunitsType::setSearchedOrgunit()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunit60[] $searchedOrgunit
     */
    public function __construct(?array $searchedOrgunit = null)
    {
        $this
            ->setSearchedOrgunit($searchedOrgunit);
    }
    /**
     * Get searchedOrgunit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunit60[]
     */
    public function getSearchedOrgunit(): ?array
    {
        return $this->searchedOrgunit ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSearchedOrgunit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchedOrgunit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchedOrgunitForArrayConstraintFromSetSearchedOrgunit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchedOrgunitsTypeSearchedOrgunitItem) {
            // validation for constraint: itemType
            if (!$searchedOrgunitsTypeSearchedOrgunitItem instanceof \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunit60) {
                $invalidValues[] = is_object($searchedOrgunitsTypeSearchedOrgunitItem) ? get_class($searchedOrgunitsTypeSearchedOrgunitItem) : sprintf('%s(%s)', gettype($searchedOrgunitsTypeSearchedOrgunitItem), var_export($searchedOrgunitsTypeSearchedOrgunitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The searchedOrgunit property can only contain items of type \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunit60, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set searchedOrgunit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunit60[] $searchedOrgunit
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunitsType
     */
    public function setSearchedOrgunit(?array $searchedOrgunit = null): self
    {
        // validation for constraint: array
        if ('' !== ($searchedOrgunitArrayErrorMessage = self::validateSearchedOrgunitForArrayConstraintFromSetSearchedOrgunit($searchedOrgunit))) {
            throw new InvalidArgumentException($searchedOrgunitArrayErrorMessage, __LINE__);
        }
        if (is_null($searchedOrgunit) || (is_array($searchedOrgunit) && empty($searchedOrgunit))) {
            unset($this->searchedOrgunit);
        } else {
            $this->searchedOrgunit = $searchedOrgunit;
        }
        
        return $this;
    }
    /**
     * Add item to searchedOrgunit value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunit60 $item
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunitsType
     */
    public function addToSearchedOrgunit(\FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunit60 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunit60) {
            throw new InvalidArgumentException(sprintf('The searchedOrgunit property can only contain items of type \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunit60, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->searchedOrgunit[] = $item;
        
        return $this;
    }
}
