<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuildingOpeninghours Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BuildingOpeninghours extends AbstractStructBase
{
    /**
     * The closed
     * @var bool
     */
    protected bool $closed;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The notice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $notice = null;
    /**
     * The from
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $from = null;
    /**
     * The to
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $to = null;
    /**
     * The holidays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursHoliday|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\OpeninghoursHoliday $holidays = null;
    /**
     * The weekdays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\FacilityService\Struct\WeekdaysType|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\WeekdaysType $weekdays = null;
    /**
     * The exceptions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\FacilityService\Struct\ExceptionsType|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\ExceptionsType $exceptions = null;
    /**
     * Constructor method for BuildingOpeninghours
     * @uses BuildingOpeninghours::setClosed()
     * @uses BuildingOpeninghours::setId()
     * @uses BuildingOpeninghours::setNotice()
     * @uses BuildingOpeninghours::setFrom()
     * @uses BuildingOpeninghours::setTo()
     * @uses BuildingOpeninghours::setHolidays()
     * @uses BuildingOpeninghours::setWeekdays()
     * @uses BuildingOpeninghours::setExceptions()
     * @param bool $closed
     * @param int $id
     * @param string $notice
     * @param string $from
     * @param string $to
     * @param \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursHoliday $holidays
     * @param \FGTCLB\HisClient\FacilityService\Struct\WeekdaysType $weekdays
     * @param \FGTCLB\HisClient\FacilityService\Struct\ExceptionsType $exceptions
     */
    public function __construct(bool $closed, ?int $id = null, ?string $notice = null, ?string $from = null, ?string $to = null, ?\FGTCLB\HisClient\FacilityService\Struct\OpeninghoursHoliday $holidays = null, ?\FGTCLB\HisClient\FacilityService\Struct\WeekdaysType $weekdays = null, ?\FGTCLB\HisClient\FacilityService\Struct\ExceptionsType $exceptions = null)
    {
        $this
            ->setClosed($closed)
            ->setId($id)
            ->setNotice($notice)
            ->setFrom($from)
            ->setTo($to)
            ->setHolidays($holidays)
            ->setWeekdays($weekdays)
            ->setExceptions($exceptions);
    }
    /**
     * Get closed value
     * @return bool
     */
    public function getClosed(): bool
    {
        return $this->closed;
    }
    /**
     * Set closed value
     * @param bool $closed
     * @return \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours
     */
    public function setClosed(bool $closed): self
    {
        // validation for constraint: boolean
        if (!is_null($closed) && !is_bool($closed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($closed, true), gettype($closed)), __LINE__);
        }
        $this->closed = $closed;
        
        return $this;
    }
    /**
     * Get id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id ?? null;
    }
    /**
     * Set id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $id
     * @return \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
        }
        
        return $this;
    }
    /**
     * Get notice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNotice(): ?string
    {
        return $this->notice ?? null;
    }
    /**
     * Set notice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $notice
     * @return \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours
     */
    public function setNotice(?string $notice = null): self
    {
        // validation for constraint: string
        if (!is_null($notice) && !is_string($notice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notice, true), gettype($notice)), __LINE__);
        }
        if (is_null($notice) || (is_array($notice) && empty($notice))) {
            unset($this->notice);
        } else {
            $this->notice = $notice;
        }
        
        return $this;
    }
    /**
     * Get from value
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param string $from
     * @return \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours
     */
    public function setFrom(?string $from = null): self
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        $this->from = $from;
        
        return $this;
    }
    /**
     * Get to value
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param string $to
     * @return \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours
     */
    public function setTo(?string $to = null): self
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        $this->to = $to;
        
        return $this;
    }
    /**
     * Get holidays value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursHoliday|null
     */
    public function getHolidays(): ?\FGTCLB\HisClient\FacilityService\Struct\OpeninghoursHoliday
    {
        return $this->holidays ?? null;
    }
    /**
     * Set holidays value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursHoliday $holidays
     * @return \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours
     */
    public function setHolidays(?\FGTCLB\HisClient\FacilityService\Struct\OpeninghoursHoliday $holidays = null): self
    {
        if (is_null($holidays) || (is_array($holidays) && empty($holidays))) {
            unset($this->holidays);
        } else {
            $this->holidays = $holidays;
        }
        
        return $this;
    }
    /**
     * Get weekdays value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\FacilityService\Struct\WeekdaysType|null
     */
    public function getWeekdays(): ?\FGTCLB\HisClient\FacilityService\Struct\WeekdaysType
    {
        return $this->weekdays ?? null;
    }
    /**
     * Set weekdays value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FGTCLB\HisClient\FacilityService\Struct\WeekdaysType $weekdays
     * @return \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours
     */
    public function setWeekdays(?\FGTCLB\HisClient\FacilityService\Struct\WeekdaysType $weekdays = null): self
    {
        if (is_null($weekdays) || (is_array($weekdays) && empty($weekdays))) {
            unset($this->weekdays);
        } else {
            $this->weekdays = $weekdays;
        }
        
        return $this;
    }
    /**
     * Get exceptions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\FacilityService\Struct\ExceptionsType|null
     */
    public function getExceptions(): ?\FGTCLB\HisClient\FacilityService\Struct\ExceptionsType
    {
        return $this->exceptions ?? null;
    }
    /**
     * Set exceptions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FGTCLB\HisClient\FacilityService\Struct\ExceptionsType $exceptions
     * @return \FGTCLB\HisClient\FacilityService\Struct\BuildingOpeninghours
     */
    public function setExceptions(?\FGTCLB\HisClient\FacilityService\Struct\ExceptionsType $exceptions = null): self
    {
        if (is_null($exceptions) || (is_array($exceptions) && empty($exceptions))) {
            unset($this->exceptions);
        } else {
            $this->exceptions = $exceptions;
        }
        
        return $this;
    }
}
