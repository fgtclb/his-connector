<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Enum;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeType Enum
 * @subpackage Enumerations
 */
class TypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EVER'
     * @return string 'EVER'
     */
    const VALUE_EVER = 'EVER';
    /**
     * Constant for value 'TIMEMACHINE'
     * @return string 'TIMEMACHINE'
     */
    const VALUE_TIMEMACHINE = 'TIMEMACHINE';
    /**
     * Return allowed values
     * @uses self::VALUE_EVER
     * @uses self::VALUE_TIMEMACHINE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EVER,
            self::VALUE_TIMEMACHINE,
        ];
    }
}
