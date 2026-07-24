<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addSecondaryOrgunitToRoom Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddSecondaryOrgunitToRoom extends AbstractStructBase
{
    /**
     * The roomId
     * @var int
     */
    protected int $roomId;
    /**
     * The orgunitLid
     * Meta information extracted from the WSDL
     * - documentation: long-living id. Reference to owner - in this case facility
     * @var int
     */
    protected int $orgunitLid;
    /**
     * Constructor method for addSecondaryOrgunitToRoom
     * @uses AddSecondaryOrgunitToRoom::setRoomId()
     * @uses AddSecondaryOrgunitToRoom::setOrgunitLid()
     * @param int $roomId
     * @param int $orgunitLid
     */
    public function __construct(int $roomId, int $orgunitLid)
    {
        $this
            ->setRoomId($roomId)
            ->setOrgunitLid($orgunitLid);
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\AddSecondaryOrgunitToRoom
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
     * Get orgunitLid value
     * @return int
     */
    public function getOrgunitLid(): int
    {
        return $this->orgunitLid;
    }
    /**
     * Set orgunitLid value
     * @param int $orgunitLid
     * @return \FGTCLB\HisClient\FacilityService\Struct\AddSecondaryOrgunitToRoom
     */
    public function setOrgunitLid(int $orgunitLid): self
    {
        // validation for constraint: int
        if (!is_null($orgunitLid) && !(is_int($orgunitLid) || ctype_digit($orgunitLid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orgunitLid, true), gettype($orgunitLid)), __LINE__);
        }
        $this->orgunitLid = $orgunitLid;
        
        return $this;
    }
}
