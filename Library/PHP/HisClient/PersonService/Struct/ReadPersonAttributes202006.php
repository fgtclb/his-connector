<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readPersonAttributes202006 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadPersonAttributes202006 extends AbstractStructBase
{
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * Constructor method for readPersonAttributes202006
     * @uses ReadPersonAttributes202006::setPersonId()
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
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPersonAttributes202006
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
