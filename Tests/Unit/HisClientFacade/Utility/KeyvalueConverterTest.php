<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\HisClientFacade\Utility;

use FGTCLB\HisClient\KeyvalueService\Struct\KeyValue;
use FGTCLB\HisClientFacade\Enum\KeyvalueTable;
use FGTCLB\HisClientFacade\Repository\KeyvalueRepository;
use FGTCLB\HisClientFacade\Utility\KeyvalueConverter;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class KeyvalueConverterTest extends UnitTestCase
{
    /**
     * @return mixed[]
     */
    public static function convertAddresstagIdToUniquenameDataProvider(): array
    {
        return [
            [2, 'de', 'privat'],
            [5, 'en', 'business'],
            [20, 'de', null],
        ];
    }

    #[Test]
    #[DataProvider('convertAddresstagIdToUniquenameDataProvider')]
    public function convertAddresstagIdToUniquename(int $id, string $language, ?string $expectedResult): void
    {
        $mockKeyvalueRepository = $this->createMock(KeyvalueRepository::class);
        $mockKeyvalueRepository->method('findByTableForLanguage')->willReturnCallback(
            fn(KeyvalueTable $table, string $language) => match ($language) {
                'de' => [
                    new KeyValue(1, '1', null, 'business'),
                    new KeyValue(2, '2', null, 'privat'),
                    new KeyValue(3, '3', null, 'community'),
                    new KeyValue(4, '4', null, 'home'),
                ],
                'en' => [
                    new KeyValue(5, '5', null, 'business'),
                    new KeyValue(6, '6', null, 'privat'),
                    new KeyValue(7, '7', null, 'community'),
                    new KeyValue(8, '8', null, 'home'),
                ],
                default => []
            }
        );
        $subject = new KeyvalueConverter($mockKeyvalueRepository);
        $this->assertSame($expectedResult, $subject->convertAddresstagIdToUniquename($id, $language));
    }

    /**
     * @return mixed[]
     */
    public static function convertEAddressIdToUniquenameDataProvider(): array
    {
        return [
            [2, 'de', 'icq'],
            [5, 'en', 'email'],
            [20, 'de', null],
        ];
    }

    #[Test]
    #[DataProvider('convertEAddressIdToUniquenameDataProvider')]
    public function convertEAddressIdToUniquename(int $id, string $language, ?string $expectedResult): void
    {
        $mockKeyvalueRepository = $this->createMock(KeyvalueRepository::class);
        $mockKeyvalueRepository->method('findByTableForLanguage')->willReturnCallback(
            fn(KeyvalueTable $table, string $language) => match ($language) {
                'de' => [
                    new KeyValue(1, '1', null, 'email'),
                    new KeyValue(2, '2', null, 'icq'),
                    new KeyValue(3, '3', null, 'mobile'),
                    new KeyValue(4, '4', null, 'msn'),
                ],
                'en' => [
                    new KeyValue(5, '5', null, 'email'),
                    new KeyValue(6, '6', null, 'icq'),
                    new KeyValue(7, '7', null, 'mobile'),
                    new KeyValue(8, '8', null, 'msn'),
                ],
                default => []
            }
        );
        $subject = new KeyvalueConverter($mockKeyvalueRepository);
        $this->assertSame($expectedResult, $subject->convertEAddressIdToUniquename($id, $language));
    }

    /**
     * @return mixed[]
     */
    public static function convertAffiliationTypeIdToTitleDataProvider(): array
    {
        return [
            [2, 'de', 'Assistent/in'],
            [6, 'en', 'assistant'],
            [20, 'de', null],
        ];
    }

    #[Test]
    #[DataProvider('convertAffiliationTypeIdToTitleDataProvider')]
    public function convertAffiliationTypeIdToTitle(int $id, string $language, ?string $expectedResult): void
    {
        $mockKeyvalueRepository = $this->createMock(KeyvalueRepository::class);
        $mockKeyvalueRepository->method('findByTableForLanguage')->willReturnCallback(
            fn(KeyvalueTable $table, string $language) => match ($language) {
                'de' => [
                    new KeyValue(1, '1', null, null, null, 'Dozent/in'),
                    new KeyValue(2, '2', null, null, null, 'Assistent/in'),
                    new KeyValue(3, '3', null, null, null, 'Direktor/in'),
                    new KeyValue(4, '4', null, null, null, 'Angestellte/r'),
                ],
                'en' => [
                    new KeyValue(5, '5', null, null, null, 'lecturer'),
                    new KeyValue(6, '6', null, null, null, 'assistant'),
                    new KeyValue(7, '7', null, null, null, 'director'),
                    new KeyValue(8, '8', null, null, null, 'employee'),
                ],
                default => []
            }
        );
        $subject = new KeyvalueConverter($mockKeyvalueRepository);
        $this->assertSame($expectedResult, $subject->convertAffiliationTypeIdToTitle($id, $language));
    }
}
