<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateHyperlink Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateHyperlink extends AbstractStructBase
{
    /**
     * The addressId
     * @var int
     */
    protected int $addressId;
    /**
     * The hyperlink
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink $hyperlink;
    /**
     * Constructor method for updateHyperlink
     * @uses UpdateHyperlink::setAddressId()
     * @uses UpdateHyperlink::setHyperlink()
     * @param int $addressId
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink $hyperlink
     */
    public function __construct(int $addressId, \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink $hyperlink)
    {
        $this
            ->setAddressId($addressId)
            ->setHyperlink($hyperlink);
    }
    /**
     * Get addressId value
     * @return int
     */
    public function getAddressId(): int
    {
        return $this->addressId;
    }
    /**
     * Set addressId value
     * @param int $addressId
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdateHyperlink
     */
    public function setAddressId(int $addressId): self
    {
        // validation for constraint: int
        if (!is_null($addressId) && !(is_int($addressId) || ctype_digit($addressId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressId, true), gettype($addressId)), __LINE__);
        }
        $this->addressId = $addressId;
        
        return $this;
    }
    /**
     * Get hyperlink value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink
     */
    public function getHyperlink(): \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink
    {
        return $this->hyperlink;
    }
    /**
     * Set hyperlink value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink $hyperlink
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdateHyperlink
     */
    public function setHyperlink(\FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink $hyperlink): self
    {
        $this->hyperlink = $hyperlink;
        
        return $this;
    }
}
