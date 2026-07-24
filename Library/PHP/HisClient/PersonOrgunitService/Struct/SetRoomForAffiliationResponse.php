<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setRoomForAffiliationResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetRoomForAffiliationResponse extends AbstractStructBase
{
    /**
     * The locationId
     * @var int
     */
    protected int $locationId;
    /**
     * Constructor method for setRoomForAffiliationResponse
     * @uses SetRoomForAffiliationResponse::setLocationId()
     * @param int $locationId
     */
    public function __construct(int $locationId)
    {
        $this
            ->setLocationId($locationId);
    }
    /**
     * Get locationId value
     * @return int
     */
    public function getLocationId(): int
    {
        return $this->locationId;
    }
    /**
     * Set locationId value
     * @param int $locationId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SetRoomForAffiliationResponse
     */
    public function setLocationId(int $locationId): self
    {
        // validation for constraint: int
        if (!is_null($locationId) && !(is_int($locationId) || ctype_digit($locationId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($locationId, true), gettype($locationId)), __LINE__);
        }
        $this->locationId = $locationId;
        
        return $this;
    }
}
