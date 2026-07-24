<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eAdressIdsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EAdressIdsType extends AbstractStructBase
{
    /**
     * The eAddressId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $eAddressId = null;
    /**
     * Constructor method for eAdressIdsType
     * @uses EAdressIdsType::setEAddressId()
     * @param int[] $eAddressId
     */
    public function __construct(?array $eAddressId = null)
    {
        $this
            ->setEAddressId($eAddressId);
    }
    /**
     * Get eAddressId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int[]
     */
    public function getEAddressId(): ?array
    {
        return $this->eAddressId ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEAddressId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEAddressId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEAddressIdForArrayConstraintFromSetEAddressId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $eAdressIdsTypeEAddressIdItem) {
            // validation for constraint: itemType
            if (!(is_int($eAdressIdsTypeEAddressIdItem) || ctype_digit($eAdressIdsTypeEAddressIdItem))) {
                $invalidValues[] = is_object($eAdressIdsTypeEAddressIdItem) ? get_class($eAdressIdsTypeEAddressIdItem) : sprintf('%s(%s)', gettype($eAdressIdsTypeEAddressIdItem), var_export($eAdressIdsTypeEAddressIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The eAddressId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set eAddressId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param int[] $eAddressId
     * @return \FGTCLB\HisClient\AddressService\Struct\EAdressIdsType
     */
    public function setEAddressId(?array $eAddressId = null): self
    {
        // validation for constraint: array
        if ('' !== ($eAddressIdArrayErrorMessage = self::validateEAddressIdForArrayConstraintFromSetEAddressId($eAddressId))) {
            throw new InvalidArgumentException($eAddressIdArrayErrorMessage, __LINE__);
        }
        if (is_null($eAddressId) || (is_array($eAddressId) && empty($eAddressId))) {
            unset($this->eAddressId);
        } else {
            $this->eAddressId = $eAddressId;
        }
        
        return $this;
    }
    /**
     * Add item to eAddressId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \FGTCLB\HisClient\AddressService\Struct\EAdressIdsType
     */
    public function addToEAddressId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The eAddressId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->eAddressId[] = $item;
        
        return $this;
    }
}
