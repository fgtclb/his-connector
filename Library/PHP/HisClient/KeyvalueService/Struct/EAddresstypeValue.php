<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EAddresstypeValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EAddresstypeValue extends AbstractKeyValue
{
    /**
     * The addresstype
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $addresstype = null;
    /**
     * Constructor method for EAddresstypeValue
     * @uses EAddresstypeValue::setAddresstype()
     * @param string $addresstype
     */
    public function __construct(?string $addresstype = null)
    {
        $this
            ->setAddresstype($addresstype);
    }
    /**
     * Get addresstype value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddresstype(): ?string
    {
        return $this->addresstype ?? null;
    }
    /**
     * Set addresstype value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addresstype
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\EAddresstypeValue
     */
    public function setAddresstype(?string $addresstype = null): self
    {
        // validation for constraint: string
        if (!is_null($addresstype) && !is_string($addresstype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addresstype, true), gettype($addresstype)), __LINE__);
        }
        if (is_null($addresstype) || (is_array($addresstype) && empty($addresstype))) {
            unset($this->addresstype);
        } else {
            $this->addresstype = $addresstype;
        }
        
        return $this;
    }
}
