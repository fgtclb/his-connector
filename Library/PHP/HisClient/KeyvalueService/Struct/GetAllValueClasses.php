<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAllValueClasses Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllValueClasses extends AbstractStructBase
{
    /**
     * The lang
     * @var string
     */
    protected string $lang;
    /**
     * Constructor method for getAllValueClasses
     * @uses GetAllValueClasses::setLang()
     * @param string $lang
     */
    public function __construct(string $lang)
    {
        $this
            ->setLang($lang);
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
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GetAllValueClasses
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
