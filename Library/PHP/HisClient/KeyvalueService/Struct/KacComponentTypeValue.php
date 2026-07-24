<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KacComponentTypeValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class KacComponentTypeValue extends AbstractKeyValue
{
    /**
     * The kacDeviceType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $kacDeviceType = null;
    /**
     * The kacDeviceName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $kacDeviceName = null;
    /**
     * Constructor method for KacComponentTypeValue
     * @uses KacComponentTypeValue::setKacDeviceType()
     * @uses KacComponentTypeValue::setKacDeviceName()
     * @param string $kacDeviceType
     * @param string $kacDeviceName
     */
    public function __construct(?string $kacDeviceType = null, ?string $kacDeviceName = null)
    {
        $this
            ->setKacDeviceType($kacDeviceType)
            ->setKacDeviceName($kacDeviceName);
    }
    /**
     * Get kacDeviceType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getKacDeviceType(): ?string
    {
        return $this->kacDeviceType ?? null;
    }
    /**
     * Set kacDeviceType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $kacDeviceType
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\KacComponentTypeValue
     */
    public function setKacDeviceType(?string $kacDeviceType = null): self
    {
        // validation for constraint: string
        if (!is_null($kacDeviceType) && !is_string($kacDeviceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kacDeviceType, true), gettype($kacDeviceType)), __LINE__);
        }
        if (is_null($kacDeviceType) || (is_array($kacDeviceType) && empty($kacDeviceType))) {
            unset($this->kacDeviceType);
        } else {
            $this->kacDeviceType = $kacDeviceType;
        }
        
        return $this;
    }
    /**
     * Get kacDeviceName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getKacDeviceName(): ?string
    {
        return $this->kacDeviceName ?? null;
    }
    /**
     * Set kacDeviceName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $kacDeviceName
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\KacComponentTypeValue
     */
    public function setKacDeviceName(?string $kacDeviceName = null): self
    {
        // validation for constraint: string
        if (!is_null($kacDeviceName) && !is_string($kacDeviceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kacDeviceName, true), gettype($kacDeviceName)), __LINE__);
        }
        if (is_null($kacDeviceName) || (is_array($kacDeviceName) && empty($kacDeviceName))) {
            unset($this->kacDeviceName);
        } else {
            $this->kacDeviceName = $kacDeviceName;
        }
        
        return $this;
    }
}
