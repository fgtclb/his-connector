<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TitleValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TitleValue extends AbstractValueMaleFemale
{
    /**
     * The lettersalutation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $lettersalutation = null;
    /**
     * The lettersalutationFemale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $lettersalutationFemale = null;
    /**
     * Constructor method for TitleValue
     * @uses TitleValue::setLettersalutation()
     * @uses TitleValue::setLettersalutationFemale()
     * @param string $lettersalutation
     * @param string $lettersalutationFemale
     */
    public function __construct(?string $lettersalutation = null, ?string $lettersalutationFemale = null)
    {
        $this
            ->setLettersalutation($lettersalutation)
            ->setLettersalutationFemale($lettersalutationFemale);
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
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\TitleValue
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
    /**
     * Get lettersalutationFemale value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLettersalutationFemale(): ?string
    {
        return $this->lettersalutationFemale ?? null;
    }
    /**
     * Set lettersalutationFemale value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lettersalutationFemale
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\TitleValue
     */
    public function setLettersalutationFemale(?string $lettersalutationFemale = null): self
    {
        // validation for constraint: string
        if (!is_null($lettersalutationFemale) && !is_string($lettersalutationFemale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lettersalutationFemale, true), gettype($lettersalutationFemale)), __LINE__);
        }
        if (is_null($lettersalutationFemale) || (is_array($lettersalutationFemale) && empty($lettersalutationFemale))) {
            unset($this->lettersalutationFemale);
        } else {
            $this->lettersalutationFemale = $lettersalutationFemale;
        }
        
        return $this;
    }
}
