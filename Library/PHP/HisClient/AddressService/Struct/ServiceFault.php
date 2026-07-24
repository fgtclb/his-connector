<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceFault Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ServiceFault extends AbstractStructBase
{
    /**
     * The message
     * @var string
     */
    protected string $message;
    /**
     * The rootCause
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $rootCause = null;
    /**
     * The validationMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\AddressService\Struct\ValidationMessage[]
     */
    protected ?array $validationMessage = null;
    /**
     * Constructor method for ServiceFault
     * @uses ServiceFault::setMessage()
     * @uses ServiceFault::setRootCause()
     * @uses ServiceFault::setValidationMessage()
     * @param string $message
     * @param string $rootCause
     * @param \FGTCLB\HisClient\AddressService\Struct\ValidationMessage[] $validationMessage
     */
    public function __construct(string $message, ?string $rootCause = null, ?array $validationMessage = null)
    {
        $this
            ->setMessage($message)
            ->setRootCause($rootCause)
            ->setValidationMessage($validationMessage);
    }
    /**
     * Get message value
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \FGTCLB\HisClient\AddressService\Struct\ServiceFault
     */
    public function setMessage(string $message): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        
        return $this;
    }
    /**
     * Get rootCause value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRootCause(): ?string
    {
        return $this->rootCause ?? null;
    }
    /**
     * Set rootCause value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $rootCause
     * @return \FGTCLB\HisClient\AddressService\Struct\ServiceFault
     */
    public function setRootCause(?string $rootCause = null): self
    {
        // validation for constraint: string
        if (!is_null($rootCause) && !is_string($rootCause)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rootCause, true), gettype($rootCause)), __LINE__);
        }
        if (is_null($rootCause) || (is_array($rootCause) && empty($rootCause))) {
            unset($this->rootCause);
        } else {
            $this->rootCause = $rootCause;
        }
        
        return $this;
    }
    /**
     * Get validationMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\AddressService\Struct\ValidationMessage[]
     */
    public function getValidationMessage(): ?array
    {
        return $this->validationMessage ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setValidationMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValidationMessage method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValidationMessageForArrayConstraintFromSetValidationMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $serviceFaultValidationMessageItem) {
            // validation for constraint: itemType
            if (!$serviceFaultValidationMessageItem instanceof \FGTCLB\HisClient\AddressService\Struct\ValidationMessage) {
                $invalidValues[] = is_object($serviceFaultValidationMessageItem) ? get_class($serviceFaultValidationMessageItem) : sprintf('%s(%s)', gettype($serviceFaultValidationMessageItem), var_export($serviceFaultValidationMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The validationMessage property can only contain items of type \FGTCLB\HisClient\AddressService\Struct\ValidationMessage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set validationMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AddressService\Struct\ValidationMessage[] $validationMessage
     * @return \FGTCLB\HisClient\AddressService\Struct\ServiceFault
     */
    public function setValidationMessage(?array $validationMessage = null): self
    {
        // validation for constraint: array
        if ('' !== ($validationMessageArrayErrorMessage = self::validateValidationMessageForArrayConstraintFromSetValidationMessage($validationMessage))) {
            throw new InvalidArgumentException($validationMessageArrayErrorMessage, __LINE__);
        }
        if (is_null($validationMessage) || (is_array($validationMessage) && empty($validationMessage))) {
            unset($this->validationMessage);
        } else {
            $this->validationMessage = $validationMessage;
        }
        
        return $this;
    }
    /**
     * Add item to validationMessage value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\AddressService\Struct\ValidationMessage $item
     * @return \FGTCLB\HisClient\AddressService\Struct\ServiceFault
     */
    public function addToValidationMessage(\FGTCLB\HisClient\AddressService\Struct\ValidationMessage $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\AddressService\Struct\ValidationMessage) {
            throw new InvalidArgumentException(sprintf('The validationMessage property can only contain items of type \FGTCLB\HisClient\AddressService\Struct\ValidationMessage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->validationMessage[] = $item;
        
        return $this;
    }
}
