<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpeninghoursHoliday Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OpeninghoursHoliday extends AbstractStructBase
{
    /**
     * The status
     * @var string
     */
    protected string $status;
    /**
     * The timeslots
     * Meta information extracted from the WSDL
     * - documentation: The timeslots when the building is open; Only if status=2
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\FacilityService\Struct\TimeslotsType|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\TimeslotsType $timeslots = null;
    /**
     * Constructor method for OpeninghoursHoliday
     * @uses OpeninghoursHoliday::setStatus()
     * @uses OpeninghoursHoliday::setTimeslots()
     * @param string $status
     * @param \FGTCLB\HisClient\FacilityService\Struct\TimeslotsType $timeslots
     */
    public function __construct(string $status, ?\FGTCLB\HisClient\FacilityService\Struct\TimeslotsType $timeslots = null)
    {
        $this
            ->setStatus($status)
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursHoliday
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursHoliday
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
