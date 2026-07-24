<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchBuilding Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchBuilding extends AbstractStructBase
{
    /**
     * The uniquename
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $uniquename = null;
    /**
     * Constructor method for searchBuilding
     * @uses SearchBuilding::setUniquename()
     * @param string $uniquename
     */
    public function __construct(?string $uniquename = null)
    {
        $this
            ->setUniquename($uniquename);
    }
    /**
     * Get uniquename value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUniquename(): ?string
    {
        return $this->uniquename ?? null;
    }
    /**
     * Set uniquename value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $uniquename
     * @return \FGTCLB\HisClient\FacilityService\Struct\SearchBuilding
     */
    public function setUniquename(?string $uniquename = null): self
    {
        // validation for constraint: string
        if (!is_null($uniquename) && !is_string($uniquename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uniquename, true), gettype($uniquename)), __LINE__);
        }
        if (is_null($uniquename) || (is_array($uniquename) && empty($uniquename))) {
            unset($this->uniquename);
        } else {
            $this->uniquename = $uniquename;
        }
        
        return $this;
    }
}
