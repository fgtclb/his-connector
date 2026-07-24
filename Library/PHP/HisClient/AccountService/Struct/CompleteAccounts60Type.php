<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for completeAccounts60Type Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CompleteAccounts60Type extends AbstractStructBase
{
    /**
     * The completeAccount60
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60[]
     */
    protected ?array $completeAccount60 = null;
    /**
     * Constructor method for completeAccounts60Type
     * @uses CompleteAccounts60Type::setCompleteAccount60()
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60[] $completeAccount60
     */
    public function __construct(?array $completeAccount60 = null)
    {
        $this
            ->setCompleteAccount60($completeAccount60);
    }
    /**
     * Get completeAccount60 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60[]
     */
    public function getCompleteAccount60(): ?array
    {
        return $this->completeAccount60 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCompleteAccount60 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompleteAccount60 method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompleteAccount60ForArrayConstraintFromSetCompleteAccount60(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $completeAccounts60TypeCompleteAccount60Item) {
            // validation for constraint: itemType
            if (!$completeAccounts60TypeCompleteAccount60Item instanceof \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60) {
                $invalidValues[] = is_object($completeAccounts60TypeCompleteAccount60Item) ? get_class($completeAccounts60TypeCompleteAccount60Item) : sprintf('%s(%s)', gettype($completeAccounts60TypeCompleteAccount60Item), var_export($completeAccounts60TypeCompleteAccount60Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The completeAccount60 property can only contain items of type \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set completeAccount60 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60[] $completeAccount60
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccounts60Type
     */
    public function setCompleteAccount60(?array $completeAccount60 = null): self
    {
        // validation for constraint: array
        if ('' !== ($completeAccount60ArrayErrorMessage = self::validateCompleteAccount60ForArrayConstraintFromSetCompleteAccount60($completeAccount60))) {
            throw new InvalidArgumentException($completeAccount60ArrayErrorMessage, __LINE__);
        }
        if (is_null($completeAccount60) || (is_array($completeAccount60) && empty($completeAccount60))) {
            unset($this->completeAccount60);
        } else {
            $this->completeAccount60 = $completeAccount60;
        }
        
        return $this;
    }
    /**
     * Add item to completeAccount60 value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60 $item
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccounts60Type
     */
    public function addToCompleteAccount60(\FGTCLB\HisClient\AccountService\Struct\CompleteAccount60 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60) {
            throw new InvalidArgumentException(sprintf('The completeAccount60 property can only contain items of type \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->completeAccount60[] = $item;
        
        return $this;
    }
}
