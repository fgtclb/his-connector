<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomSegment Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoomSegment extends AbstractRoom
{
    /**
     * The roomId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $roomId = null;
    /**
     * Constructor method for RoomSegment
     * @uses RoomSegment::setRoomId()
     * @param int $roomId
     */
    public function __construct(?int $roomId = null)
    {
        $this
            ->setRoomId($roomId);
    }
    /**
     * Get roomId value
     * @return int|null
     */
    public function getRoomId(): ?int
    {
        return $this->roomId;
    }
    /**
     * Set roomId value
     * @param int $roomId
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomSegment
     */
    public function setRoomId(?int $roomId = null): self
    {
        // validation for constraint: int
        if (!is_null($roomId) && !(is_int($roomId) || ctype_digit($roomId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roomId, true), gettype($roomId)), __LINE__);
        }
        $this->roomId = $roomId;
        
        return $this;
    }
}
