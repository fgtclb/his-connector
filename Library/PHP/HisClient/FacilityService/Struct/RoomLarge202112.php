<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomLarge202112 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoomLarge202112 extends Room
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
     * The validFrom
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * The centralised
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $centralised = null;
    /**
     * The sortorder
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $sortorder = null;
    /**
     * The roomOrgunits
     * Meta information extracted from the WSDL
     * - documentation: Zugeordnete Organisationseinheiten. Es kann nur eine primäre Organisationseinheite geben (isPrimary=true) und beliebig viele sekundäre. Sekundäre kann es nur geben, wenn es eine primäre gibt.
     * - nillable: true
     * @var \FGTCLB\HisClient\FacilityService\Struct\RoomOrgunitsType|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\RoomOrgunitsType $roomOrgunits = null;
    /**
     * Constructor method for RoomLarge202112
     * @uses RoomLarge202112::setSeatCapacity()
     * @uses RoomLarge202112::setFrequencyofuse()
     * @uses RoomLarge202112::setInventorynumber()
     * @uses RoomLarge202112::setBuildingDefaulttext()
     * @uses RoomLarge202112::setCampusDefaulttext()
     * @uses RoomLarge202112::setBuildingId()
     * @uses RoomLarge202112::setPlannedDates()
     * @uses RoomLarge202112::setRoomCompositions()
     * @uses RoomLarge202112::setRoomSegments()
     * @uses RoomLarge202112::setEquipmentQuantity()
     * @uses RoomLarge202112::setValidFrom()
     * @uses RoomLarge202112::setValidTo()
     * @uses RoomLarge202112::setCentralised()
     * @uses RoomLarge202112::setSortorder()
     * @uses RoomLarge202112::setRoomOrgunits()
     * @param int $seatCapacity
     * @param int $frequencyofuse
     * @param string $inventorynumber
     * @param string $buildingDefaulttext
     * @param string $campusDefaulttext
     * @param int $buildingId
     * @param \FGTCLB\HisClient\FacilityService\Struct\PlannedDatesType $plannedDates
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomCompositionsType $roomCompositions
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomSegmentsType $roomSegments
     * @param \FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantityType $equipmentQuantity
     * @param string $validFrom
     * @param string $validTo
     * @param bool $centralised
     * @param int $sortorder
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomOrgunitsType $roomOrgunits
     */
    public function __construct(?int $seatCapacity = null, ?int $frequencyofuse = null, ?string $inventorynumber = null, ?string $buildingDefaulttext = null, ?string $campusDefaulttext = null, ?int $buildingId = null, ?\FGTCLB\HisClient\FacilityService\Struct\PlannedDatesType $plannedDates = null, ?\FGTCLB\HisClient\FacilityService\Struct\RoomCompositionsType $roomCompositions = null, ?\FGTCLB\HisClient\FacilityService\Struct\RoomSegmentsType $roomSegments = null, ?\FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantityType $equipmentQuantity = null, ?string $validFrom = null, ?string $validTo = null, ?bool $centralised = null, ?int $sortorder = null, ?\FGTCLB\HisClient\FacilityService\Struct\RoomOrgunitsType $roomOrgunits = null)
    {
        $this
            ->setSeatCapacity($seatCapacity)
            ->setFrequencyofuse($frequencyofuse)
            ->setInventorynumber($inventorynumber)
            ->setBuildingDefaulttext($buildingDefaulttext)
            ->setCampusDefaulttext($campusDefaulttext)
            ->setBuildingId($buildingId)
            ->setPlannedDates($plannedDates)
            ->setRoomCompositions($roomCompositions)
            ->setRoomSegments($roomSegments)
            ->setEquipmentQuantity($equipmentQuantity)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setCentralised($centralised)
            ->setSortorder($sortorder)
            ->setRoomOrgunits($roomOrgunits);
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112
     */
    public function setEquipmentQuantity(?\FGTCLB\HisClient\FacilityService\Struct\EquipmentQuantityType $equipmentQuantity = null): self
    {
        $this->equipmentQuantity = $equipmentQuantity;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
    /**
     * Get centralised value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getCentralised(): ?bool
    {
        return $this->centralised ?? null;
    }
    /**
     * Set centralised value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $centralised
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112
     */
    public function setCentralised(?bool $centralised = null): self
    {
        // validation for constraint: boolean
        if (!is_null($centralised) && !is_bool($centralised)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($centralised, true), gettype($centralised)), __LINE__);
        }
        if (is_null($centralised) || (is_array($centralised) && empty($centralised))) {
            unset($this->centralised);
        } else {
            $this->centralised = $centralised;
        }
        
        return $this;
    }
    /**
     * Get sortorder value
     * @return int|null
     */
    public function getSortorder(): ?int
    {
        return $this->sortorder;
    }
    /**
     * Set sortorder value
     * @param int $sortorder
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112
     */
    public function setSortorder(?int $sortorder = null): self
    {
        // validation for constraint: int
        if (!is_null($sortorder) && !(is_int($sortorder) || ctype_digit($sortorder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortorder, true), gettype($sortorder)), __LINE__);
        }
        $this->sortorder = $sortorder;
        
        return $this;
    }
    /**
     * Get roomOrgunits value
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomOrgunitsType|null
     */
    public function getRoomOrgunits(): ?\FGTCLB\HisClient\FacilityService\Struct\RoomOrgunitsType
    {
        return $this->roomOrgunits;
    }
    /**
     * Set roomOrgunits value
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomOrgunitsType $roomOrgunits
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112
     */
    public function setRoomOrgunits(?\FGTCLB\HisClient\FacilityService\Struct\RoomOrgunitsType $roomOrgunits = null): self
    {
        $this->roomOrgunits = $roomOrgunits;
        
        return $this;
    }
}
