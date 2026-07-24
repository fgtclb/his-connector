<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emails202506Type Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Emails202506Type extends AbstractStructBase
{
    /**
     * The emailMeta202506
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta202506[]
     */
    protected ?array $emailMeta202506 = null;
    /**
     * Constructor method for emails202506Type
     * @uses Emails202506Type::setEmailMeta202506()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta202506[] $emailMeta202506
     */
    public function __construct(?array $emailMeta202506 = null)
    {
        $this
            ->setEmailMeta202506($emailMeta202506);
    }
    /**
     * Get emailMeta202506 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta202506[]
     */
    public function getEmailMeta202506(): ?array
    {
        return $this->emailMeta202506 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEmailMeta202506 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailMeta202506 method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailMeta202506ForArrayConstraintFromSetEmailMeta202506(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $emails202506TypeEmailMeta202506Item) {
            // validation for constraint: itemType
            if (!$emails202506TypeEmailMeta202506Item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta202506) {
                $invalidValues[] = is_object($emails202506TypeEmailMeta202506Item) ? get_class($emails202506TypeEmailMeta202506Item) : sprintf('%s(%s)', gettype($emails202506TypeEmailMeta202506Item), var_export($emails202506TypeEmailMeta202506Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The emailMeta202506 property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta202506, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set emailMeta202506 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta202506[] $emailMeta202506
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Emails202506Type
     */
    public function setEmailMeta202506(?array $emailMeta202506 = null): self
    {
        // validation for constraint: array
        if ('' !== ($emailMeta202506ArrayErrorMessage = self::validateEmailMeta202506ForArrayConstraintFromSetEmailMeta202506($emailMeta202506))) {
            throw new InvalidArgumentException($emailMeta202506ArrayErrorMessage, __LINE__);
        }
        if (is_null($emailMeta202506) || (is_array($emailMeta202506) && empty($emailMeta202506))) {
            unset($this->emailMeta202506);
        } else {
            $this->emailMeta202506 = $emailMeta202506;
        }
        
        return $this;
    }
    /**
     * Add item to emailMeta202506 value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta202506 $item
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Emails202506Type
     */
    public function addToEmailMeta202506(\FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta202506 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta202506) {
            throw new InvalidArgumentException(sprintf('The emailMeta202506 property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta202506, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->emailMeta202506[] = $item;
        
        return $this;
    }
}
