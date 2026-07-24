<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createPersonIdentifier Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreatePersonIdentifier extends AbstractStructBase
{
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * The personIdentifier
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier
     */
    protected \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier $personIdentifier;
    /**
     * Constructor method for createPersonIdentifier
     * @uses CreatePersonIdentifier::setPersonId()
     * @uses CreatePersonIdentifier::setPersonIdentifier()
     * @param int $personId
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier $personIdentifier
     */
    public function __construct(int $personId, \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier $personIdentifier)
    {
        $this
            ->setPersonId($personId)
            ->setPersonIdentifier($personIdentifier);
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
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePersonIdentifier
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
    /**
     * Get personIdentifier value
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier
     */
    public function getPersonIdentifier(): \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier
    {
        return $this->personIdentifier;
    }
    /**
     * Set personIdentifier value
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier $personIdentifier
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePersonIdentifier
     */
    public function setPersonIdentifier(\FGTCLB\HisClient\PersonService\Struct\PersonIdentifier $personIdentifier): self
    {
        $this->personIdentifier = $personIdentifier;
        
        return $this;
    }
}
