<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AccountsType extends AbstractStructBase
{
    /**
     * The account
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonService\Struct\Account[]
     */
    protected ?array $account = null;
    /**
     * Constructor method for accountsType
     * @uses AccountsType::setAccount()
     * @param \FGTCLB\HisClient\PersonService\Struct\Account[] $account
     */
    public function __construct(?array $account = null)
    {
        $this
            ->setAccount($account);
    }
    /**
     * Get account value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonService\Struct\Account[]
     */
    public function getAccount(): ?array
    {
        return $this->account ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccount method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountForArrayConstraintFromSetAccount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountsTypeAccountItem) {
            // validation for constraint: itemType
            if (!$accountsTypeAccountItem instanceof \FGTCLB\HisClient\PersonService\Struct\Account) {
                $invalidValues[] = is_object($accountsTypeAccountItem) ? get_class($accountsTypeAccountItem) : sprintf('%s(%s)', gettype($accountsTypeAccountItem), var_export($accountsTypeAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The account property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\Account, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set account value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\Account[] $account
     * @return \FGTCLB\HisClient\PersonService\Struct\AccountsType
     */
    public function setAccount(?array $account = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountArrayErrorMessage = self::validateAccountForArrayConstraintFromSetAccount($account))) {
            throw new InvalidArgumentException($accountArrayErrorMessage, __LINE__);
        }
        if (is_null($account) || (is_array($account) && empty($account))) {
            unset($this->account);
        } else {
            $this->account = $account;
        }
        
        return $this;
    }
    /**
     * Add item to account value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\Account $item
     * @return \FGTCLB\HisClient\PersonService\Struct\AccountsType
     */
    public function addToAccount(\FGTCLB\HisClient\PersonService\Struct\Account $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonService\Struct\Account) {
            throw new InvalidArgumentException(sprintf('The account property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\Account, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->account[] = $item;
        
        return $this;
    }
}
