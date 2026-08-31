<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\Configuration;

use FGTCLB\HisClientFacade\Model\Person;
use FGTCLB\HisClientFacade\Repository\PersonRepository;
use FGTCLB\HisConnector\Utility\MappingUtility;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class MappingUtilityTest extends UnitTestCase
{
    /**
     * @return array{className: class-string, expectedResult: string}[]
     */
    public static function createValueMappingFromConfigDataProvider(): array
    {
        return [
            ['className' => PersonRepository::class, 'expectedResult' => 'personRepository'],
            ['className' => Person::class, 'expectedResult' => 'person'],
        ];
    }

    /**
     * @param class-string $className
     */
    #[Test]
    #[DataProvider('createValueMappingFromConfigDataProvider')]
    public function createExpressionVariableName(string $className, string $expectedResult): void
    {
        $subject = new MappingUtility();
        $this->assertSame($expectedResult, $subject->createExpressionVariableName($className));
    }
}
