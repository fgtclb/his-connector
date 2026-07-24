<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for childrenSizeOfOrgunitResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ChildrenSizeOfOrgunitResponse extends AbstractStructBase
{
    /**
     * The size
     * @var int
     */
    protected int $size;
    /**
     * Constructor method for childrenSizeOfOrgunitResponse
     * @uses ChildrenSizeOfOrgunitResponse::setSize()
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this
            ->setSize($size);
    }
    /**
     * Get size value
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
    /**
     * Set size value
     * @param int $size
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ChildrenSizeOfOrgunitResponse
     */
    public function setSize(int $size): self
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->size = $size;
        
        return $this;
    }
}
