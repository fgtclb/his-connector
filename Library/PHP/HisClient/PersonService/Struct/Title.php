<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Title Struct
 * Meta information extracted from the WSDL
 * - documentation: Contains basic information for titles.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Title extends Value
{
    /**
     * The defaulttextFemale
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $defaulttextFemale = null;
    /**
     * Constructor method for Title
     * @uses Title::setDefaulttextFemale()
     * @param string $defaulttextFemale
     */
    public function __construct(?string $defaulttextFemale = null)
    {
        $this
            ->setDefaulttextFemale($defaulttextFemale);
    }
    /**
     * Get defaulttextFemale value
     * @return string|null
     */
    public function getDefaulttextFemale(): ?string
    {
        return $this->defaulttextFemale;
    }
    /**
     * Set defaulttextFemale value
     * @param string $defaulttextFemale
     * @return \FGTCLB\HisClient\PersonService\Struct\Title
     */
    public function setDefaulttextFemale(?string $defaulttextFemale = null): self
    {
        // validation for constraint: string
        if (!is_null($defaulttextFemale) && !is_string($defaulttextFemale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaulttextFemale, true), gettype($defaulttextFemale)), __LINE__);
        }
        $this->defaulttextFemale = $defaulttextFemale;
        
        return $this;
    }
}
