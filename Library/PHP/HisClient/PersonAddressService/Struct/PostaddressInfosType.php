<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for postaddressInfosType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PostaddressInfosType extends AbstractStructBase
{
    /**
     * The postaddressInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfo[]
     */
    protected ?array $postaddressInfo = null;
    /**
     * Constructor method for postaddressInfosType
     * @uses PostaddressInfosType::setPostaddressInfo()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfo[] $postaddressInfo
     */
    public function __construct(?array $postaddressInfo = null)
    {
        $this
            ->setPostaddressInfo($postaddressInfo);
    }
    /**
     * Get postaddressInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfo[]
     */
    public function getPostaddressInfo(): ?array
    {
        return $this->postaddressInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPostaddressInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPostaddressInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePostaddressInfoForArrayConstraintFromSetPostaddressInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $postaddressInfosTypePostaddressInfoItem) {
            // validation for constraint: itemType
            if (!$postaddressInfosTypePostaddressInfoItem instanceof \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfo) {
                $invalidValues[] = is_object($postaddressInfosTypePostaddressInfoItem) ? get_class($postaddressInfosTypePostaddressInfoItem) : sprintf('%s(%s)', gettype($postaddressInfosTypePostaddressInfoItem), var_export($postaddressInfosTypePostaddressInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The postaddressInfo property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set postaddressInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfo[] $postaddressInfo
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfosType
     */
    public function setPostaddressInfo(?array $postaddressInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($postaddressInfoArrayErrorMessage = self::validatePostaddressInfoForArrayConstraintFromSetPostaddressInfo($postaddressInfo))) {
            throw new InvalidArgumentException($postaddressInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($postaddressInfo) || (is_array($postaddressInfo) && empty($postaddressInfo))) {
            unset($this->postaddressInfo);
        } else {
            $this->postaddressInfo = $postaddressInfo;
        }
        
        return $this;
    }
    /**
     * Add item to postaddressInfo value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfo $item
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfosType
     */
    public function addToPostaddressInfo(\FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfo) {
            throw new InvalidArgumentException(sprintf('The postaddressInfo property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->postaddressInfo[] = $item;
        
        return $this;
    }
}
