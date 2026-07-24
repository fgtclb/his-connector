<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addRoomToAffiliation Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddRoomToAffiliation extends AbstractStructBase
{
    /**
     * The personOrgunitId
     * @var int
     */
    protected int $personOrgunitId;
    /**
     * The roomId
     * @var int
     */
    protected int $roomId;
    /**
     * Constructor method for addRoomToAffiliation
     * @uses AddRoomToAffiliation::setPersonOrgunitId()
     * @uses AddRoomToAffiliation::setRoomId()
     * @param int $personOrgunitId
     * @param int $roomId
     */
    public function __construct(int $personOrgunitId, int $roomId)
    {
        $this
            ->setPersonOrgunitId($personOrgunitId)
            ->setRoomId($roomId);
    }
    /**
     * Get personOrgunitId value
     * @return int
     */
    public function getPersonOrgunitId(): int
    {
        return $this->personOrgunitId;
    }
    /**
     * Set personOrgunitId value
     * @param int $personOrgunitId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\AddRoomToAffiliation
     */
    public function setPersonOrgunitId(int $personOrgunitId): self
    {
        // validation for constraint: int
        if (!is_null($personOrgunitId) && !(is_int($personOrgunitId) || ctype_digit($personOrgunitId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personOrgunitId, true), gettype($personOrgunitId)), __LINE__);
        }
        $this->personOrgunitId = $personOrgunitId;
        
        return $this;
    }
    /**
     * Get roomId value
     * @return int
     */
    public function getRoomId(): int
    {
        return $this->roomId;
    }
    /**
     * Set roomId value
     * @param int $roomId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\AddRoomToAffiliation
     */
    public function setRoomId(int $roomId): self
    {
        // validation for constraint: int
        if (!is_null($roomId) && !(is_int($roomId) || ctype_digit($roomId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roomId, true), gettype($roomId)), __LINE__);
        }
        $this->roomId = $roomId;
        
        return $this;
    }
}
