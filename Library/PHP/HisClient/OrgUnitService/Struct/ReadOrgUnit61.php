<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readOrgUnit61 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadOrgUnit61 extends AbstractStructBase
{
    /**
     * The lid
     * @var int
     */
    protected int $lid;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * Constructor method for readOrgUnit61
     * @uses ReadOrgUnit61::setLid()
     * @uses ReadOrgUnit61::setDate()
     * @param int $lid
     * @param string $date
     */
    public function __construct(int $lid, ?string $date = null)
    {
        $this
            ->setLid($lid)
            ->setDate($date);
    }
    /**
     * Get lid value
     * @return int
     */
    public function getLid(): int
    {
        return $this->lid;
    }
    /**
     * Set lid value
     * @param int $lid
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnit61
     */
    public function setLid(int $lid): self
    {
        // validation for constraint: int
        if (!is_null($lid) && !(is_int($lid) || ctype_digit($lid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lid, true), gettype($lid)), __LINE__);
        }
        $this->lid = $lid;
        
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnit61
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
        return $this;
    }
}
