<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for childrenType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ChildrenType extends AbstractStructBase
{
    /**
     * The orgunit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit[]
     */
    protected ?array $orgunit = null;
    /**
     * Constructor method for childrenType
     * @uses ChildrenType::setOrgunit()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit[] $orgunit
     */
    public function __construct(?array $orgunit = null)
    {
        $this
            ->setOrgunit($orgunit);
    }
    /**
     * Get orgunit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit[]
     */
    public function getOrgunit(): ?array
    {
        return $this->orgunit ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrgunit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgunit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgunitForArrayConstraintFromSetOrgunit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $childrenTypeOrgunitItem) {
            // validation for constraint: itemType
            if (!$childrenTypeOrgunitItem instanceof \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit) {
                $invalidValues[] = is_object($childrenTypeOrgunitItem) ? get_class($childrenTypeOrgunitItem) : sprintf('%s(%s)', gettype($childrenTypeOrgunitItem), var_export($childrenTypeOrgunitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orgunit property can only contain items of type \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orgunit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit[] $orgunit
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ChildrenType
     */
    public function setOrgunit(?array $orgunit = null): self
    {
        // validation for constraint: array
        if ('' !== ($orgunitArrayErrorMessage = self::validateOrgunitForArrayConstraintFromSetOrgunit($orgunit))) {
            throw new InvalidArgumentException($orgunitArrayErrorMessage, __LINE__);
        }
        if (is_null($orgunit) || (is_array($orgunit) && empty($orgunit))) {
            unset($this->orgunit);
        } else {
            $this->orgunit = $orgunit;
        }
        
        return $this;
    }
    /**
     * Add item to orgunit value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $item
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ChildrenType
     */
    public function addToOrgunit(\FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit) {
            throw new InvalidArgumentException(sprintf('The orgunit property can only contain items of type \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orgunit[] = $item;
        
        return $this;
    }
}
