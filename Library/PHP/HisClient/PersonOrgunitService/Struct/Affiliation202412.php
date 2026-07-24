<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Affiliation202412 Struct
 * Meta information extracted from the WSDL
 * - documentation: Load additional data for given affiliation.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Affiliation202412 extends Affiliation
{
    /**
     * The visibilityValueId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $visibilityValueId = null;
    /**
     * The supplement
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $supplement = null;
    /**
     * Constructor method for Affiliation202412
     * @uses Affiliation202412::setVisibilityValueId()
     * @uses Affiliation202412::setSupplement()
     * @param int $visibilityValueId
     * @param string $supplement
     */
    public function __construct(?int $visibilityValueId = null, ?string $supplement = null)
    {
        $this
            ->setVisibilityValueId($visibilityValueId)
            ->setSupplement($supplement);
    }
    /**
     * Get visibilityValueId value
     * @return int|null
     */
    public function getVisibilityValueId(): ?int
    {
        return $this->visibilityValueId;
    }
    /**
     * Set visibilityValueId value
     * @param int $visibilityValueId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation202412
     */
    public function setVisibilityValueId(?int $visibilityValueId = null): self
    {
        // validation for constraint: int
        if (!is_null($visibilityValueId) && !(is_int($visibilityValueId) || ctype_digit($visibilityValueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($visibilityValueId, true), gettype($visibilityValueId)), __LINE__);
        }
        $this->visibilityValueId = $visibilityValueId;
        
        return $this;
    }
    /**
     * Get supplement value
     * @return string|null
     */
    public function getSupplement(): ?string
    {
        return $this->supplement;
    }
    /**
     * Set supplement value
     * @param string $supplement
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation202412
     */
    public function setSupplement(?string $supplement = null): self
    {
        // validation for constraint: string
        if (!is_null($supplement) && !is_string($supplement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplement, true), gettype($supplement)), __LINE__);
        }
        $this->supplement = $supplement;
        
        return $this;
    }
}
