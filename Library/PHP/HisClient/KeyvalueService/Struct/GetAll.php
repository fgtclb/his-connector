<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAll Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAll extends AbstractStructBase
{
    /**
     * The valueClass
     * Meta information extracted from the WSDL
     * - documentation: Name of the value class, i.e. TitleValue.
     * @var string
     */
    protected string $valueClass;
    /**
     * The lang
     * Meta information extracted from the WSDL
     * - documentation: Language to be used is given like 'de' oder 'en'.
     * @var string
     */
    protected string $lang;
    /**
     * Constructor method for getAll
     * @uses GetAll::setValueClass()
     * @uses GetAll::setLang()
     * @param string $valueClass
     * @param string $lang
     */
    public function __construct(string $valueClass, string $lang)
    {
        $this
            ->setValueClass($valueClass)
            ->setLang($lang);
    }
    /**
     * Get valueClass value
     * @return string
     */
    public function getValueClass(): string
    {
        return $this->valueClass;
    }
    /**
     * Set valueClass value
     * @param string $valueClass
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GetAll
     */
    public function setValueClass(string $valueClass): self
    {
        // validation for constraint: string
        if (!is_null($valueClass) && !is_string($valueClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valueClass, true), gettype($valueClass)), __LINE__);
        }
        $this->valueClass = $valueClass;
        
        return $this;
    }
    /**
     * Get lang value
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }
    /**
     * Set lang value
     * @param string $lang
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GetAll
     */
    public function setLang(string $lang): self
    {
        // validation for constraint: string
        if (!is_null($lang) && !is_string($lang)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lang, true), gettype($lang)), __LINE__);
        }
        $this->lang = $lang;
        
        return $this;
    }
}
