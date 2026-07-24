<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PurposeValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PurposeValue extends AbstractKeyValue
{
    /**
     * The objecttype
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $objecttype = null;
    /**
     * Constructor method for PurposeValue
     * @uses PurposeValue::setObjecttype()
     * @param string $objecttype
     */
    public function __construct(?string $objecttype = null)
    {
        $this
            ->setObjecttype($objecttype);
    }
    /**
     * Get objecttype value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getObjecttype(): ?string
    {
        return $this->objecttype ?? null;
    }
    /**
     * Set objecttype value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $objecttype
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\PurposeValue
     */
    public function setObjecttype(?string $objecttype = null): self
    {
        // validation for constraint: string
        if (!is_null($objecttype) && !is_string($objecttype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objecttype, true), gettype($objecttype)), __LINE__);
        }
        if (is_null($objecttype) || (is_array($objecttype) && empty($objecttype))) {
            unset($this->objecttype);
        } else {
            $this->objecttype = $objecttype;
        }
        
        return $this;
    }
}
