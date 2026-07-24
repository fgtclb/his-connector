<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createPersonIdentifierResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreatePersonIdentifierResponse extends AbstractStructBase
{
    /**
     * The personIdentifierId
     * @var int
     */
    protected int $personIdentifierId;
    /**
     * Constructor method for createPersonIdentifierResponse
     * @uses CreatePersonIdentifierResponse::setPersonIdentifierId()
     * @param int $personIdentifierId
     */
    public function __construct(int $personIdentifierId)
    {
        $this
            ->setPersonIdentifierId($personIdentifierId);
    }
    /**
     * Get personIdentifierId value
     * @return int
     */
    public function getPersonIdentifierId(): int
    {
        return $this->personIdentifierId;
    }
    /**
     * Set personIdentifierId value
     * @param int $personIdentifierId
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePersonIdentifierResponse
     */
    public function setPersonIdentifierId(int $personIdentifierId): self
    {
        // validation for constraint: int
        if (!is_null($personIdentifierId) && !(is_int($personIdentifierId) || ctype_digit($personIdentifierId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personIdentifierId, true), gettype($personIdentifierId)), __LINE__);
        }
        $this->personIdentifierId = $personIdentifierId;
        
        return $this;
    }
}
