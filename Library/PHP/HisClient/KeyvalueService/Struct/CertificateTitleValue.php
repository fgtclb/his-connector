<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CertificateTitleValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CertificateTitleValue extends AbstractKeyValue
{
    /**
     * The isDefault
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $isDefault = null;
    /**
     * Constructor method for CertificateTitleValue
     * @uses CertificateTitleValue::setIsDefault()
     * @param bool $isDefault
     */
    public function __construct(?bool $isDefault = null)
    {
        $this
            ->setIsDefault($isDefault);
    }
    /**
     * Get isDefault value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault ?? null;
    }
    /**
     * Set isDefault value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isDefault
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\CertificateTitleValue
     */
    public function setIsDefault(?bool $isDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDefault) && !is_bool($isDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefault, true), gettype($isDefault)), __LINE__);
        }
        if (is_null($isDefault) || (is_array($isDefault) && empty($isDefault))) {
            unset($this->isDefault);
        } else {
            $this->isDefault = $isDefault;
        }
        
        return $this;
    }
}
