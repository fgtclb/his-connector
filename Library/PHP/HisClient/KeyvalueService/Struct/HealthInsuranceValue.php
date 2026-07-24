<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HealthInsuranceValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class HealthInsuranceValue extends AbstractKeyValue
{
    /**
     * The standardCompanyNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $standardCompanyNumber = null;
    /**
     * Constructor method for HealthInsuranceValue
     * @uses HealthInsuranceValue::setStandardCompanyNumber()
     * @param string $standardCompanyNumber
     */
    public function __construct(?string $standardCompanyNumber = null)
    {
        $this
            ->setStandardCompanyNumber($standardCompanyNumber);
    }
    /**
     * Get standardCompanyNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStandardCompanyNumber(): ?string
    {
        return $this->standardCompanyNumber ?? null;
    }
    /**
     * Set standardCompanyNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $standardCompanyNumber
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\HealthInsuranceValue
     */
    public function setStandardCompanyNumber(?string $standardCompanyNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($standardCompanyNumber) && !is_string($standardCompanyNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($standardCompanyNumber, true), gettype($standardCompanyNumber)), __LINE__);
        }
        if (is_null($standardCompanyNumber) || (is_array($standardCompanyNumber) && empty($standardCompanyNumber))) {
            unset($this->standardCompanyNumber);
        } else {
            $this->standardCompanyNumber = $standardCompanyNumber;
        }
        
        return $this;
    }
}
