<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EventtypeValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EventtypeValue extends AbstractKeyValue
{
    /**
     * The teachingLoadFactor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $teachingLoadFactor = null;
    /**
     * Constructor method for EventtypeValue
     * @uses EventtypeValue::setTeachingLoadFactor()
     * @param int $teachingLoadFactor
     */
    public function __construct(?int $teachingLoadFactor = null)
    {
        $this
            ->setTeachingLoadFactor($teachingLoadFactor);
    }
    /**
     * Get teachingLoadFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTeachingLoadFactor(): ?int
    {
        return $this->teachingLoadFactor ?? null;
    }
    /**
     * Set teachingLoadFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $teachingLoadFactor
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\EventtypeValue
     */
    public function setTeachingLoadFactor(?int $teachingLoadFactor = null): self
    {
        // validation for constraint: int
        if (!is_null($teachingLoadFactor) && !(is_int($teachingLoadFactor) || ctype_digit($teachingLoadFactor))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($teachingLoadFactor, true), gettype($teachingLoadFactor)), __LINE__);
        }
        if (is_null($teachingLoadFactor) || (is_array($teachingLoadFactor) && empty($teachingLoadFactor))) {
            unset($this->teachingLoadFactor);
        } else {
            $this->teachingLoadFactor = $teachingLoadFactor;
        }
        
        return $this;
    }
}
