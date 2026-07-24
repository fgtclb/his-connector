<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deletePersonAttribute202006 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeletePersonAttribute202006 extends AbstractStructBase
{
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * The personAttributeId
     * @var int
     */
    protected int $personAttributeId;
    /**
     * Constructor method for deletePersonAttribute202006
     * @uses DeletePersonAttribute202006::setPersonId()
     * @uses DeletePersonAttribute202006::setPersonAttributeId()
     * @param int $personId
     * @param int $personAttributeId
     */
    public function __construct(int $personId, int $personAttributeId)
    {
        $this
            ->setPersonId($personId)
            ->setPersonAttributeId($personAttributeId);
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
     * @return \FGTCLB\HisClient\PersonService\Struct\DeletePersonAttribute202006
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
     * Get personAttributeId value
     * @return int
     */
    public function getPersonAttributeId(): int
    {
        return $this->personAttributeId;
    }
    /**
     * Set personAttributeId value
     * @param int $personAttributeId
     * @return \FGTCLB\HisClient\PersonService\Struct\DeletePersonAttribute202006
     */
    public function setPersonAttributeId(int $personAttributeId): self
    {
        // validation for constraint: int
        if (!is_null($personAttributeId) && !(is_int($personAttributeId) || ctype_digit($personAttributeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personAttributeId, true), gettype($personAttributeId)), __LINE__);
        }
        $this->personAttributeId = $personAttributeId;
        
        return $this;
    }
}
