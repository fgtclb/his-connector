<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\HisClientFacade\Factory;

use FGTCLB\HisClientFacade\Factory\OrgUnitFactory;
use FGTCLB\HisClientFacade\Model\OrgUnit;
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
            'without parent' => ['lid' => 123, 'displayText' => 'display', 'shortText' => 'short', 'longText' => 'long', 'uniquename' => 'unique', 'parent' => null],
            'with parent' => ['lid' => 123, 'displayText' => 'display', 'shortText' => 'short', 'longText' => 'long', 'uniquename' => 'unique', 'parent' => new OrgUnit(123, 'foo', 'bar', 'baz', 'bar', null)],
        ];
    }

    #[Test]
    #[DataProvider('createOrgUnitDataProvider')]
    public function createOrgUnit(int $lid, string $displayText, string $shortText, string $longText, string $uniquename, ?OrgUnit $parent): void
    {
        $subject = new OrgUnitFactory();
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
            ),
            $parent,
        );
        $this->assertSame((string)$lid, $result->getIdentifier());
        $this->assertSame($lid, $result->lid);
        $this->assertSame($displayText, $result->displayText);
        $this->assertSame($shortText, $result->shortText);
        $this->assertSame($longText, $result->longText);
        $this->assertSame($uniquename, $result->uniquename);
        $this->assertSame($parent, $result->parent);
    }
}
