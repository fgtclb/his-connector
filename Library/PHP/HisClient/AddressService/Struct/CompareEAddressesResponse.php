<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for compareEAddressesResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CompareEAddressesResponse extends AbstractStructBase
{
    /**
     * The result
     * @var bool
     */
    protected bool $result;
    /**
     * Constructor method for compareEAddressesResponse
     * @uses CompareEAddressesResponse::setResult()
     * @param bool $result
     */
    public function __construct(bool $result)
    {
        $this
            ->setResult($result);
    }
    /**
     * Get result value
     * @return bool
     */
    public function getResult(): bool
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param bool $result
     * @return \FGTCLB\HisClient\AddressService\Struct\CompareEAddressesResponse
     */
    public function setResult(bool $result): self
    {
        // validation for constraint: boolean
        if (!is_null($result) && !is_bool($result)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        $this->result = $result;
        
        return $this;
    }
}
