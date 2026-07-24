<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Enum;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for notificationCategoryType Enum
 * @subpackage Enumerations
 */
class NotificationCategoryType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'APP'
     * @return string 'APP'
     */
    const VALUE_APP = 'APP';
    /**
     * Constant for value 'STU'
     * @return string 'STU'
     */
    const VALUE_STU = 'STU';
    /**
     * Constant for value 'EXA'
     * @return string 'EXA'
     */
    const VALUE_EXA = 'EXA';
    /**
     * Constant for value 'ALU'
     * @return string 'ALU'
     */
    const VALUE_ALU = 'ALU';
    /**
     * Constant for value 'ALUG'
     * @return string 'ALUG'
     */
    const VALUE_ALUG = 'ALUG';
    /**
     * Constant for value 'ALUK'
     * @return string 'ALUK'
     */
    const VALUE_ALUK = 'ALUK';
    /**
     * Constant for value 'ALUR'
     * @return string 'ALUR'
     */
    const VALUE_ALUR = 'ALUR';
    /**
     * Constant for value 'JOB'
     * @return string 'JOB'
     */
    const VALUE_JOB = 'JOB';
    /**
     * Constant for value 'HRM'
     * @return string 'HRM'
     */
    const VALUE_HRM = 'HRM';
    /**
     * Constant for value 'DOK'
     * @return string 'DOK'
     */
    const VALUE_DOK = 'DOK';
    /**
     * Constant for value 'WBT'
     * @return string 'WBT'
     */
    const VALUE_WBT = 'WBT';
    /**
     * Constant for value 'STUALL'
     * @return string 'STUALL'
     */
    const VALUE_STUALL = 'STUALL';
    /**
     * Constant for value 'WBTALL'
     * @return string 'WBTALL'
     */
    const VALUE_WBTALL = 'WBTALL';
    /**
     * Constant for value 'DOKALL'
     * @return string 'DOKALL'
     */
    const VALUE_DOKALL = 'DOKALL';
    /**
     * Constant for value 'DOSV'
     * @return string 'DOSV'
     */
    const VALUE_DOSV = 'DOSV';
    /**
     * Constant for value 'UNIASSIST'
     * @return string 'UNIASSIST'
     */
    const VALUE_UNIASSIST = 'UNIASSIST';
    /**
     * Constant for value 'OFFICE'
     * @return string 'OFFICE'
     */
    const VALUE_OFFICE = 'OFFICE';
    /**
     * Constant for value 'AFFILIATION'
     * @return string 'AFFILIATION'
     */
    const VALUE_AFFILIATION = 'AFFILIATION';
    /**
     * Constant for value 'PWRESET'
     * @return string 'PWRESET'
     */
    const VALUE_PWRESET = 'PWRESET';
    /**
     * Constant for value 'PORTAL'
     * @return string 'PORTAL'
     */
    const VALUE_PORTAL = 'PORTAL';
    /**
     * Constant for value 'RZ'
     * @return string 'RZ'
     */
    const VALUE_RZ = 'RZ';
    /**
     * Constant for value 'COMA'
     * @return string 'COMA'
     */
    const VALUE_COMA = 'COMA';
    /**
     * Constant for value 'COM'
     * @return string 'COM'
     */
    const VALUE_COM = 'COM';
    /**
     * Constant for value 'UNIVERSITY_PARTNER'
     * @return string 'UNIVERSITY_PARTNER'
     */
    const VALUE_UNIVERSITY_PARTNER = 'UNIVERSITY_PARTNER';
    /**
     * Constant for value 'CAREER_SERVICE'
     * @return string 'CAREER_SERVICE'
     */
    const VALUE_CAREER_SERVICE = 'CAREER_SERVICE';
    /**
     * Constant for value 'MISC'
     * @return string 'MISC'
     */
    const VALUE_MISC = 'MISC';
    /**
     * Constant for value 'MIGRATION'
     * @return string 'MIGRATION'
     */
    const VALUE_MIGRATION = 'MIGRATION';
    /**
     * Constant for value 'TEMP'
     * @return string 'TEMP'
     */
    const VALUE_TEMP = 'TEMP';
    /**
     * Return allowed values
     * @uses self::VALUE_APP
     * @uses self::VALUE_STU
     * @uses self::VALUE_EXA
     * @uses self::VALUE_ALU
     * @uses self::VALUE_ALUG
     * @uses self::VALUE_ALUK
     * @uses self::VALUE_ALUR
     * @uses self::VALUE_JOB
     * @uses self::VALUE_HRM
     * @uses self::VALUE_DOK
     * @uses self::VALUE_WBT
     * @uses self::VALUE_STUALL
     * @uses self::VALUE_WBTALL
     * @uses self::VALUE_DOKALL
     * @uses self::VALUE_DOSV
     * @uses self::VALUE_UNIASSIST
     * @uses self::VALUE_OFFICE
     * @uses self::VALUE_AFFILIATION
     * @uses self::VALUE_PWRESET
     * @uses self::VALUE_PORTAL
     * @uses self::VALUE_RZ
     * @uses self::VALUE_COMA
     * @uses self::VALUE_COM
     * @uses self::VALUE_UNIVERSITY_PARTNER
     * @uses self::VALUE_CAREER_SERVICE
     * @uses self::VALUE_MISC
     * @uses self::VALUE_MIGRATION
     * @uses self::VALUE_TEMP
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_APP,
            self::VALUE_STU,
            self::VALUE_EXA,
            self::VALUE_ALU,
            self::VALUE_ALUG,
            self::VALUE_ALUK,
            self::VALUE_ALUR,
            self::VALUE_JOB,
            self::VALUE_HRM,
            self::VALUE_DOK,
            self::VALUE_WBT,
            self::VALUE_STUALL,
            self::VALUE_WBTALL,
            self::VALUE_DOKALL,
            self::VALUE_DOSV,
            self::VALUE_UNIASSIST,
            self::VALUE_OFFICE,
            self::VALUE_AFFILIATION,
            self::VALUE_PWRESET,
            self::VALUE_PORTAL,
            self::VALUE_RZ,
            self::VALUE_COMA,
            self::VALUE_COM,
            self::VALUE_UNIVERSITY_PARTNER,
            self::VALUE_CAREER_SERVICE,
            self::VALUE_MISC,
            self::VALUE_MIGRATION,
            self::VALUE_TEMP,
        ];
    }
}
