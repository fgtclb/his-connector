<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for postAddressIdsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PostAddressIdsType extends AbstractStructBase
{
    /**
     * The postAddressId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $postAddressId = null;
    /**
     * Constructor method for postAddressIdsType
     * @uses PostAddressIdsType::setPostAddressId()
     * @param int[] $postAddressId
     */
    public function __construct(?array $postAddressId = null)
    {
        $this
            ->setPostAddressId($postAddressId);
    }
    /**
     * Get postAddressId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int[]
     */
    public function getPostAddressId(): ?array
    {
        return $this->postAddressId ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPostAddressId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPostAddressId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePostAddressIdForArrayConstraintFromSetPostAddressId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $postAddressIdsTypePostAddressIdItem) {
            // validation for constraint: itemType
            if (!(is_int($postAddressIdsTypePostAddressIdItem) || ctype_digit($postAddressIdsTypePostAddressIdItem))) {
                $invalidValues[] = is_object($postAddressIdsTypePostAddressIdItem) ? get_class($postAddressIdsTypePostAddressIdItem) : sprintf('%s(%s)', gettype($postAddressIdsTypePostAddressIdItem), var_export($postAddressIdsTypePostAddressIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The postAddressId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set postAddressId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param int[] $postAddressId
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAddressIdsType
     */
    public function setPostAddressId(?array $postAddressId = null): self
    {
        // validation for constraint: array
        if ('' !== ($postAddressIdArrayErrorMessage = self::validatePostAddressIdForArrayConstraintFromSetPostAddressId($postAddressId))) {
            throw new InvalidArgumentException($postAddressIdArrayErrorMessage, __LINE__);
        }
        if (is_null($postAddressId) || (is_array($postAddressId) && empty($postAddressId))) {
            unset($this->postAddressId);
        } else {
            $this->postAddressId = $postAddressId;
        }
        
        return $this;
    }
    /**
     * Add item to postAddressId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAddressIdsType
     */
    public function addToPostAddressId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The postAddressId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->postAddressId[] = $item;
        
        return $this;
    }
}
