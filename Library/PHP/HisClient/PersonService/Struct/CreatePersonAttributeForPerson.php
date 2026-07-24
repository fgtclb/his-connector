<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createPersonAttributeForPerson Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreatePersonAttributeForPerson extends AbstractStructBase
{
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * The personAttributeDto
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto
     */
    protected \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto $personAttributeDto;
    /**
     * Constructor method for createPersonAttributeForPerson
     * @uses CreatePersonAttributeForPerson::setPersonId()
     * @uses CreatePersonAttributeForPerson::setPersonAttributeDto()
     * @param int $personId
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto $personAttributeDto
     */
    public function __construct(int $personId, \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto $personAttributeDto)
    {
        $this
            ->setPersonId($personId)
            ->setPersonAttributeDto($personAttributeDto);
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
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePersonAttributeForPerson
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
     * Get personAttributeDto value
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto
     */
    public function getPersonAttributeDto(): \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto
    {
        return $this->personAttributeDto;
    }
    /**
     * Set personAttributeDto value
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto $personAttributeDto
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePersonAttributeForPerson
     */
    public function setPersonAttributeDto(\FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto $personAttributeDto): self
    {
        $this->personAttributeDto = $personAttributeDto;
        
        return $this;
    }
}
