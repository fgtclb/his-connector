<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LanguageValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LanguageValue extends AbstractKeyValue
{
    /**
     * The iso_639_1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $iso_639_1 = null;
    /**
     * The iso_639_2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $iso_639_2 = null;
    /**
     * Constructor method for LanguageValue
     * @uses LanguageValue::setIso_639_1()
     * @uses LanguageValue::setIso_639_2()
     * @param string $iso_639_1
     * @param string $iso_639_2
     */
    public function __construct(?string $iso_639_1 = null, ?string $iso_639_2 = null)
    {
        $this
            ->setIso_639_1($iso_639_1)
            ->setIso_639_2($iso_639_2);
    }
    /**
     * Get iso value
     * @return iso
     */
    public function getIso_639_1(): ?string
    {
        return $this->iso_639_1 ?? null;
    }
    /**
     * Set iso value
     * @param iso $iso
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\LanguageValue
     */
    public function setIso_639_1(?string $iso_639_1 = null): self
    {
        // validation for constraint: string
        if (!is_null($iso_639_1) && !is_string($iso_639_1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iso_639_1, true), gettype($iso_639_1)), __LINE__);
        }
        if (is_null($iso_639_1) || (is_array($iso_639_1) && empty($iso_639_1))) {
            unset($this->iso_639_1);
        } else {
            $this->iso_639_1 = $iso_639_1;
        }
        
        return $this;
    }
    /**
     * Get iso value
     * @return iso
     */
    public function getIso_639_2(): ?string
    {
        return $this->iso_639_2 ?? null;
    }
    /**
     * Set iso value
     * @param iso $iso
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\LanguageValue
     */
    public function setIso_639_2(?string $iso_639_2 = null): self
    {
        // validation for constraint: string
        if (!is_null($iso_639_2) && !is_string($iso_639_2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iso_639_2, true), gettype($iso_639_2)), __LINE__);
        }
        if (is_null($iso_639_2) || (is_array($iso_639_2) && empty($iso_639_2))) {
            unset($this->iso_639_2);
        } else {
            $this->iso_639_2 = $iso_639_2;
        }
        
        return $this;
    }
}
