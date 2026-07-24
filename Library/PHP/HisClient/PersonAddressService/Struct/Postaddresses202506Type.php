<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for postaddresses202506Type Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Postaddresses202506Type extends AbstractStructBase
{
    /**
     * The postaddressMeta202506
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta[]
     */
    protected ?array $postaddressMeta202506 = null;
    /**
     * Constructor method for postaddresses202506Type
     * @uses Postaddresses202506Type::setPostaddressMeta202506()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta[] $postaddressMeta202506
     */
    public function __construct(?array $postaddressMeta202506 = null)
    {
        $this
            ->setPostaddressMeta202506($postaddressMeta202506);
    }
    /**
     * Get postaddressMeta202506 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta[]
     */
    public function getPostaddressMeta202506(): ?array
    {
        return $this->postaddressMeta202506 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPostaddressMeta202506 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPostaddressMeta202506 method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePostaddressMeta202506ForArrayConstraintFromSetPostaddressMeta202506(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $postaddresses202506TypePostaddressMeta202506Item) {
            // validation for constraint: itemType
            if (!$postaddresses202506TypePostaddressMeta202506Item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta) {
                $invalidValues[] = is_object($postaddresses202506TypePostaddressMeta202506Item) ? get_class($postaddresses202506TypePostaddressMeta202506Item) : sprintf('%s(%s)', gettype($postaddresses202506TypePostaddressMeta202506Item), var_export($postaddresses202506TypePostaddressMeta202506Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The postaddressMeta202506 property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set postaddressMeta202506 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta[] $postaddressMeta202506
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Postaddresses202506Type
     */
    public function setPostaddressMeta202506(?array $postaddressMeta202506 = null): self
    {
        // validation for constraint: array
        if ('' !== ($postaddressMeta202506ArrayErrorMessage = self::validatePostaddressMeta202506ForArrayConstraintFromSetPostaddressMeta202506($postaddressMeta202506))) {
            throw new InvalidArgumentException($postaddressMeta202506ArrayErrorMessage, __LINE__);
        }
        if (is_null($postaddressMeta202506) || (is_array($postaddressMeta202506) && empty($postaddressMeta202506))) {
            unset($this->postaddressMeta202506);
        } else {
            $this->postaddressMeta202506 = $postaddressMeta202506;
        }
        
        return $this;
    }
    /**
     * Add item to postaddressMeta202506 value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta $item
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Postaddresses202506Type
     */
    public function addToPostaddressMeta202506(\FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta) {
            throw new InvalidArgumentException(sprintf('The postaddressMeta202506 property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->postaddressMeta202506[] = $item;
        
        return $this;
    }
}
