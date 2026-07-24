<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeslotValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class TimeslotValue extends AbstractKeyValue
{
    /**
     * The starttime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $starttime = null;
    /**
     * The endtime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $endtime = null;
    /**
     * Constructor method for TimeslotValue
     * @uses TimeslotValue::setStarttime()
     * @uses TimeslotValue::setEndtime()
     * @param string $starttime
     * @param string $endtime
     */
    public function __construct(?string $starttime = null, ?string $endtime = null)
    {
        $this
            ->setStarttime($starttime)
            ->setEndtime($endtime);
    }
    /**
     * Get starttime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStarttime(): ?string
    {
        return $this->starttime ?? null;
    }
    /**
     * Set starttime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $starttime
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\TimeslotValue
     */
    public function setStarttime(?string $starttime = null): self
    {
        // validation for constraint: string
        if (!is_null($starttime) && !is_string($starttime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($starttime, true), gettype($starttime)), __LINE__);
        }
        if (is_null($starttime) || (is_array($starttime) && empty($starttime))) {
            unset($this->starttime);
        } else {
            $this->starttime = $starttime;
        }
        
        return $this;
    }
    /**
     * Get endtime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndtime(): ?string
    {
        return $this->endtime ?? null;
    }
    /**
     * Set endtime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endtime
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\TimeslotValue
     */
    public function setEndtime(?string $endtime = null): self
    {
        // validation for constraint: string
        if (!is_null($endtime) && !is_string($endtime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endtime, true), gettype($endtime)), __LINE__);
        }
        if (is_null($endtime) || (is_array($endtime) && empty($endtime))) {
            unset($this->endtime);
        } else {
            $this->endtime = $endtime;
        }
        
        return $this;
    }
}
