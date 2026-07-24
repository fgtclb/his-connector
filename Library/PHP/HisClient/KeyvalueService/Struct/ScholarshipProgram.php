<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ScholarshipProgram Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ScholarshipProgram extends AbstractKeyValue
{
    /**
     * The fundingInstitution
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $fundingInstitution = null;
    /**
     * Constructor method for ScholarshipProgram
     * @uses ScholarshipProgram::setFundingInstitution()
     * @param string $fundingInstitution
     */
    public function __construct(?string $fundingInstitution = null)
    {
        $this
            ->setFundingInstitution($fundingInstitution);
    }
    /**
     * Get fundingInstitution value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFundingInstitution(): ?string
    {
        return $this->fundingInstitution ?? null;
    }
    /**
     * Set fundingInstitution value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fundingInstitution
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ScholarshipProgram
     */
    public function setFundingInstitution(?string $fundingInstitution = null): self
    {
        // validation for constraint: string
        if (!is_null($fundingInstitution) && !is_string($fundingInstitution)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fundingInstitution, true), gettype($fundingInstitution)), __LINE__);
        }
        if (is_null($fundingInstitution) || (is_array($fundingInstitution) && empty($fundingInstitution))) {
            unset($this->fundingInstitution);
        } else {
            $this->fundingInstitution = $fundingInstitution;
        }
        
        return $this;
    }
}
