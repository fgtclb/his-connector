<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for children61Type Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Children61Type extends AbstractStructBase
{
    /**
     * The orgunit61
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61[]
     */
    protected ?array $orgunit61 = null;
    /**
     * Constructor method for children61Type
     * @uses Children61Type::setOrgunit61()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61[] $orgunit61
     */
    public function __construct(?array $orgunit61 = null)
    {
        $this
            ->setOrgunit61($orgunit61);
    }
    /**
     * Get orgunit61 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61[]
     */
    public function getOrgunit61(): ?array
    {
        return $this->orgunit61 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrgunit61 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgunit61 method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgunit61ForArrayConstraintFromSetOrgunit61(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $children61TypeOrgunit61Item) {
            // validation for constraint: itemType
            if (!$children61TypeOrgunit61Item instanceof \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61) {
                $invalidValues[] = is_object($children61TypeOrgunit61Item) ? get_class($children61TypeOrgunit61Item) : sprintf('%s(%s)', gettype($children61TypeOrgunit61Item), var_export($children61TypeOrgunit61Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orgunit61 property can only contain items of type \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orgunit61 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61[] $orgunit61
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Children61Type
     */
    public function setOrgunit61(?array $orgunit61 = null): self
    {
        // validation for constraint: array
        if ('' !== ($orgunit61ArrayErrorMessage = self::validateOrgunit61ForArrayConstraintFromSetOrgunit61($orgunit61))) {
            throw new InvalidArgumentException($orgunit61ArrayErrorMessage, __LINE__);
        }
        if (is_null($orgunit61) || (is_array($orgunit61) && empty($orgunit61))) {
            unset($this->orgunit61);
        } else {
            $this->orgunit61 = $orgunit61;
        }
        
        return $this;
    }
    /**
     * Add item to orgunit61 value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61 $item
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Children61Type
     */
    public function addToOrgunit61(\FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61) {
            throw new InvalidArgumentException(sprintf('The orgunit61 property can only contain items of type \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orgunit61[] = $item;
        
        return $this;
    }
}
