<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for completeAccountsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CompleteAccountsType extends AbstractStructBase
{
    /**
     * The completeAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\AccountService\Struct\CompleteAccount[]
     */
    protected ?array $completeAccount = null;
    /**
     * Constructor method for completeAccountsType
     * @uses CompleteAccountsType::setCompleteAccount()
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccount[] $completeAccount
     */
    public function __construct(?array $completeAccount = null)
    {
        $this
            ->setCompleteAccount($completeAccount);
    }
    /**
     * Get completeAccount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount[]
     */
    public function getCompleteAccount(): ?array
    {
        return $this->completeAccount ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCompleteAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompleteAccount method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompleteAccountForArrayConstraintFromSetCompleteAccount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $completeAccountsTypeCompleteAccountItem) {
            // validation for constraint: itemType
            if (!$completeAccountsTypeCompleteAccountItem instanceof \FGTCLB\HisClient\AccountService\Struct\CompleteAccount) {
                $invalidValues[] = is_object($completeAccountsTypeCompleteAccountItem) ? get_class($completeAccountsTypeCompleteAccountItem) : sprintf('%s(%s)', gettype($completeAccountsTypeCompleteAccountItem), var_export($completeAccountsTypeCompleteAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The completeAccount property can only contain items of type \FGTCLB\HisClient\AccountService\Struct\CompleteAccount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set completeAccount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccount[] $completeAccount
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccountsType
     */
    public function setCompleteAccount(?array $completeAccount = null): self
    {
        // validation for constraint: array
        if ('' !== ($completeAccountArrayErrorMessage = self::validateCompleteAccountForArrayConstraintFromSetCompleteAccount($completeAccount))) {
            throw new InvalidArgumentException($completeAccountArrayErrorMessage, __LINE__);
        }
        if (is_null($completeAccount) || (is_array($completeAccount) && empty($completeAccount))) {
            unset($this->completeAccount);
        } else {
            $this->completeAccount = $completeAccount;
        }
        
        return $this;
    }
    /**
     * Add item to completeAccount value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccount $item
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccountsType
     */
    public function addToCompleteAccount(\FGTCLB\HisClient\AccountService\Struct\CompleteAccount $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\AccountService\Struct\CompleteAccount) {
            throw new InvalidArgumentException(sprintf('The completeAccount property can only contain items of type \FGTCLB\HisClient\AccountService\Struct\CompleteAccount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->completeAccount[] = $item;
        
        return $this;
    }
}
