<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\HisClientFacade\Factory;

use FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto;
use FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto;
use FGTCLB\HisClientFacade\Factory\PersonAttributeFactory;
use FGTCLB\HisClientFacade\Model\PersonAttribute;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class PersonAttributeFactoryTest extends UnitTestCase
{
    /**
     * @return mixed[]
     */
    public static function createPersonAttributeDataProvider(): array
    {
        return [
            [
                'attribute' => new PersonAttributeDto('fooValue', 123, 456),
                'attributeType' => new PersonAttributeTypeDto('fooField', false),
                'expectedResult' => new PersonAttribute(123, 'fooField', 'fooValue'),
            ],
        ];
    }

    #[Test]
    #[DataProvider('createPersonAttributeDataProvider')]
    public function createPersonAttribute(
        PersonAttributeDto $attribute,
        PersonAttributeTypeDto $attributeType,
        PersonAttribute $expectedResult,
    ): void {
        $subject = new PersonAttributeFactory();
        $result = $subject->create($attribute, $attributeType);
        $this->assertSame($expectedResult->personId, $result->personId);
        $this->assertSame($expectedResult->name, $result->name);
        $this->assertSame($expectedResult->value, $result->value);
    }
}
