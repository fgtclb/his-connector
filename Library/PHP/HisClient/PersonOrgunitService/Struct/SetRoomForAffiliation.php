<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setRoomForAffiliation Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetRoomForAffiliation extends AbstractStructBase
{
    /**
     * The affiliationId
     * @var int
     */
    protected int $affiliationId;
    /**
     * The roomId
     * @var int
     */
    protected int $roomId;
    /**
     * Constructor method for setRoomForAffiliation
     * @uses SetRoomForAffiliation::setAffiliationId()
     * @uses SetRoomForAffiliation::setRoomId()
     * @param int $affiliationId
     * @param int $roomId
     */
    public function __construct(int $affiliationId, int $roomId)
    {
        $this
            ->setAffiliationId($affiliationId)
            ->setRoomId($roomId);
    }
    /**
     * Get affiliationId value
     * @return int
     */
    public function getAffiliationId(): int
    {
        return $this->affiliationId;
    }
    /**
     * Set affiliationId value
     * @param int $affiliationId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SetRoomForAffiliation
     */
    public function setAffiliationId(int $affiliationId): self
    {
        // validation for constraint: int
        if (!is_null($affiliationId) && !(is_int($affiliationId) || ctype_digit($affiliationId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($affiliationId, true), gettype($affiliationId)), __LINE__);
        }
        $this->affiliationId = $affiliationId;
        
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SetRoomForAffiliation
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
