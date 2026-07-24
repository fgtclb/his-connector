<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchResult Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchResult extends AbstractStructBase
{
    /**
     * The roomId
     * @var int
     */
    protected int $roomId;
    /**
     * The roomTypeId
     * Meta information extracted from the WSDL
     * - documentation: Discriminator: differentiated between room composition (id=1), room segment (id=2) and physical room (id=3)
     * @var int
     */
    protected int $roomTypeId;
    /**
     * Constructor method for SearchResult
     * @uses SearchResult::setRoomId()
     * @uses SearchResult::setRoomTypeId()
     * @param int $roomId
     * @param int $roomTypeId
     */
    public function __construct(int $roomId, int $roomTypeId)
    {
        $this
            ->setRoomId($roomId)
            ->setRoomTypeId($roomTypeId);
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\SearchResult
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
    /**
     * Get roomTypeId value
     * @return int
     */
    public function getRoomTypeId(): int
    {
        return $this->roomTypeId;
    }
    /**
     * Set roomTypeId value
     * @param int $roomTypeId
     * @return \FGTCLB\HisClient\FacilityService\Struct\SearchResult
     */
    public function setRoomTypeId(int $roomTypeId): self
    {
        // validation for constraint: int
        if (!is_null($roomTypeId) && !(is_int($roomTypeId) || ctype_digit($roomTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roomTypeId, true), gettype($roomTypeId)), __LINE__);
        }
        $this->roomTypeId = $roomTypeId;
        
        return $this;
    }
}
