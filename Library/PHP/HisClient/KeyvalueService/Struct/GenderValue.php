<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenderValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GenderValue extends AbstractKeyValue
{
    /**
     * The formOfAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $formOfAddress = null;
    /**
     * The lettersalutation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $lettersalutation = null;
    /**
     * Constructor method for GenderValue
     * @uses GenderValue::setFormOfAddress()
     * @uses GenderValue::setLettersalutation()
     * @param string $formOfAddress
     * @param string $lettersalutation
     */
    public function __construct(?string $formOfAddress = null, ?string $lettersalutation = null)
    {
        $this
            ->setFormOfAddress($formOfAddress)
            ->setLettersalutation($lettersalutation);
    }
    /**
     * Get formOfAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFormOfAddress(): ?string
    {
        return $this->formOfAddress ?? null;
    }
    /**
     * Set formOfAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $formOfAddress
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GenderValue
     */
    public function setFormOfAddress(?string $formOfAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($formOfAddress) && !is_string($formOfAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formOfAddress, true), gettype($formOfAddress)), __LINE__);
        }
        if (is_null($formOfAddress) || (is_array($formOfAddress) && empty($formOfAddress))) {
            unset($this->formOfAddress);
        } else {
            $this->formOfAddress = $formOfAddress;
        }
        
        return $this;
    }
    /**
     * Get lettersalutation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLettersalutation(): ?string
    {
        return $this->lettersalutation ?? null;
    }
    /**
     * Set lettersalutation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lettersalutation
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GenderValue
     */
    public function setLettersalutation(?string $lettersalutation = null): self
    {
        // validation for constraint: string
        if (!is_null($lettersalutation) && !is_string($lettersalutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lettersalutation, true), gettype($lettersalutation)), __LINE__);
        }
        if (is_null($lettersalutation) || (is_array($lettersalutation) && empty($lettersalutation))) {
            unset($this->lettersalutation);
        } else {
            $this->lettersalutation = $lettersalutation;
        }
        
        return $this;
    }
}
