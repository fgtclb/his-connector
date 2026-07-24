<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for savedAccountsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SavedAccountsType extends AbstractStructBase
{
    /**
     * The savedAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\AccountService\Struct\CompleteAccount[]
     */
    protected ?array $savedAccount = null;
    /**
     * Constructor method for savedAccountsType
     * @uses SavedAccountsType::setSavedAccount()
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccount[] $savedAccount
     */
    public function __construct(?array $savedAccount = null)
    {
        $this
            ->setSavedAccount($savedAccount);
    }
    /**
     * Get savedAccount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount[]
     */
    public function getSavedAccount(): ?array
    {
        return $this->savedAccount ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSavedAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSavedAccount method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSavedAccountForArrayConstraintFromSetSavedAccount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedAccountsTypeSavedAccountItem) {
            // validation for constraint: itemType
            if (!$savedAccountsTypeSavedAccountItem instanceof \FGTCLB\HisClient\AccountService\Struct\CompleteAccount) {
                $invalidValues[] = is_object($savedAccountsTypeSavedAccountItem) ? get_class($savedAccountsTypeSavedAccountItem) : sprintf('%s(%s)', gettype($savedAccountsTypeSavedAccountItem), var_export($savedAccountsTypeSavedAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The savedAccount property can only contain items of type \FGTCLB\HisClient\AccountService\Struct\CompleteAccount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set savedAccount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccount[] $savedAccount
     * @return \FGTCLB\HisClient\AccountService\Struct\SavedAccountsType
     */
    public function setSavedAccount(?array $savedAccount = null): self
    {
        // validation for constraint: array
        if ('' !== ($savedAccountArrayErrorMessage = self::validateSavedAccountForArrayConstraintFromSetSavedAccount($savedAccount))) {
            throw new InvalidArgumentException($savedAccountArrayErrorMessage, __LINE__);
        }
        if (is_null($savedAccount) || (is_array($savedAccount) && empty($savedAccount))) {
            unset($this->savedAccount);
        } else {
            $this->savedAccount = $savedAccount;
        }
        
        return $this;
    }
    /**
     * Add item to savedAccount value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccount $item
     * @return \FGTCLB\HisClient\AccountService\Struct\SavedAccountsType
     */
    public function addToSavedAccount(\FGTCLB\HisClient\AccountService\Struct\CompleteAccount $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\AccountService\Struct\CompleteAccount) {
            throw new InvalidArgumentException(sprintf('The savedAccount property can only contain items of type \FGTCLB\HisClient\AccountService\Struct\CompleteAccount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->savedAccount[] = $item;
        
        return $this;
    }
}
