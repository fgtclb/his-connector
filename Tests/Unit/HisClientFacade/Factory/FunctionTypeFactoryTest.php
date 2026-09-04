<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\HisClientFacade\Factory;

use FGTCLB\HisClient\KeyvalueService\Struct\KeyValue;
use FGTCLB\HisClientFacade\Factory\FunctionTypeFactory;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class FunctionTypeFactoryTest extends UnitTestCase
{
    /**
     * @return mixed[]
     */
    public static function createFunctionTypeDataProvider(): array
    {
        return [
            ['id' => 123, 'defaultText' => 'default', 'shortText' => 'short', 'longText' => 'long', 'uniquename' => 'unique', 'expectedIdentifier' => 'functionType-123'],
        ];
    }

    #[Test]
    #[DataProvider('createFunctionTypeDataProvider')]
    public function createFunctionType(int $id, string $defaultText, string $shortText, string $longText, string $uniquename, string $expectedIdentifier): void
    {
        $subject = new FunctionTypeFactory();
        $result = $subject->create(
            new KeyValue(
                $id,
                'guid',
                456,
                $uniquename,
                $shortText,
                $defaultText,
                $longText,
            ),
        );
        $this->assertSame($expectedIdentifier, $result->getIdentifier());
        $this->assertSame($id, $result->id);
        $this->assertSame($defaultText, $result->defaultText);
        $this->assertSame($shortText, $result->shortText);
        $this->assertSame($longText, $result->longText);
        $this->assertSame($uniquename, $result->uniquename);
    }
}
