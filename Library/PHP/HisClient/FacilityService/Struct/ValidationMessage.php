<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidationMessage Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidationMessage extends AbstractStructBase
{
    /**
     * The messageType
     * @var string
     */
    protected string $messageType;
    /**
     * The messageKey
     * @var string
     */
    protected string $messageKey;
    /**
     * The messageParameter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $messageParameter = null;
    /**
     * Constructor method for ValidationMessage
     * @uses ValidationMessage::setMessageType()
     * @uses ValidationMessage::setMessageKey()
     * @uses ValidationMessage::setMessageParameter()
     * @param string $messageType
     * @param string $messageKey
     * @param string[] $messageParameter
     */
    public function __construct(string $messageType, string $messageKey, ?array $messageParameter = null)
    {
        $this
            ->setMessageType($messageType)
            ->setMessageKey($messageKey)
            ->setMessageParameter($messageParameter);
    }
    /**
     * Get messageType value
     * @return string
     */
    public function getMessageType(): string
    {
        return $this->messageType;
    }
    /**
     * Set messageType value
     * @param string $messageType
     * @return \FGTCLB\HisClient\FacilityService\Struct\ValidationMessage
     */
    public function setMessageType(string $messageType): self
    {
        // validation for constraint: string
        if (!is_null($messageType) && !is_string($messageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageType, true), gettype($messageType)), __LINE__);
        }
        $this->messageType = $messageType;
        
        return $this;
    }
    /**
     * Get messageKey value
     * @return string
     */
    public function getMessageKey(): string
    {
        return $this->messageKey;
    }
    /**
     * Set messageKey value
     * @param string $messageKey
     * @return \FGTCLB\HisClient\FacilityService\Struct\ValidationMessage
     */
    public function setMessageKey(string $messageKey): self
    {
        // validation for constraint: string
        if (!is_null($messageKey) && !is_string($messageKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageKey, true), gettype($messageKey)), __LINE__);
        }
        $this->messageKey = $messageKey;
        
        return $this;
    }
    /**
     * Get messageParameter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]
     */
    public function getMessageParameter(): ?array
    {
        return $this->messageParameter ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMessageParameter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessageParameter method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessageParameterForArrayConstraintFromSetMessageParameter(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $validationMessageMessageParameterItem) {
            // validation for constraint: itemType
            if (!is_string($validationMessageMessageParameterItem)) {
                $invalidValues[] = is_object($validationMessageMessageParameterItem) ? get_class($validationMessageMessageParameterItem) : sprintf('%s(%s)', gettype($validationMessageMessageParameterItem), var_export($validationMessageMessageParameterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The messageParameter property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set messageParameter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param string[] $messageParameter
     * @return \FGTCLB\HisClient\FacilityService\Struct\ValidationMessage
     */
    public function setMessageParameter(?array $messageParameter = null): self
    {
        // validation for constraint: array
        if ('' !== ($messageParameterArrayErrorMessage = self::validateMessageParameterForArrayConstraintFromSetMessageParameter($messageParameter))) {
            throw new InvalidArgumentException($messageParameterArrayErrorMessage, __LINE__);
        }
        if (is_null($messageParameter) || (is_array($messageParameter) && empty($messageParameter))) {
            unset($this->messageParameter);
        } else {
            $this->messageParameter = $messageParameter;
        }
        
        return $this;
    }
    /**
     * Add item to messageParameter value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \FGTCLB\HisClient\FacilityService\Struct\ValidationMessage
     */
    public function addToMessageParameter(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The messageParameter property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->messageParameter[] = $item;
        
        return $this;
    }
}
