<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulConsequenceValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZulConsequenceValue extends AbstractKeyValue
{
    /**
     * The prioritaet
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $prioritaet = null;
    /**
     * Constructor method for ZulConsequenceValue
     * @uses ZulConsequenceValue::setPrioritaet()
     * @param int $prioritaet
     */
    public function __construct(?int $prioritaet = null)
    {
        $this
            ->setPrioritaet($prioritaet);
    }
    /**
     * Get prioritaet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPrioritaet(): ?int
    {
        return $this->prioritaet ?? null;
    }
    /**
     * Set prioritaet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $prioritaet
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ZulConsequenceValue
     */
    public function setPrioritaet(?int $prioritaet = null): self
    {
        // validation for constraint: int
        if (!is_null($prioritaet) && !(is_int($prioritaet) || ctype_digit($prioritaet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($prioritaet, true), gettype($prioritaet)), __LINE__);
        }
        if (is_null($prioritaet) || (is_array($prioritaet) && empty($prioritaet))) {
            unset($this->prioritaet);
        } else {
            $this->prioritaet = $prioritaet;
        }
        
        return $this;
    }
}
