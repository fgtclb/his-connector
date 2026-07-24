<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eaddressInfosType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EaddressInfosType extends AbstractStructBase
{
    /**
     * The eaddressInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfo[]
     */
    protected ?array $eaddressInfo = null;
    /**
     * Constructor method for eaddressInfosType
     * @uses EaddressInfosType::setEaddressInfo()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfo[] $eaddressInfo
     */
    public function __construct(?array $eaddressInfo = null)
    {
        $this
            ->setEaddressInfo($eaddressInfo);
    }
    /**
     * Get eaddressInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfo[]
     */
    public function getEaddressInfo(): ?array
    {
        return $this->eaddressInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEaddressInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEaddressInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEaddressInfoForArrayConstraintFromSetEaddressInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $eaddressInfosTypeEaddressInfoItem) {
            // validation for constraint: itemType
            if (!$eaddressInfosTypeEaddressInfoItem instanceof \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfo) {
                $invalidValues[] = is_object($eaddressInfosTypeEaddressInfoItem) ? get_class($eaddressInfosTypeEaddressInfoItem) : sprintf('%s(%s)', gettype($eaddressInfosTypeEaddressInfoItem), var_export($eaddressInfosTypeEaddressInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The eaddressInfo property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set eaddressInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfo[] $eaddressInfo
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfosType
     */
    public function setEaddressInfo(?array $eaddressInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($eaddressInfoArrayErrorMessage = self::validateEaddressInfoForArrayConstraintFromSetEaddressInfo($eaddressInfo))) {
            throw new InvalidArgumentException($eaddressInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($eaddressInfo) || (is_array($eaddressInfo) && empty($eaddressInfo))) {
            unset($this->eaddressInfo);
        } else {
            $this->eaddressInfo = $eaddressInfo;
        }
        
        return $this;
    }
    /**
     * Add item to eaddressInfo value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfo $item
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfosType
     */
    public function addToEaddressInfo(\FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfo) {
            throw new InvalidArgumentException(sprintf('The eaddressInfo property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\EaddressInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->eaddressInfo[] = $item;
        
        return $this;
    }
}
