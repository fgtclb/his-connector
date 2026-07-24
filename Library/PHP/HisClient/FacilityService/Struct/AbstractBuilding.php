<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbstractBuilding Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AbstractBuilding extends I18nValue
{
    /**
     * The uniquename
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $uniquename = null;
    /**
     * Constructor method for AbstractBuilding
     * @uses AbstractBuilding::setUniquename()
     * @param string $uniquename
     */
    public function __construct(?string $uniquename = null)
    {
        $this
            ->setUniquename($uniquename);
    }
    /**
     * Get uniquename value
     * @return string|null
     */
    public function getUniquename(): ?string
    {
        return $this->uniquename;
    }
    /**
     * Set uniquename value
     * @param string $uniquename
     * @return \FGTCLB\HisClient\FacilityService\Struct\AbstractBuilding
     */
    public function setUniquename(?string $uniquename = null): self
    {
        // validation for constraint: string
        if (!is_null($uniquename) && !is_string($uniquename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uniquename, true), gettype($uniquename)), __LINE__);
        }
        $this->uniquename = $uniquename;
        
        return $this;
    }
}
