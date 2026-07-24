<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAddresses Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAddresses extends AbstractStructBase
{
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * Constructor method for readAddresses
     * @uses ReadAddresses::setPersonId()
     * @param int $personId
     */
    public function __construct(int $personId)
    {
        $this
            ->setPersonId($personId);
    }
    /**
     * Get personId value
     * @return int
     */
    public function getPersonId(): int
    {
        return $this->personId;
    }
    /**
     * Set personId value
     * @param int $personId
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReadAddresses
     */
    public function setPersonId(int $personId): self
    {
        // validation for constraint: int
        if (!is_null($personId) && !(is_int($personId) || ctype_digit($personId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personId, true), gettype($personId)), __LINE__);
        }
        $this->personId = $personId;
        
        return $this;
    }
}
