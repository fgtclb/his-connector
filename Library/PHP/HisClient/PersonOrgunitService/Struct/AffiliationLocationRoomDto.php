<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AffiliationLocationRoomDto Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AffiliationLocationRoomDto extends AffiliationLocationDto
{
    /**
     * The roomId
     * @var int
     */
    protected int $roomId;
    /**
     * Constructor method for AffiliationLocationRoomDto
     * @uses AffiliationLocationRoomDto::setRoomId()
     * @param int $roomId
     */
    public function __construct(int $roomId)
    {
        $this
            ->setRoomId($roomId);
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationRoomDto
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
