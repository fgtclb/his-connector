<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\Service;

use FGTCLB\HisClientFacade\Collection\AccountCollection;
use FGTCLB\HisClientFacade\Collection\ContactDetailsCollection;
use FGTCLB\HisClientFacade\Collection\PersonAttributeCollection;
use FGTCLB\HisClientFacade\Collection\PersonFunctionCollection;
use FGTCLB\HisClientFacade\Model\Person;
use FGTCLB\HisClientFacade\Model\PersonalData;
use FGTCLB\HisConnector\Configuration\FieldMapping;
use FGTCLB\HisConnector\Exception\FieldMappingException;
use FGTCLB\HisConnector\Service\FieldMapper;
use FGTCLB\HisConnector\Tests\Functional\AbstractHisConnectorTestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

final class FieldMapperTest extends AbstractHisConnectorTestCase
{
    /**
     * @return array{config: mixed[], expectedResult: mixed}[]
     */
    public static function applyFieldMappingDataProvider(): array
    {
        return [
            'field mapping from scalar value' => [
                'config' => ['sourceField' => 'foo'],
                'expectedResult' => 'bar',
            ],
            'field mapping from non-existent field' => [
                'config' => ['sourceField' => 'foo.bar'],
                'expectedResult' => null,
            ],
            'field mapping from public property' => [
                'config' => ['sourceField' => 'person.firstname'],
                'expectedResult' => 'first name',
            ],
            'field mapping from getter' => [
                'config' => ['sourceField' => 'person.personalData.workplaceDescription'],
                'expectedResult' => 'workplace',
            ],
            'field mapping from nullable property' => [
                'config' => ['sourceField' => 'person.gender.uniquename'],
                'expectedResult' => null,
            ],
            'expression with result' => [
                'config' => ['sourceExpression' => 'person.getPersonalData()?.workplaceDescription'],
                'expectedResult' => 'workplace',
            ],
            'expression without result' => [
                'config' => ['sourceExpression' => 'person.gender?.getUniquename()'],
                'expectedResult' => null,
            ],
            'matching value mapping' => [
                'config' => [
                    'sourceField' => 'person.id',
                    'valueMapping' => [['source' => 123, 'target' => 456], ['source' => 456, 'target' => 789]],
                    'valueMappingDefault' => 432,
                ],
                'expectedResult' => 456,
            ],
            'non-matching value mapping' => [
                'config' => [
                    'sourceField' => 'person.id',
                    'valueMapping' => [['source' => 234, 'target' => 456], ['source' => 456, 'target' => 789]],
                ],
                'expectedResult' => 123,
            ],
            'non-matching value mapping with default' => [
                'config' => [
                    'sourceField' => 'person.id',
                    'valueMapping' => [['source' => 234, 'target' => 456], ['source' => 456, 'target' => 789]],
                    'valueMappingDefault' => 432,
                ],
                'expectedResult' => 432,
            ],
            'fallback value' => [
                'config' => [
                    'sourceField' => 'person.country.defaulttext',
                    'fallbackValue' => 'Germany',
                ],
                'expectedResult' => 'Germany',
            ],
        ];
    }

    /**
     * @param mixed[] $config
     */
    #[Test]
    #[DataProvider('applyFieldMappingDataProvider')]
    public function applyFieldMapping(array $config, mixed $expectedResult): void
    {
        $availableVariables = [
            'person' => new Person(
                id: 123,
                firstname: 'first name',
                surname: 'last name',
                gender: null,
                dateofbirth: '1990-01-01',
                allfirstnames: null,
                birthname: null,
                artistname: null,
                nameprefix: null,
                namesuffix: null,
                academicdegreesuffix: null,
                academicdegree: null,
                title: null,
                birthcity: null,
                country: null,
                personInfo: null,
                createdAt: null,
                updatedAt: null,
                fetchContactDetailsClosure: fn() => ContactDetailsCollection::fromArray([]),
                fetchPersonalDataClosure: fn() => new PersonalData(123, 'workplace', 'academic career', null, null, null, null, null),
                fetchPicturesClosure: fn(int $hisKey) => [],
                fetchFunctionsClosure: fn() => PersonFunctionCollection::fromArray([]),
                fetchAccountsClosure: fn() => AccountCollection::fromArray([]),
                fetchAttributesClosure: fn() => PersonAttributeCollection::fromArray([]),
            ),
            'foo' => 'bar',
        ];
        $subject = new FieldMapper();
        $this->assertEquals($expectedResult, $subject->applyFieldMapping(FieldMapping::fromConfig($config, 'some_table', 'some_field'), $availableVariables));
    }

    /**
     * @return array{config: mixed[], expectedException: class-string<\Throwable>, expectedExceptionCode: int}[]
     */
    public static function applyFieldMappingThrowsExceptionDataProvider(): array
    {
        return [
            'access non-existent variable' => [
                'config' => ['sourceField' => 'nonexistent'],
                'expectedException' => FieldMappingException::class,
                'expectedExceptionCode' => 1788341863,
            ],
            'invalid expression syntax' => [
                'config' => ['sourceExpression' => 'person.getPersonalData('],
                'expectedException' => FieldMappingException::class,
                'expectedExceptionCode' => 1788341861,
            ],
            'invalid expression' => [
                'config' => ['sourceExpression' => 'person.getSomething().getSomethingElse()'],
                'expectedException' => FieldMappingException::class,
                'expectedExceptionCode' => 1788341862,
            ],
        ];
    }

    /**
     * @param mixed[] $config
     * @param class-string<\Throwable> $expectedException
     */
    #[Test]
    #[DataProvider('applyFieldMappingThrowsExceptionDataProvider')]
    public function applyFieldMappingThrowsException(array $config, string $expectedException, int $expectedExceptionCode): void
    {
        $availableVariables = [
            'person' => new Person(
                id: 123,
                firstname: 'first name',
                surname: 'last name',
                gender: null,
                dateofbirth: '1990-01-01',
                allfirstnames: null,
                birthname: null,
                artistname: null,
                nameprefix: null,
                namesuffix: null,
                academicdegreesuffix: null,
                academicdegree: null,
                title: null,
                birthcity: null,
                country: null,
                personInfo: null,
                createdAt: null,
                updatedAt: null,
                fetchContactDetailsClosure: fn() => ContactDetailsCollection::fromArray([]),
                fetchPersonalDataClosure: fn() => new PersonalData(123, 'workplace', 'academic career', null, null, null, null, null),
                fetchPicturesClosure: fn(int $hisKey) => [],
                fetchFunctionsClosure: fn() => PersonFunctionCollection::fromArray([]),
                fetchAccountsClosure: fn() => AccountCollection::fromArray([]),
                fetchAttributesClosure: fn() => PersonAttributeCollection::fromArray([]),
            ),
            'foo' => 'bar',
            'nested' => ['foo' => 'bar'],
        ];
        $this->expectException($expectedException);
        $this->expectExceptionCode($expectedExceptionCode);
        $subject = new FieldMapper();
        $subject->applyFieldMapping(FieldMapping::fromConfig($config, 'some_table', 'some_field'), $availableVariables);
    }
}
