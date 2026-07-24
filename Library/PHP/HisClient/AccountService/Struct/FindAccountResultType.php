<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findAccountResultType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindAccountResultType extends AbstractStructBase
{
    /**
     * The accountInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\AccountService\Struct\AccountInfo[]
     */
    protected ?array $accountInfo = null;
    /**
     * Constructor method for findAccountResultType
     * @uses FindAccountResultType::setAccountInfo()
     * @param \FGTCLB\HisClient\AccountService\Struct\AccountInfo[] $accountInfo
     */
    public function __construct(?array $accountInfo = null)
    {
        $this
            ->setAccountInfo($accountInfo);
    }
    /**
     * Get accountInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\AccountService\Struct\AccountInfo[]
     */
    public function getAccountInfo(): ?array
    {
        return $this->accountInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAccountInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountInfoForArrayConstraintFromSetAccountInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $findAccountResultTypeAccountInfoItem) {
            // validation for constraint: itemType
            if (!$findAccountResultTypeAccountInfoItem instanceof \FGTCLB\HisClient\AccountService\Struct\AccountInfo) {
                $invalidValues[] = is_object($findAccountResultTypeAccountInfoItem) ? get_class($findAccountResultTypeAccountInfoItem) : sprintf('%s(%s)', gettype($findAccountResultTypeAccountInfoItem), var_export($findAccountResultTypeAccountInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The accountInfo property can only contain items of type \FGTCLB\HisClient\AccountService\Struct\AccountInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set accountInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AccountService\Struct\AccountInfo[] $accountInfo
     * @return \FGTCLB\HisClient\AccountService\Struct\FindAccountResultType
     */
    public function setAccountInfo(?array $accountInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountInfoArrayErrorMessage = self::validateAccountInfoForArrayConstraintFromSetAccountInfo($accountInfo))) {
            throw new InvalidArgumentException($accountInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($accountInfo) || (is_array($accountInfo) && empty($accountInfo))) {
            unset($this->accountInfo);
        } else {
            $this->accountInfo = $accountInfo;
        }
        
        return $this;
    }
    /**
     * Add item to accountInfo value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AccountService\Struct\AccountInfo $item
     * @return \FGTCLB\HisClient\AccountService\Struct\FindAccountResultType
     */
    public function addToAccountInfo(\FGTCLB\HisClient\AccountService\Struct\AccountInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\AccountService\Struct\AccountInfo) {
            throw new InvalidArgumentException(sprintf('The accountInfo property can only contain items of type \FGTCLB\HisClient\AccountService\Struct\AccountInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->accountInfo[] = $item;
        
        return $this;
    }
}
