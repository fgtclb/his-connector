<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readRoomSegment202106 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadRoomSegment202106 extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    protected int $id;
    /**
     * Constructor method for readRoomSegment202106
     * @uses ReadRoomSegment202106::setId()
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this
            ->setId($id);
    }
    /**
     * Get id value
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoomSegment202106
     */
    public function setId(int $id): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
}
