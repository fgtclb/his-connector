<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updatePlanningProperty Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdatePlanningProperty extends AbstractStructBase
{
    /**
     * The roomId
     * @var int
     */
    protected int $roomId;
    /**
     * The centralised
     * @var bool
     */
    protected bool $centralised;
    /**
     * Constructor method for updatePlanningProperty
     * @uses UpdatePlanningProperty::setRoomId()
     * @uses UpdatePlanningProperty::setCentralised()
     * @param int $roomId
     * @param bool $centralised
     */
    public function __construct(int $roomId, bool $centralised)
    {
        $this
            ->setRoomId($roomId)
            ->setCentralised($centralised);
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\UpdatePlanningProperty
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
     * Get centralised value
     * @return bool
     */
    public function getCentralised(): bool
    {
        return $this->centralised;
    }
    /**
     * Set centralised value
     * @param bool $centralised
     * @return \FGTCLB\HisClient\FacilityService\Struct\UpdatePlanningProperty
     */
    public function setCentralised(bool $centralised): self
    {
        // validation for constraint: boolean
        if (!is_null($centralised) && !is_bool($centralised)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($centralised, true), gettype($centralised)), __LINE__);
        }
        $this->centralised = $centralised;
        
        return $this;
    }
}
