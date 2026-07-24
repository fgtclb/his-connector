<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Room Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Room extends AbstractRoom
{
    /**
     * The floorId
     * @var int
     */
    protected int $floorId;
    /**
     * The din277RoomuseId
     * Meta information extracted from the WSDL
     * - documentation: Link to kind of room use (DIN 277).
     * - nillable: true
     * @var int|null
     */
    protected ?int $din277RoomuseId = null;
    /**
     * The area
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var float|null
     */
    protected ?float $area = null;
    /**
     * The roomSegmentCount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $roomSegmentCount = null;
    /**
     * Constructor method for Room
     * @uses Room::setFloorId()
     * @uses Room::setDin277RoomuseId()
     * @uses Room::setArea()
     * @uses Room::setRoomSegmentCount()
     * @param int $floorId
     * @param int $din277RoomuseId
     * @param float $area
     * @param int $roomSegmentCount
     */
    public function __construct(int $floorId, ?int $din277RoomuseId = null, ?float $area = null, ?int $roomSegmentCount = null)
    {
        $this
            ->setFloorId($floorId)
            ->setDin277RoomuseId($din277RoomuseId)
            ->setArea($area)
            ->setRoomSegmentCount($roomSegmentCount);
    }
    /**
     * Get floorId value
     * @return int
     */
    public function getFloorId(): int
    {
        return $this->floorId;
    }
    /**
     * Set floorId value
     * @param int $floorId
     * @return \FGTCLB\HisClient\FacilityService\Struct\Room
     */
    public function setFloorId(int $floorId): self
    {
        // validation for constraint: int
        if (!is_null($floorId) && !(is_int($floorId) || ctype_digit($floorId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($floorId, true), gettype($floorId)), __LINE__);
        }
        $this->floorId = $floorId;
        
        return $this;
    }
    /**
     * Get din277RoomuseId value
     * @return int|null
     */
    public function getDin277RoomuseId(): ?int
    {
        return $this->din277RoomuseId;
    }
    /**
     * Set din277RoomuseId value
     * @param int $din277RoomuseId
     * @return \FGTCLB\HisClient\FacilityService\Struct\Room
     */
    public function setDin277RoomuseId(?int $din277RoomuseId = null): self
    {
        // validation for constraint: int
        if (!is_null($din277RoomuseId) && !(is_int($din277RoomuseId) || ctype_digit($din277RoomuseId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($din277RoomuseId, true), gettype($din277RoomuseId)), __LINE__);
        }
        $this->din277RoomuseId = $din277RoomuseId;
        
        return $this;
    }
    /**
     * Get area value
     * @return float|null
     */
    public function getArea(): ?float
    {
        return $this->area;
    }
    /**
     * Set area value
     * @param float $area
     * @return \FGTCLB\HisClient\FacilityService\Struct\Room
     */
    public function setArea(?float $area = null): self
    {
        // validation for constraint: float
        if (!is_null($area) && !(is_float($area) || is_numeric($area))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($area, true), gettype($area)), __LINE__);
        }
        $this->area = $area;
        
        return $this;
    }
    /**
     * Get roomSegmentCount value
     * @return int|null
     */
    public function getRoomSegmentCount(): ?int
    {
        return $this->roomSegmentCount;
    }
    /**
     * Set roomSegmentCount value
     * @param int $roomSegmentCount
     * @return \FGTCLB\HisClient\FacilityService\Struct\Room
     */
    public function setRoomSegmentCount(?int $roomSegmentCount = null): self
    {
        // validation for constraint: int
        if (!is_null($roomSegmentCount) && !(is_int($roomSegmentCount) || ctype_digit($roomSegmentCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roomSegmentCount, true), gettype($roomSegmentCount)), __LINE__);
        }
        $this->roomSegmentCount = $roomSegmentCount;
        
        return $this;
    }
}
