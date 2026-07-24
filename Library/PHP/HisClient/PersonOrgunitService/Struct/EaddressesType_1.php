<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eaddressesType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EaddressesType_1 extends AbstractStructBase
{
    /**
     * The eaddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonOrgunitService\Struct\EAddress[]
     */
    protected ?array $eaddress = null;
    /**
     * Constructor method for eaddressesType
     * @uses EaddressesType_1::setEaddress()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\EAddress[] $eaddress
     */
    public function __construct(?array $eaddress = null)
    {
        $this
            ->setEaddress($eaddress);
    }
    /**
     * Get eaddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\EAddress[]
     */
    public function getEaddress(): ?array
    {
        return $this->eaddress ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEaddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEaddress method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEaddressForArrayConstraintFromSetEaddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $eaddressesTypeEaddressItem) {
            // validation for constraint: itemType
            if (!$eaddressesTypeEaddressItem instanceof \FGTCLB\HisClient\PersonOrgunitService\Struct\EAddress) {
                $invalidValues[] = is_object($eaddressesTypeEaddressItem) ? get_class($eaddressesTypeEaddressItem) : sprintf('%s(%s)', gettype($eaddressesTypeEaddressItem), var_export($eaddressesTypeEaddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The eaddress property can only contain items of type \FGTCLB\HisClient\PersonOrgunitService\Struct\EAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set eaddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\EAddress[] $eaddress
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\EaddressesType_1
     */
    public function setEaddress(?array $eaddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($eaddressArrayErrorMessage = self::validateEaddressForArrayConstraintFromSetEaddress($eaddress))) {
            throw new InvalidArgumentException($eaddressArrayErrorMessage, __LINE__);
        }
        if (is_null($eaddress) || (is_array($eaddress) && empty($eaddress))) {
            unset($this->eaddress);
        } else {
            $this->eaddress = $eaddress;
        }
        
        return $this;
    }
    /**
     * Add item to eaddress value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\EAddress $item
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\EaddressesType_1
     */
    public function addToEaddress(\FGTCLB\HisClient\PersonOrgunitService\Struct\EAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonOrgunitService\Struct\EAddress) {
            throw new InvalidArgumentException(sprintf('The eaddress property can only contain items of type \FGTCLB\HisClient\PersonOrgunitService\Struct\EAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->eaddress[] = $item;
        
        return $this;
    }
}
