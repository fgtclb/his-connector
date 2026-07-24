<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EmailsType extends AbstractStructBase
{
    /**
     * The emailMeta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta[]
     */
    protected ?array $emailMeta = null;
    /**
     * Constructor method for emailsType
     * @uses EmailsType::setEmailMeta()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta[] $emailMeta
     */
    public function __construct(?array $emailMeta = null)
    {
        $this
            ->setEmailMeta($emailMeta);
    }
    /**
     * Get emailMeta value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta[]
     */
    public function getEmailMeta(): ?array
    {
        return $this->emailMeta ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEmailMeta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailMeta method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailMetaForArrayConstraintFromSetEmailMeta(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $emailsTypeEmailMetaItem) {
            // validation for constraint: itemType
            if (!$emailsTypeEmailMetaItem instanceof \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta) {
                $invalidValues[] = is_object($emailsTypeEmailMetaItem) ? get_class($emailsTypeEmailMetaItem) : sprintf('%s(%s)', gettype($emailsTypeEmailMetaItem), var_export($emailsTypeEmailMetaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The emailMeta property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set emailMeta value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta[] $emailMeta
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EmailsType
     */
    public function setEmailMeta(?array $emailMeta = null): self
    {
        // validation for constraint: array
        if ('' !== ($emailMetaArrayErrorMessage = self::validateEmailMetaForArrayConstraintFromSetEmailMeta($emailMeta))) {
            throw new InvalidArgumentException($emailMetaArrayErrorMessage, __LINE__);
        }
        if (is_null($emailMeta) || (is_array($emailMeta) && empty($emailMeta))) {
            unset($this->emailMeta);
        } else {
            $this->emailMeta = $emailMeta;
        }
        
        return $this;
    }
    /**
     * Add item to emailMeta value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta $item
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EmailsType
     */
    public function addToEmailMeta(\FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta) {
            throw new InvalidArgumentException(sprintf('The emailMeta property can only contain items of type \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->emailMeta[] = $item;
        
        return $this;
    }
}
