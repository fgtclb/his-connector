<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Enum;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for statusType Enum
 * @subpackage Enumerations
 */
class StatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CLOSED'
     * @return string 'CLOSED'
     */
    const VALUE_CLOSED = 'CLOSED';
    /**
     * Constant for value 'OPEN24H'
     * @return string 'OPEN24H'
     */
    const VALUE_OPEN_24_H = 'OPEN24H';
    /**
     * Constant for value 'PARTLY_OPEN'
     * @return string 'PARTLY_OPEN'
     */
    const VALUE_PARTLY_OPEN = 'PARTLY_OPEN';
    /**
     * Return allowed values
     * @uses self::VALUE_CLOSED
     * @uses self::VALUE_OPEN_24_H
     * @uses self::VALUE_PARTLY_OPEN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CLOSED,
            self::VALUE_OPEN_24_H,
            self::VALUE_PARTLY_OPEN,
        ];
    }
}
