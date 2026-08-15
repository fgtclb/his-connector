<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Utility;

/**
 * Converts datetime values from the SOAP API to PHP objects
 */
final readonly class DateTimeConverter
{
    public function convert(?string $dateTime): ?\DateTimeImmutable
    {
        // HIS uses special "placeholder" dates for "always valid", which we convert to "null"
        if ($dateTime === null || $dateTime === '1900-01-01' || $dateTime === '2100-12-31') {
            return null;
        }
        return new \DateTimeImmutable($dateTime, new \DateTimeZone('UTC'));
    }
}
