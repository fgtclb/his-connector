<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eAddressTypeIdsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EAddressTypeIdsType extends AbstractStructBase
{
    /**
     * The eAddressTypeId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $eAddressTypeId = null;
    /**
     * Constructor method for eAddressTypeIdsType
     * @uses EAddressTypeIdsType::setEAddressTypeId()
     * @param int[] $eAddressTypeId
     */
    public function __construct(?array $eAddressTypeId = null)
    {
        $this
            ->setEAddressTypeId($eAddressTypeId);
    }
    /**
     * Get eAddressTypeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int[]
     */
    public function getEAddressTypeId(): ?array
    {
        return $this->eAddressTypeId ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEAddressTypeId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEAddressTypeId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEAddressTypeIdForArrayConstraintFromSetEAddressTypeId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $eAddressTypeIdsTypeEAddressTypeIdItem) {
            // validation for constraint: itemType
            if (!(is_int($eAddressTypeIdsTypeEAddressTypeIdItem) || ctype_digit($eAddressTypeIdsTypeEAddressTypeIdItem))) {
                $invalidValues[] = is_object($eAddressTypeIdsTypeEAddressTypeIdItem) ? get_class($eAddressTypeIdsTypeEAddressTypeIdItem) : sprintf('%s(%s)', gettype($eAddressTypeIdsTypeEAddressTypeIdItem), var_export($eAddressTypeIdsTypeEAddressTypeIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The eAddressTypeId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set eAddressTypeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param int[] $eAddressTypeId
     * @return \FGTCLB\HisClient\AddressService\Struct\EAddressTypeIdsType
     */
    public function setEAddressTypeId(?array $eAddressTypeId = null): self
    {
        // validation for constraint: array
        if ('' !== ($eAddressTypeIdArrayErrorMessage = self::validateEAddressTypeIdForArrayConstraintFromSetEAddressTypeId($eAddressTypeId))) {
            throw new InvalidArgumentException($eAddressTypeIdArrayErrorMessage, __LINE__);
        }
        if (is_null($eAddressTypeId) || (is_array($eAddressTypeId) && empty($eAddressTypeId))) {
            unset($this->eAddressTypeId);
        } else {
            $this->eAddressTypeId = $eAddressTypeId;
        }
        
        return $this;
    }
    /**
     * Add item to eAddressTypeId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \FGTCLB\HisClient\AddressService\Struct\EAddressTypeIdsType
     */
    public function addToEAddressTypeId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The eAddressTypeId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->eAddressTypeId[] = $item;
        
        return $this;
    }
}
