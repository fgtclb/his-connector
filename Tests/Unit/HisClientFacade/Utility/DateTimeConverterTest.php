<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\HisClientFacade\Utility;

use FGTCLB\HisClientFacade\Utility\DateTimeConverter;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class DateTimeConverterTest extends UnitTestCase
{
    /**
     * @return mixed[]
     */
    public static function convertDataProvider(): array
    {
        return [
            'null' => ['dateTime' => null, 'expected' => null],
            'date' => ['dateTime' => '2026-01-01', 'expected' => new \DateTimeImmutable('2026-01-01')],
            'after date overflow' => ['dateTime' => '2039-01-01', 'expected' => new \DateTimeImmutable('2039-01-01')],
            'magic start date' => ['dateTime' => '1900-01-01', 'expected' => null],
            'magic end date' => ['dateTime' => '2100-12-31', 'expected' => null],
        ];
    }

    #[Test]
    #[DataProvider('convertDataProvider')]
    public function convert(?string $dateTime, ?\DateTimeInterface $expected): void
    {
        $subject = new DateTimeConverter();
        $this->assertEquals($expected, $subject->convert($dateTime));
    }
}
