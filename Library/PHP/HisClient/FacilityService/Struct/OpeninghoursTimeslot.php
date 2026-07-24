<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpeninghoursTimeslot Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OpeninghoursTimeslot extends AbstractStructBase
{
    /**
     * The from
     * @var string
     */
    protected string $from;
    /**
     * The to
     * @var string
     */
    protected string $to;
    /**
     * Constructor method for OpeninghoursTimeslot
     * @uses OpeninghoursTimeslot::setFrom()
     * @uses OpeninghoursTimeslot::setTo()
     * @param string $from
     * @param string $to
     */
    public function __construct(string $from, string $to)
    {
        $this
            ->setFrom($from)
            ->setTo($to);
    }
    /**
     * Get from value
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param string $from
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursTimeslot
     */
    public function setFrom(string $from): self
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
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param string $to
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursTimeslot
     */
    public function setTo(string $to): self
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        $this->to = $to;
        
        return $this;
    }
}
