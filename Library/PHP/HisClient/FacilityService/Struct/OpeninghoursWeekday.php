<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpeninghoursWeekday Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OpeninghoursWeekday extends AbstractStructBase
{
    /**
     * The status
     * @var string
     */
    protected string $status;
    /**
     * The monday
     * Meta information extracted from the WSDL
     * - documentation: Is this entry valid for mondays (true|false)
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $monday = null;
    /**
     * The tuesday
     * Meta information extracted from the WSDL
     * - documentation: Is this entry valid for tuesdays (true|false)
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $tuesday = null;
    /**
     * The wednesday
     * Meta information extracted from the WSDL
     * - documentation: Is this entry valid for wednesdays (true|false)
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $wednesday = null;
    /**
     * The thursday
     * Meta information extracted from the WSDL
     * - documentation: Is this entry valid for thursdays (true|false)
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $thursday = null;
    /**
     * The friday
     * Meta information extracted from the WSDL
     * - documentation: Is this entry valid for fridays (true|false)
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $friday = null;
    /**
     * The saturday
     * Meta information extracted from the WSDL
     * - documentation: Is this entry valid for saturdays (true|false)
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $saturday = null;
    /**
     * The sunday
     * Meta information extracted from the WSDL
     * - documentation: Is this entry valid for sundays (true|false)
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $sunday = null;
    /**
     * The timeslots
     * Meta information extracted from the WSDL
     * - documentation: The timeslots when the building is open; Only if status=2
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\FacilityService\Struct\TimeslotsType|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\TimeslotsType $timeslots = null;
    /**
     * Constructor method for OpeninghoursWeekday
     * @uses OpeninghoursWeekday::setStatus()
     * @uses OpeninghoursWeekday::setMonday()
     * @uses OpeninghoursWeekday::setTuesday()
     * @uses OpeninghoursWeekday::setWednesday()
     * @uses OpeninghoursWeekday::setThursday()
     * @uses OpeninghoursWeekday::setFriday()
     * @uses OpeninghoursWeekday::setSaturday()
     * @uses OpeninghoursWeekday::setSunday()
     * @uses OpeninghoursWeekday::setTimeslots()
     * @param string $status
     * @param bool $monday
     * @param bool $tuesday
     * @param bool $wednesday
     * @param bool $thursday
     * @param bool $friday
     * @param bool $saturday
     * @param bool $sunday
     * @param \FGTCLB\HisClient\FacilityService\Struct\TimeslotsType $timeslots
     */
    public function __construct(string $status, ?bool $monday = null, ?bool $tuesday = null, ?bool $wednesday = null, ?bool $thursday = null, ?bool $friday = null, ?bool $saturday = null, ?bool $sunday = null, ?\FGTCLB\HisClient\FacilityService\Struct\TimeslotsType $timeslots = null)
    {
        $this
            ->setStatus($status)
            ->setMonday($monday)
            ->setTuesday($tuesday)
            ->setWednesday($wednesday)
            ->setThursday($thursday)
            ->setFriday($friday)
            ->setSaturday($saturday)
            ->setSunday($sunday)
            ->setTimeslots($timeslots);
    }
    /**
     * Get status value
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses \FGTCLB\HisClient\FacilityService\Enum\StatusType::valueIsValid()
     * @uses \FGTCLB\HisClient\FacilityService\Enum\StatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday
     */
    public function setStatus(string $status): self
    {
        // validation for constraint: enumeration
        if (!\FGTCLB\HisClient\FacilityService\Enum\StatusType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \FGTCLB\HisClient\FacilityService\Enum\StatusType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \FGTCLB\HisClient\FacilityService\Enum\StatusType::getValidValues())), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get monday value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getMonday(): ?bool
    {
        return $this->monday ?? null;
    }
    /**
     * Set monday value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $monday
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday
     */
    public function setMonday(?bool $monday = null): self
    {
        // validation for constraint: boolean
        if (!is_null($monday) && !is_bool($monday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($monday, true), gettype($monday)), __LINE__);
        }
        if (is_null($monday) || (is_array($monday) && empty($monday))) {
            unset($this->monday);
        } else {
            $this->monday = $monday;
        }
        
        return $this;
    }
    /**
     * Get tuesday value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getTuesday(): ?bool
    {
        return $this->tuesday ?? null;
    }
    /**
     * Set tuesday value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $tuesday
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday
     */
    public function setTuesday(?bool $tuesday = null): self
    {
        // validation for constraint: boolean
        if (!is_null($tuesday) && !is_bool($tuesday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tuesday, true), gettype($tuesday)), __LINE__);
        }
        if (is_null($tuesday) || (is_array($tuesday) && empty($tuesday))) {
            unset($this->tuesday);
        } else {
            $this->tuesday = $tuesday;
        }
        
        return $this;
    }
    /**
     * Get wednesday value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getWednesday(): ?bool
    {
        return $this->wednesday ?? null;
    }
    /**
     * Set wednesday value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $wednesday
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday
     */
    public function setWednesday(?bool $wednesday = null): self
    {
        // validation for constraint: boolean
        if (!is_null($wednesday) && !is_bool($wednesday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wednesday, true), gettype($wednesday)), __LINE__);
        }
        if (is_null($wednesday) || (is_array($wednesday) && empty($wednesday))) {
            unset($this->wednesday);
        } else {
            $this->wednesday = $wednesday;
        }
        
        return $this;
    }
    /**
     * Get thursday value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getThursday(): ?bool
    {
        return $this->thursday ?? null;
    }
    /**
     * Set thursday value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $thursday
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday
     */
    public function setThursday(?bool $thursday = null): self
    {
        // validation for constraint: boolean
        if (!is_null($thursday) && !is_bool($thursday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($thursday, true), gettype($thursday)), __LINE__);
        }
        if (is_null($thursday) || (is_array($thursday) && empty($thursday))) {
            unset($this->thursday);
        } else {
            $this->thursday = $thursday;
        }
        
        return $this;
    }
    /**
     * Get friday value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getFriday(): ?bool
    {
        return $this->friday ?? null;
    }
    /**
     * Set friday value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $friday
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday
     */
    public function setFriday(?bool $friday = null): self
    {
        // validation for constraint: boolean
        if (!is_null($friday) && !is_bool($friday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($friday, true), gettype($friday)), __LINE__);
        }
        if (is_null($friday) || (is_array($friday) && empty($friday))) {
            unset($this->friday);
        } else {
            $this->friday = $friday;
        }
        
        return $this;
    }
    /**
     * Get saturday value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getSaturday(): ?bool
    {
        return $this->saturday ?? null;
    }
    /**
     * Set saturday value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $saturday
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday
     */
    public function setSaturday(?bool $saturday = null): self
    {
        // validation for constraint: boolean
        if (!is_null($saturday) && !is_bool($saturday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($saturday, true), gettype($saturday)), __LINE__);
        }
        if (is_null($saturday) || (is_array($saturday) && empty($saturday))) {
            unset($this->saturday);
        } else {
            $this->saturday = $saturday;
        }
        
        return $this;
    }
    /**
     * Get sunday value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getSunday(): ?bool
    {
        return $this->sunday ?? null;
    }
    /**
     * Set sunday value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $sunday
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday
     */
    public function setSunday(?bool $sunday = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sunday) && !is_bool($sunday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sunday, true), gettype($sunday)), __LINE__);
        }
        if (is_null($sunday) || (is_array($sunday) && empty($sunday))) {
            unset($this->sunday);
        } else {
            $this->sunday = $sunday;
        }
        
        return $this;
    }
    /**
     * Get timeslots value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\FacilityService\Struct\TimeslotsType|null
     */
    public function getTimeslots(): ?\FGTCLB\HisClient\FacilityService\Struct\TimeslotsType
    {
        return $this->timeslots ?? null;
    }
    /**
     * Set timeslots value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FGTCLB\HisClient\FacilityService\Struct\TimeslotsType $timeslots
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursWeekday
     */
    public function setTimeslots(?\FGTCLB\HisClient\FacilityService\Struct\TimeslotsType $timeslots = null): self
    {
        if (is_null($timeslots) || (is_array($timeslots) && empty($timeslots))) {
            unset($this->timeslots);
        } else {
            $this->timeslots = $timeslots;
        }
        
        return $this;
    }
}
