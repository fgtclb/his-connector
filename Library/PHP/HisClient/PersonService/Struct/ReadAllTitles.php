<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAllTitles Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAllTitles extends AbstractStructBase
{
    /**
     * The language
     * Meta information extracted from the WSDL
     * - documentation: Language to be used if possible, i.e. 'de' oder 'en'.
     * @var string
     */
    protected string $language;
    /**
     * Constructor method for readAllTitles
     * @uses ReadAllTitles::setLanguage()
     * @param string $language
     */
    public function __construct(string $language)
    {
        $this
            ->setLanguage($language);
    }
    /**
     * Get language value
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadAllTitles
     */
    public function setLanguage(string $language): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
}
