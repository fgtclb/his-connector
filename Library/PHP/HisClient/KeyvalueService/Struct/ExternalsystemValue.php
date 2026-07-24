<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalsystemValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalsystemValue extends AbstractKeyValue
{
    /**
     * The connectioninfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $connectioninfo = null;
    /**
     * Constructor method for ExternalsystemValue
     * @uses ExternalsystemValue::setConnectioninfo()
     * @param string $connectioninfo
     */
    public function __construct(?string $connectioninfo = null)
    {
        $this
            ->setConnectioninfo($connectioninfo);
    }
    /**
     * Get connectioninfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getConnectioninfo(): ?string
    {
        return $this->connectioninfo ?? null;
    }
    /**
     * Set connectioninfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $connectioninfo
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ExternalsystemValue
     */
    public function setConnectioninfo(?string $connectioninfo = null): self
    {
        // validation for constraint: string
        if (!is_null($connectioninfo) && !is_string($connectioninfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($connectioninfo, true), gettype($connectioninfo)), __LINE__);
        }
        if (is_null($connectioninfo) || (is_array($connectioninfo) && empty($connectioninfo))) {
            unset($this->connectioninfo);
        } else {
            $this->connectioninfo = $connectioninfo;
        }
        
        return $this;
    }
}
