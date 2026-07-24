<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomLarge201706 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoomLarge201706 extends Room
{
    /**
     * The seatCapacity
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $seatCapacity = null;
    /**
     * The frequencyofuse
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $frequencyofuse = null;
    /**
     * The inventorynumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $inventorynumber = null;
    /**
     * The orgunitId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $orgunitId = null;
    /**
     * The buildingDefaulttext
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $buildingDefaulttext = null;
    /**
     * The campusDefaulttext
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $campusDefaulttext = null;
    /**
     * The buildingId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $buildingId = null;
    /**
     * The plannedDates
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\FacilityService\Struct\PlannedDatesType|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\PlannedDatesType $plannedDates = null;
    /**
     * The roomCompositions
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\FacilityService\Struct\RoomCompositionsType|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\RoomCompositionsType $roomCompositions = null;
    /**
     * The roomSegments
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\FacilityService\Struct\RoomSegmentsType|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\RoomSegmentsType $roomSegments = null;
    /**
     * The equipmentQuantity
     * Meta information extracted from the WSDL
     * - documentation: Key: EquipmentValue.id, value: Long (number of equipment available)
     * - nillable: true
     * @var \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantityType|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantityType $equipmentQuantity = null;
    /**
     * Constructor method for RoomLarge201706
     * @uses RoomLarge201706::setSeatCapacity()
     * @uses RoomLarge201706::setFrequencyofuse()
     * @uses RoomLarge201706::setInventorynumber()
     * @uses RoomLarge201706::setOrgunitId()
     * @uses RoomLarge201706::setBuildingDefaulttext()
     * @uses RoomLarge201706::setCampusDefaulttext()
     * @uses RoomLarge201706::setBuildingId()
     * @uses RoomLarge201706::setPlannedDates()
     * @uses RoomLarge201706::setRoomCompositions()
     * @uses RoomLarge201706::setRoomSegments()
     * @uses RoomLarge201706::setEquipmentQuantity()
     * @param int $seatCapacity
     * @param int $frequencyofuse
     * @param string $inventorynumber
     * @param int $orgunitId
     * @param string $buildingDefaulttext
     * @param string $campusDefaulttext
     * @param int $buildingId
     * @param \FGTCLB\HisClient\FacilityService\Struct\PlannedDatesType $plannedDates
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomCompositionsType $roomCompositions
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomSegmentsType $roomSegments
     * @param \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantityType $equipmentQuantity
     */
    public function __construct(?int $seatCapacity = null, ?int $frequencyofuse = null, ?string $inventorynumber = null, ?int $orgunitId = null, ?string $buildingDefaulttext = null, ?string $campusDefaulttext = null, ?int $buildingId = null, ?\FGTCLB\HisClient\FacilityService\Struct\PlannedDatesType $plannedDates = null, ?\FGTCLB\HisClient\FacilityService\Struct\RoomCompositionsType $roomCompositions = null, ?\FGTCLB\HisClient\FacilityService\Struct\RoomSegmentsType $roomSegments = null, ?\FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantityType $equipmentQuantity = null)
    {
        $this
            ->setSeatCapacity($seatCapacity)
            ->setFrequencyofuse($frequencyofuse)
            ->setInventorynumber($inventorynumber)
            ->setOrgunitId($orgunitId)
            ->setBuildingDefaulttext($buildingDefaulttext)
            ->setCampusDefaulttext($campusDefaulttext)
            ->setBuildingId($buildingId)
            ->setPlannedDates($plannedDates)
            ->setRoomCompositions($roomCompositions)
            ->setRoomSegments($roomSegments)
            ->setEquipmentQuantity($equipmentQuantity);
    }
    /**
     * Get seatCapacity value
     * @return int|null
     */
    public function getSeatCapacity(): ?int
    {
        return $this->seatCapacity;
    }
    /**
     * Set seatCapacity value
     * @param int $seatCapacity
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706
     */
    public function setSeatCapacity(?int $seatCapacity = null): self
    {
        // validation for constraint: int
        if (!is_null($seatCapacity) && !(is_int($seatCapacity) || ctype_digit($seatCapacity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($seatCapacity, true), gettype($seatCapacity)), __LINE__);
        }
        $this->seatCapacity = $seatCapacity;
        
        return $this;
    }
    /**
     * Get frequencyofuse value
     * @return int|null
     */
    public function getFrequencyofuse(): ?int
    {
        return $this->frequencyofuse;
    }
    /**
     * Set frequencyofuse value
     * @param int $frequencyofuse
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706
     */
    public function setFrequencyofuse(?int $frequencyofuse = null): self
    {
        // validation for constraint: int
        if (!is_null($frequencyofuse) && !(is_int($frequencyofuse) || ctype_digit($frequencyofuse))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($frequencyofuse, true), gettype($frequencyofuse)), __LINE__);
        }
        $this->frequencyofuse = $frequencyofuse;
        
        return $this;
    }
    /**
     * Get inventorynumber value
     * @return string|null
     */
    public function getInventorynumber(): ?string
    {
        return $this->inventorynumber;
    }
    /**
     * Set inventorynumber value
     * @param string $inventorynumber
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706
     */
    public function setInventorynumber(?string $inventorynumber = null): self
    {
        // validation for constraint: string
        if (!is_null($inventorynumber) && !is_string($inventorynumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inventorynumber, true), gettype($inventorynumber)), __LINE__);
        }
        $this->inventorynumber = $inventorynumber;
        
        return $this;
    }
    /**
     * Get orgunitId value
     * @return int|null
     */
    public function getOrgunitId(): ?int
    {
        return $this->orgunitId;
    }
    /**
     * Set orgunitId value
     * @param int $orgunitId
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706
     */
    public function setOrgunitId(?int $orgunitId = null): self
    {
        // validation for constraint: int
        if (!is_null($orgunitId) && !(is_int($orgunitId) || ctype_digit($orgunitId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orgunitId, true), gettype($orgunitId)), __LINE__);
        }
        $this->orgunitId = $orgunitId;
        
        return $this;
    }
    /**
     * Get buildingDefaulttext value
     * @return string|null
     */
    public function getBuildingDefaulttext(): ?string
    {
        return $this->buildingDefaulttext;
    }
    /**
     * Set buildingDefaulttext value
     * @param string $buildingDefaulttext
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706
     */
    public function setBuildingDefaulttext(?string $buildingDefaulttext = null): self
    {
        // validation for constraint: string
        if (!is_null($buildingDefaulttext) && !is_string($buildingDefaulttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buildingDefaulttext, true), gettype($buildingDefaulttext)), __LINE__);
        }
        $this->buildingDefaulttext = $buildingDefaulttext;
        
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706
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
     * Get plannedDates value
     * @return \FGTCLB\HisClient\FacilityService\Struct\PlannedDatesType|null
     */
    public function getPlannedDates(): ?\FGTCLB\HisClient\FacilityService\Struct\PlannedDatesType
    {
        return $this->plannedDates;
    }
    /**
     * Set plannedDates value
     * @param \FGTCLB\HisClient\FacilityService\Struct\PlannedDatesType $plannedDates
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706
     */
    public function setPlannedDates(?\FGTCLB\HisClient\FacilityService\Struct\PlannedDatesType $plannedDates = null): self
    {
        $this->plannedDates = $plannedDates;
        
        return $this;
    }
    /**
     * Get roomCompositions value
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomCompositionsType|null
     */
    public function getRoomCompositions(): ?\FGTCLB\HisClient\FacilityService\Struct\RoomCompositionsType
    {
        return $this->roomCompositions;
    }
    /**
     * Set roomCompositions value
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomCompositionsType $roomCompositions
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706
     */
    public function setRoomCompositions(?\FGTCLB\HisClient\FacilityService\Struct\RoomCompositionsType $roomCompositions = null): self
    {
        $this->roomCompositions = $roomCompositions;
        
        return $this;
    }
    /**
     * Get roomSegments value
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomSegmentsType|null
     */
    public function getRoomSegments(): ?\FGTCLB\HisClient\FacilityService\Struct\RoomSegmentsType
    {
        return $this->roomSegments;
    }
    /**
     * Set roomSegments value
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomSegmentsType $roomSegments
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706
     */
    public function setRoomSegments(?\FGTCLB\HisClient\FacilityService\Struct\RoomSegmentsType $roomSegments = null): self
    {
        $this->roomSegments = $roomSegments;
        
        return $this;
    }
    /**
     * Get equipmentQuantity value
     * @return \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantityType|null
     */
    public function getEquipmentQuantity(): ?\FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantityType
    {
        return $this->equipmentQuantity;
    }
    /**
     * Set equipmentQuantity value
     * @param \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantityType $equipmentQuantity
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge201706
     */
    public function setEquipmentQuantity(?\FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantityType $equipmentQuantity = null): self
    {
        $this->equipmentQuantity = $equipmentQuantity;
        
        return $this;
    }
}
