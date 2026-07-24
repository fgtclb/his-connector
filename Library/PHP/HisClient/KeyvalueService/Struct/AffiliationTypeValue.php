<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AffiliationTypeValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AffiliationTypeValue extends AbstractKeyValue
{
    /**
     * The visibilityValueId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $visibilityValueId = null;
    /**
     * Constructor method for AffiliationTypeValue
     * @uses AffiliationTypeValue::setVisibilityValueId()
     * @param float $visibilityValueId
     */
    public function __construct(?float $visibilityValueId = null)
    {
        $this
            ->setVisibilityValueId($visibilityValueId);
    }
    /**
     * Get visibilityValueId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getVisibilityValueId(): ?float
    {
        return $this->visibilityValueId ?? null;
    }
    /**
     * Set visibilityValueId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $visibilityValueId
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\AffiliationTypeValue
     */
    public function setVisibilityValueId(?float $visibilityValueId = null): self
    {
        // validation for constraint: float
        if (!is_null($visibilityValueId) && !(is_float($visibilityValueId) || is_numeric($visibilityValueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($visibilityValueId, true), gettype($visibilityValueId)), __LINE__);
        }
        if (is_null($visibilityValueId) || (is_array($visibilityValueId) && empty($visibilityValueId))) {
            unset($this->visibilityValueId);
        } else {
            $this->visibilityValueId = $visibilityValueId;
        }
        
        return $this;
    }
}
