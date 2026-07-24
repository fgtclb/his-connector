<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntranceQualificationTypeValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EntranceQualificationTypeValue extends AbstractKeyValue
{
    /**
     * The treatAsLocal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $treatAsLocal = null;
    /**
     * Constructor method for EntranceQualificationTypeValue
     * @uses EntranceQualificationTypeValue::setTreatAsLocal()
     * @param int $treatAsLocal
     */
    public function __construct(?int $treatAsLocal = null)
    {
        $this
            ->setTreatAsLocal($treatAsLocal);
    }
    /**
     * Get treatAsLocal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTreatAsLocal(): ?int
    {
        return $this->treatAsLocal ?? null;
    }
    /**
     * Set treatAsLocal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $treatAsLocal
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\EntranceQualificationTypeValue
     */
    public function setTreatAsLocal(?int $treatAsLocal = null): self
    {
        // validation for constraint: int
        if (!is_null($treatAsLocal) && !(is_int($treatAsLocal) || ctype_digit($treatAsLocal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($treatAsLocal, true), gettype($treatAsLocal)), __LINE__);
        }
        if (is_null($treatAsLocal) || (is_array($treatAsLocal) && empty($treatAsLocal))) {
            unset($this->treatAsLocal);
        } else {
            $this->treatAsLocal = $treatAsLocal;
        }
        
        return $this;
    }
}
