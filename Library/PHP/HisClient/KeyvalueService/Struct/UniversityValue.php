<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversityValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UniversityValue extends AbstractKeyValue
{
    /**
     * The vehicleRegistrationPlate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $vehicleRegistrationPlate = null;
    /**
     * The universityType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $universityType = null;
    /**
     * Constructor method for UniversityValue
     * @uses UniversityValue::setVehicleRegistrationPlate()
     * @uses UniversityValue::setUniversityType()
     * @param string $vehicleRegistrationPlate
     * @param string $universityType
     */
    public function __construct(?string $vehicleRegistrationPlate = null, ?string $universityType = null)
    {
        $this
            ->setVehicleRegistrationPlate($vehicleRegistrationPlate)
            ->setUniversityType($universityType);
    }
    /**
     * Get vehicleRegistrationPlate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVehicleRegistrationPlate(): ?string
    {
        return $this->vehicleRegistrationPlate ?? null;
    }
    /**
     * Set vehicleRegistrationPlate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vehicleRegistrationPlate
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\UniversityValue
     */
    public function setVehicleRegistrationPlate(?string $vehicleRegistrationPlate = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleRegistrationPlate) && !is_string($vehicleRegistrationPlate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleRegistrationPlate, true), gettype($vehicleRegistrationPlate)), __LINE__);
        }
        if (is_null($vehicleRegistrationPlate) || (is_array($vehicleRegistrationPlate) && empty($vehicleRegistrationPlate))) {
            unset($this->vehicleRegistrationPlate);
        } else {
            $this->vehicleRegistrationPlate = $vehicleRegistrationPlate;
        }
        
        return $this;
    }
    /**
     * Get universityType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUniversityType(): ?string
    {
        return $this->universityType ?? null;
    }
    /**
     * Set universityType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $universityType
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\UniversityValue
     */
    public function setUniversityType(?string $universityType = null): self
    {
        // validation for constraint: string
        if (!is_null($universityType) && !is_string($universityType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($universityType, true), gettype($universityType)), __LINE__);
        }
        if (is_null($universityType) || (is_array($universityType) && empty($universityType))) {
            unset($this->universityType);
        } else {
            $this->universityType = $universityType;
        }
        
        return $this;
    }
}
