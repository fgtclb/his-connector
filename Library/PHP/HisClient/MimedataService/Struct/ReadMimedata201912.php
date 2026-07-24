<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readMimedata201912 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadMimedata201912 extends AbstractStructBase
{
    /**
     * The mimedataId
     * @var int
     */
    protected int $mimedataId;
    /**
     * Constructor method for readMimedata201912
     * @uses ReadMimedata201912::setMimedataId()
     * @param int $mimedataId
     */
    public function __construct(int $mimedataId)
    {
        $this
            ->setMimedataId($mimedataId);
    }
    /**
     * Get mimedataId value
     * @return int
     */
    public function getMimedataId(): int
    {
        return $this->mimedataId;
    }
    /**
     * Set mimedataId value
     * @param int $mimedataId
     * @return \FGTCLB\HisClient\MimedataService\Struct\ReadMimedata201912
     */
    public function setMimedataId(int $mimedataId): self
    {
        // validation for constraint: int
        if (!is_null($mimedataId) && !(is_int($mimedataId) || ctype_digit($mimedataId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mimedataId, true), gettype($mimedataId)), __LINE__);
        }
        $this->mimedataId = $mimedataId;
        
        return $this;
    }
}
