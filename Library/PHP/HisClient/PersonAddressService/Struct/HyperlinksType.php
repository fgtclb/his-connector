<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for hyperlinksType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class HyperlinksType extends AbstractStructBase
{
    /**
     * The hyperlinkMeta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta[]
     */
    protected ?array $hyperlinkMeta = null;
    /**
     * Constructor method for hyperlinksType
     * @uses HyperlinksType::setHyperlinkMeta()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta[] $hyperlinkMeta
     */
    public function __construct(?array $hyperlinkMeta = null)
    {
        $this
            ->setHyperlinkMeta($hyperlinkMeta);
    }
    /**
     * Get hyperlinkMeta value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta[]
     */
    public function getHyperlinkMeta(): ?array
    {
        return $this->hyperlinkMeta ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHyperlinkMeta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHyperlinkMeta method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHyperlinkMetaForArrayConstraintFromSetHyperlinkMeta(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hyperlinksTypeHyperlinkMetaItem) {
            // validation for constraint: itemType
            if (!$hyperlinksTypeHyperlinkMetaItem instanceof \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta) {
                $invalidValues[] = is_object($hyperlinksTypeHyperlinkMetaItem) ? get_class($hyperlinksTypeHyperlinkMetaItem) : sprintf('%s(%s)', gettype($hyperlinksTypeHyperlinkMetaItem), var_export($hyperlinksTypeHyperlinkMetaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The hyperlinkMeta property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set hyperlinkMeta value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta[] $hyperlinkMeta
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinksType
     */
    public function setHyperlinkMeta(?array $hyperlinkMeta = null): self
    {
        // validation for constraint: array
        if ('' !== ($hyperlinkMetaArrayErrorMessage = self::validateHyperlinkMetaForArrayConstraintFromSetHyperlinkMeta($hyperlinkMeta))) {
            throw new InvalidArgumentException($hyperlinkMetaArrayErrorMessage, __LINE__);
        }
        if (is_null($hyperlinkMeta) || (is_array($hyperlinkMeta) && empty($hyperlinkMeta))) {
            unset($this->hyperlinkMeta);
        } else {
            $this->hyperlinkMeta = $hyperlinkMeta;
        }
        
        return $this;
    }
    /**
     * Add item to hyperlinkMeta value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta $item
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinksType
     */
    public function addToHyperlinkMeta(\FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta) {
            throw new InvalidArgumentException(sprintf('The hyperlinkMeta property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->hyperlinkMeta[] = $item;
        
        return $this;
    }
}
