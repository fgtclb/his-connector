<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for roomOrgunitsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoomOrgunitsType extends AbstractStructBase
{
    /**
     * The orgunit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\FacilityService\Struct\RoomOrgunit[]
     */
    protected ?array $orgunit = null;
    /**
     * Constructor method for roomOrgunitsType
     * @uses RoomOrgunitsType::setOrgunit()
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomOrgunit[] $orgunit
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomOrgunit[]
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
        foreach ($values as $roomOrgunitsTypeOrgunitItem) {
            // validation for constraint: itemType
            if (!$roomOrgunitsTypeOrgunitItem instanceof \FGTCLB\HisClient\FacilityService\Struct\RoomOrgunit) {
                $invalidValues[] = is_object($roomOrgunitsTypeOrgunitItem) ? get_class($roomOrgunitsTypeOrgunitItem) : sprintf('%s(%s)', gettype($roomOrgunitsTypeOrgunitItem), var_export($roomOrgunitsTypeOrgunitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orgunit property can only contain items of type \FGTCLB\HisClient\FacilityService\Struct\RoomOrgunit, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orgunit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomOrgunit[] $orgunit
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomOrgunitsType
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
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomOrgunit $item
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomOrgunitsType
     */
    public function addToOrgunit(\FGTCLB\HisClient\FacilityService\Struct\RoomOrgunit $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\FacilityService\Struct\RoomOrgunit) {
            throw new InvalidArgumentException(sprintf('The orgunit property can only contain items of type \FGTCLB\HisClient\FacilityService\Struct\RoomOrgunit, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orgunit[] = $item;
        
        return $this;
    }
}
