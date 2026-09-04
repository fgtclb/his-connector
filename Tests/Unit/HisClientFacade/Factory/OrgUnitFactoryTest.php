<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\HisClientFacade\Factory;

use FGTCLB\HisClientFacade\Factory\OrgUnitFactory;
use FGTCLB\HisClientFacade\Model\OrgUnit;
use FGTCLB\HisClientFacade\Utility\DateTimeConverter;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class OrgUnitFactoryTest extends UnitTestCase
{
    /**
     * @return mixed[]
     */
    public static function createOrgUnitDataProvider(): array
    {
        return [
            'without parent' => [
                'lid' => 123,
                'displayText' => 'display',
                'shortText' => 'short',
                'longText' => 'long',
                'uniquename' => 'unique',
                'validFrom' => '2026-01-01',
                'validTo' => '2026-02-01',
                'parent' => null,
                'expectedIdentifier' => 'orgUnit-123',
                'expectedValidFrom' => new \DateTimeImmutable('2026-01-01'),
                'expectedValidTo' => new \DateTimeImmutable('2026-02-01'),
            ],
            'with parent' => [
                'lid' => 123,
                'displayText' => 'display',
                'shortText' => 'short',
                'longText' => 'long',
                'uniquename' => 'unique',
                'validFrom' => '2026-01-01',
                'validTo' => '2026-02-01',
                'parent' => new OrgUnit(123, 'foo', 'bar', 'baz', 'bar', null, null, null),
                'expectedIdentifier' => 'orgUnit-123',
                'expectedValidFrom' => new \DateTimeImmutable('2026-01-01'),
                'expectedValidTo' => new \DateTimeImmutable('2026-02-01'),
            ],
            'without validity' => [
                'lid' => 123,
                'displayText' => 'display',
                'shortText' => 'short',
                'longText' => 'long',
                'uniquename' => 'unique',
                'validFrom' => null,
                'validTo' => null,
                'parent' => null,
                'expectedIdentifier' => 'orgUnit-123',
                'expectedValidFrom' => null,
                'expectedValidTo' => null,
            ],
        ];
    }

    #[Test]
    #[DataProvider('createOrgUnitDataProvider')]
    public function createOrgUnit(int $lid, string $displayText, string $shortText, string $longText, string $uniquename, ?string $validFrom, ?string $validTo, ?OrgUnit $parent, string $expectedIdentifier, ?\DateTimeInterface $expectedValidFrom, ?\DateTimeInterface $expectedValidTo): void
    {
        $subject = new OrgUnitFactory(new DateTimeConverter());
        $result = $subject->create(
            new \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit(
                123,
                $displayText,
                123,
                $lid,
                'shortcut',
                $shortText,
                $uniquename,
                $longText,
                null,
                null,
                $validFrom,
                $validTo,
            ),
            $parent,
        );
        $this->assertSame($expectedIdentifier, $result->getIdentifier());
        $this->assertSame($lid, $result->lid);
        $this->assertSame($displayText, $result->displayText);
        $this->assertSame($shortText, $result->shortText);
        $this->assertSame($longText, $result->longText);
        $this->assertSame($uniquename, $result->uniquename);
        $this->assertSame($parent, $result->parent);
        $this->assertEquals($expectedValidFrom, $result->validFrom);
        $this->assertEquals($expectedValidFrom, $result->validFrom());
        $this->assertEquals($expectedValidTo, $result->validTo);
        $this->assertEquals($expectedValidTo, $result->validTo());
    }
}
