<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HiskeyValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class HiskeyValue extends Value
{
    /**
     * The hiskeyId
     * @var int
     */
    protected int $hiskeyId;
    /**
     * Constructor method for HiskeyValue
     * @uses HiskeyValue::setHiskeyId()
     * @param int $hiskeyId
     */
    public function __construct(int $hiskeyId)
    {
        $this
            ->setHiskeyId($hiskeyId);
    }
    /**
     * Get hiskeyId value
     * @return int
     */
    public function getHiskeyId(): int
    {
        return $this->hiskeyId;
    }
    /**
     * Set hiskeyId value
     * @param int $hiskeyId
     * @return \FGTCLB\HisClient\AddressService\Struct\HiskeyValue
     */
    public function setHiskeyId(int $hiskeyId): self
    {
        // validation for constraint: int
        if (!is_null($hiskeyId) && !(is_int($hiskeyId) || ctype_digit($hiskeyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hiskeyId, true), gettype($hiskeyId)), __LINE__);
        }
        $this->hiskeyId = $hiskeyId;
        
        return $this;
    }
}
