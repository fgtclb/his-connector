<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Enum;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for addressTypeType Enum
 * @subpackage Enumerations
 */
class AddressTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'HYPERLINK'
     * @return string 'HYPERLINK'
     */
    const VALUE_HYPERLINK = 'HYPERLINK';
    /**
     * Constant for value 'MESSENGER'
     * @return string 'MESSENGER'
     */
    const VALUE_MESSENGER = 'MESSENGER';
    /**
     * Constant for value 'PHONE'
     * @return string 'PHONE'
     */
    const VALUE_PHONE = 'PHONE';
    /**
     * Constant for value 'EMAIL'
     * @return string 'EMAIL'
     */
    const VALUE_EMAIL = 'EMAIL';
    /**
     * Constant for value 'POSTADDRESS'
     * @return string 'POSTADDRESS'
     */
    const VALUE_POSTADDRESS = 'POSTADDRESS';
    /**
     * Constant for value 'ROOMADDRESS'
     * @return string 'ROOMADDRESS'
     */
    const VALUE_ROOMADDRESS = 'ROOMADDRESS';
    /**
     * Return allowed values
     * @uses self::VALUE_HYPERLINK
     * @uses self::VALUE_MESSENGER
     * @uses self::VALUE_PHONE
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_POSTADDRESS
     * @uses self::VALUE_ROOMADDRESS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_HYPERLINK,
            self::VALUE_MESSENGER,
            self::VALUE_PHONE,
            self::VALUE_EMAIL,
            self::VALUE_POSTADDRESS,
            self::VALUE_ROOMADDRESS,
        ];
    }
}
