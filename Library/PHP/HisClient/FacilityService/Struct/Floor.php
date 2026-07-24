<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Floor Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Floor extends AbstractBuilding
{
    /**
     * The buildingId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $buildingId = null;
    /**
     * The roomCount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $roomCount = null;
    /**
     * The campusDefaulttext
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $campusDefaulttext = null;
    /**
     * Constructor method for Floor
     * @uses Floor::setBuildingId()
     * @uses Floor::setRoomCount()
     * @uses Floor::setCampusDefaulttext()
     * @param int $buildingId
     * @param int $roomCount
     * @param string $campusDefaulttext
     */
    public function __construct(?int $buildingId = null, ?int $roomCount = null, ?string $campusDefaulttext = null)
    {
        $this
            ->setBuildingId($buildingId)
            ->setRoomCount($roomCount)
            ->setCampusDefaulttext($campusDefaulttext);
    }
    /**
     * Get buildingId value
     * @return int|null
     */
    public function getBuildingId(): ?int
    {
        return $this->buildingId;
    }
    /**
     * Set buildingId value
     * @param int $buildingId
     * @return \FGTCLB\HisClient\FacilityService\Struct\Floor
     */
    public function setBuildingId(?int $buildingId = null): self
    {
        // validation for constraint: int
        if (!is_null($buildingId) && !(is_int($buildingId) || ctype_digit($buildingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($buildingId, true), gettype($buildingId)), __LINE__);
        }
        $this->buildingId = $buildingId;
        
        return $this;
    }
    /**
     * Get roomCount value
     * @return int|null
     */
    public function getRoomCount(): ?int
    {
        return $this->roomCount;
    }
    /**
     * Set roomCount value
     * @param int $roomCount
     * @return \FGTCLB\HisClient\FacilityService\Struct\Floor
     */
    public function setRoomCount(?int $roomCount = null): self
    {
        // validation for constraint: int
        if (!is_null($roomCount) && !(is_int($roomCount) || ctype_digit($roomCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roomCount, true), gettype($roomCount)), __LINE__);
        }
        $this->roomCount = $roomCount;
        
        return $this;
    }
    /**
     * Get campusDefaulttext value
     * @return string|null
     */
    public function getCampusDefaulttext(): ?string
    {
        return $this->campusDefaulttext;
    }
    /**
     * Set campusDefaulttext value
     * @param string $campusDefaulttext
     * @return \FGTCLB\HisClient\FacilityService\Struct\Floor
     */
    public function setCampusDefaulttext(?string $campusDefaulttext = null): self
    {
        // validation for constraint: string
        if (!is_null($campusDefaulttext) && !is_string($campusDefaulttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campusDefaulttext, true), gettype($campusDefaulttext)), __LINE__);
        }
        $this->campusDefaulttext = $campusDefaulttext;
        
        return $this;
    }
}
