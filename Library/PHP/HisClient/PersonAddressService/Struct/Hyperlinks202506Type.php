<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for hyperlinks202506Type Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Hyperlinks202506Type extends AbstractStructBase
{
    /**
     * The hyperlinkMeta202506
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta[]
     */
    protected ?array $hyperlinkMeta202506 = null;
    /**
     * Constructor method for hyperlinks202506Type
     * @uses Hyperlinks202506Type::setHyperlinkMeta202506()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta[] $hyperlinkMeta202506
     */
    public function __construct(?array $hyperlinkMeta202506 = null)
    {
        $this
            ->setHyperlinkMeta202506($hyperlinkMeta202506);
    }
    /**
     * Get hyperlinkMeta202506 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta[]
     */
    public function getHyperlinkMeta202506(): ?array
    {
        return $this->hyperlinkMeta202506 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHyperlinkMeta202506 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHyperlinkMeta202506 method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHyperlinkMeta202506ForArrayConstraintFromSetHyperlinkMeta202506(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hyperlinks202506TypeHyperlinkMeta202506Item) {
            // validation for constraint: itemType
            if (!$hyperlinks202506TypeHyperlinkMeta202506Item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta) {
                $invalidValues[] = is_object($hyperlinks202506TypeHyperlinkMeta202506Item) ? get_class($hyperlinks202506TypeHyperlinkMeta202506Item) : sprintf('%s(%s)', gettype($hyperlinks202506TypeHyperlinkMeta202506Item), var_export($hyperlinks202506TypeHyperlinkMeta202506Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The hyperlinkMeta202506 property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set hyperlinkMeta202506 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta[] $hyperlinkMeta202506
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlinks202506Type
     */
    public function setHyperlinkMeta202506(?array $hyperlinkMeta202506 = null): self
    {
        // validation for constraint: array
        if ('' !== ($hyperlinkMeta202506ArrayErrorMessage = self::validateHyperlinkMeta202506ForArrayConstraintFromSetHyperlinkMeta202506($hyperlinkMeta202506))) {
            throw new InvalidArgumentException($hyperlinkMeta202506ArrayErrorMessage, __LINE__);
        }
        if (is_null($hyperlinkMeta202506) || (is_array($hyperlinkMeta202506) && empty($hyperlinkMeta202506))) {
            unset($this->hyperlinkMeta202506);
        } else {
            $this->hyperlinkMeta202506 = $hyperlinkMeta202506;
        }
        
        return $this;
    }
    /**
     * Add item to hyperlinkMeta202506 value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta $item
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlinks202506Type
     */
    public function addToHyperlinkMeta202506(\FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta) {
            throw new InvalidArgumentException(sprintf('The hyperlinkMeta202506 property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->hyperlinkMeta202506[] = $item;
        
        return $this;
    }
}
