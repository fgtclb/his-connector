<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\Configuration;

use FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit;
use FGTCLB\HisClientFacade\Model\Account;
use FGTCLB\HisClientFacade\Model\Person;
use FGTCLB\HisConnector\Configuration\DataSource;
use FGTCLB\HisConnector\Configuration\FieldMapping;
use FGTCLB\HisConnector\Configuration\MappingConfiguration;
use FGTCLB\HisConnector\Configuration\SourceExpression;
use FGTCLB\HisConnector\Configuration\SourceField;
use FGTCLB\HisConnector\Configuration\SyncConfiguration;
use FGTCLB\HisConnector\Configuration\ValueMapping;
use FGTCLB\HisConnector\Exception\InvalidConfigurationException;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class SyncConfigurationTest extends UnitTestCase
{
    /**
     * @return array{config: mixed[], expectedSource: mixed, expectedTarget: mixed}[]
     */
    public static function createValueMappingFromConfigDataProvider(): array
    {
        return [
            ['config' => ['source' => 'foo', 'target' => 'bar'], 'expectedSource' => 'foo', 'expectedTarget' => 'bar'],
            ['config' => ['source' => 123, 'target' => 456], 'expectedSource' => 123, 'expectedTarget' => 456],
            ['config' => [], 'expectedSource' => null, 'expectedTarget' => null],
        ];
    }

    /**
     * @param mixed[] $config
     */
    #[Test]
    #[DataProvider('createValueMappingFromConfigDataProvider')]
    public function createValueMappingFromConfig(array $config, mixed $expectedSource, mixed $expectedTarget): void
    {
        $subject = ValueMapping::fromConfig($config);
        $this->assertSame($expectedSource, $subject->source);
        $this->assertSame($expectedTarget, $subject->target);
    }

    /**
     * @return array{config: mixed[], expectedRepository: string, expectedFetch: string, expectedFilter: mixed[]}[]
     */
    public static function createDataSourceFromConfigDataProvider(): array
    {
        return [
            [
                'config' => ['repository' => 'myrepository', 'fetch' => 'mycall()'],
                'expectedRepository' => 'myrepository',
                'expectedFetch' => 'mycall()',
                'expectedFilter' => [],
            ],
            [
                'config' => ['repository' => 'myrepository', 'fetch' => 'mycall()', 'filter' => ['foo' => 'test', 'bar' => 1]],
                'expectedRepository' => 'myrepository',
                'expectedFetch' => 'mycall()',
                'expectedFilter' => ['foo' => 'test', 'bar' => 1],
            ],
        ];
    }

    /**
     * @param mixed[] $config
     * @param mixed[] $expectedFilter
     */
    #[Test]
    #[DataProvider('createDataSourceFromConfigDataProvider')]
    public function createDataSourceFromConfig(array $config, string $expectedRepository, string $expectedFetch, array $expectedFilter): void
    {
        $subject = DataSource::fromConfig($config);
        $this->assertSame($expectedRepository, $subject->repository);
        $this->assertSame($expectedFetch, $subject->fetch);
        $this->assertSame($expectedFilter, $subject->filter);
    }

    /**
     * @return array{config: mixed[]}[]
     */
    public static function createDataSourceFromInvalidConfigDataProvider(): array
    {
        return [
            ['config' => []],
            ['config' => ['repository' => 'foo']],
            ['config' => ['fetch' => 'foo']],
        ];
    }

    /**
     * @param mixed[] $config
     */
    #[Test]
    #[DataProvider('createDataSourceFromInvalidConfigDataProvider')]
    public function createDataSourceFromInvalidConfig(array $config): void
    {
        $this->expectException(InvalidConfigurationException::class);
        $this->expectExceptionCode(1786904650);
        $subject = DataSource::fromConfig($config);
    }

    #[Test]
    public function sourceFieldProvidesAccessorPath(): void
    {
        $subject = new SourceField('foo.bar.baz');
        $this->assertSame('foo.bar.baz', $subject->sourceField);
        $this->assertSame('foo.bar.baz', (string)$subject);
        $this->assertSame('foo', $subject->variableName);
        $this->assertSame(['bar', 'baz'], $subject->accessorPath);
    }

    /**
     * @return array{config: mixed[], tableName: string, fieldName: string, expectedSourceField: SourceField|SourceExpression, expectedDefaultValue: mixed, expectedValueMapping: ValueMapping[]|null}[]
     */
    public static function createFieldMappingFromConfigDataProvider(): array
    {
        return [
            [
                'config' => ['sourceField' => 'foo.bar'],
                'tableName' => 'fe_users',
                'fieldName' => 'username',
                'expectedSourceField' => new SourceField('foo.bar'),
                'expectedDefaultValue' => null,
                'expectedValueMapping' => null,
            ],
            [
                'config' => ['sourceExpression' => 'foo.bar'],
                'tableName' => 'fe_users',
                'fieldName' => 'username',
                'expectedSourceField' => new SourceExpression('foo.bar'),
                'expectedDefaultValue' => null,
                'expectedValueMapping' => null,
            ],
            [
                'config' => ['sourceExpression' => 'foo.bar', 'defaultValue' => 'baz'],
                'tableName' => 'fe_users',
                'fieldName' => 'username',
                'expectedSourceField' => new SourceExpression('foo.bar'),
                'expectedDefaultValue' => 'baz',
                'expectedValueMapping' => null,
            ],
            [
                'config' => [
                    'sourceExpression' => 'foo.bar',
                    'defaultValue' => 'baz',
                    'valueMapping' => [
                        ['source' => 'from1', 'target' => 'to1'],
                        ['source' => 'from2', 'target' => 'to2'],
                    ],
                ],
                'tableName' => 'fe_users',
                'fieldName' => 'username',
                'expectedSourceField' => new SourceExpression('foo.bar'),
                'expectedDefaultValue' => 'baz',
                'expectedValueMapping' => [
                    ValueMapping::fromConfig(['source' => 'from1', 'target' => 'to1']),
                    ValueMapping::fromConfig(['source' => 'from2', 'target' => 'to2']),
                ],
            ],
        ];
    }

    /**
     * @param mixed[] $config
     * @param ValueMapping[]|null $expectedValueMapping
     */
    #[Test]
    #[DataProvider('createFieldMappingFromConfigDataProvider')]
    public function createFieldMappingFromConfig(
        array $config,
        string $tableName,
        string $fieldName,
        SourceField|SourceExpression $expectedSourceField,
        mixed $expectedDefaultValue,
        ?array $expectedValueMapping,
    ): void {
        $subject = FieldMapping::fromConfig($config, $tableName, $fieldName);
        $this->assertSame($tableName, $subject->tableName);
        $this->assertSame($fieldName, $subject->fieldName);
        $this->assertEquals($expectedSourceField, $subject->sourceField);
        $this->assertSame($expectedDefaultValue, $subject->defaultValue);
        $this->assertEquals($expectedValueMapping, $subject->valueMapping);
    }

    /**
     * @return array{config: mixed[], expectedExceptionCode: int}[]
     */
    public static function createFieldMappingFromInvalidConfigDataProvider(): array
    {
        return [
            ['config' => [], 'expectedExceptionCode' => 1786904652],
            ['config' => ['sourceExpression' => 'expression', 'sourceField' => 'field'], 'expectedExceptionCode' => 1787837443],
        ];
    }

    /**
     * @param mixed[] $config
     */
    #[Test]
    #[DataProvider('createFieldMappingFromInvalidConfigDataProvider')]
    public function createFieldMappingFromInvalidConfig(array $config, int $expectedExceptionCode): void
    {
        $this->expectException(InvalidConfigurationException::class);
        $this->expectExceptionCode($expectedExceptionCode);
        FieldMapping::fromConfig($config, 'foo', 'bar');
    }

    /**
     * @return array{config: mixed[], expectedEntityClassName: string, expectedTableName: string, expectedIdentityField: string, expectedSkipField: ?string, expectedFields: array<string, FieldMapping>}[]
     */
    public static function createMappingConfigurationFromConfigDataProvider(): array
    {
        return [
            [
                'config' => ['entityClassName' => Person::class, 'tableName' => 'table', 'identifierField' => 'identity'],
                'expectedEntityClassName' => Person::class,
                'expectedTableName' => 'table',
                'expectedIdentityField' => 'identity',
                'expectedSkipField' => null,
                'expectedFields' => [],
            ],
            [
                'config' => [
                    'entityClassName' => Person::class,
                    'tableName' => 'table',
                    'identifierField' => 'identity',
                    'skipField' => 'skip',
                    'fields' => [
                        'field' => [
                            'sourceField' => 'foo.bar',
                        ],
                    ],
                ],
                'expectedEntityClassName' => Person::class,
                'expectedTableName' => 'table',
                'expectedIdentityField' => 'identity',
                'expectedSkipField' => 'skip',
                'expectedFields' => ['field' => FieldMapping::fromConfig(['sourceField' => 'foo.bar'], 'table', 'field')],
            ],
        ];
    }

    /**
     * @param mixed[] $config
     * @param FieldMapping[] $expectedFields
     */
    #[Test]
    #[DataProvider('createMappingConfigurationFromConfigDataProvider')]
    public function createMappingConfigurationFromConfig(
        array $config,
        string $expectedEntityClassName,
        string $expectedTableName,
        string $expectedIdentityField,
        ?string $expectedSkipField,
        array $expectedFields,
    ): void {
        $subject = MappingConfiguration::fromConfig($config);
        $this->assertSame($expectedEntityClassName, $subject->entityClassName);
        $this->assertSame($expectedTableName, $subject->tableName);
        $this->assertSame($expectedIdentityField, $subject->identifierField);
        $this->assertSame($expectedSkipField, $subject->skipField);
        $this->assertEquals($expectedFields, $subject->fields);
    }

    /**
     * @return array{config: mixed[], expectedExceptionCode: int}[]
     */
    public static function createMappingConfigurationFromInvalidConfigDataProvider(): array
    {
        return [
            'without identifierField' => ['config' => ['entityClassName' => Person::class, 'tableName' => 'bar'], 'expectedExceptionCode' => 1786904651],
            'without entityClassName' => ['config' => ['tableName' => 'foo', 'identifierField' => 'bar'], 'expectedExceptionCode' => 1786904651],
            'without tableName' => ['config' => ['entityClassName' => Person::class, 'identifierField' => 'bar'], 'expectedExceptionCode' => 1786904651],
            'with invalid entityClassName' => ['config' => ['entityClassName' => 'InvalidClass', 'tableName' => 'foo', 'identifierField' => 'bar'], 'expectedExceptionCode' => 1788198253],
        ];
    }

    /**
     * @param mixed[] $config
     */
    #[Test]
    #[DataProvider('createMappingConfigurationFromInvalidConfigDataProvider')]
    public function createMappingConfigurationFromInvalidConfig(array $config, int $expectedExceptionCode): void
    {
        $this->expectException(InvalidConfigurationException::class);
        $this->expectExceptionCode($expectedExceptionCode);
        MappingConfiguration::fromConfig($config);
    }

    /**
     * @return array{config: mixed[], originalFile: ?string, expectedName: string, expectedDescription: string, expectedVersion: string, expectedSchema: string, expectedSource: DataSource, expectedMapping: MappingConfiguration[]}[]
     */
    public static function createSyncConfigurationFromConfigDataProvider(): array
    {
        return [
            'full' => [
                'config' => [
                    'name' => 'config name',
                    'description' => 'config description',
                    'version' => 1,
                    'schema' => 'https://example.com/schema.json',
                    'source' => ['repository' => 'foo', 'fetch' => 'bar()'],
                    'mapping' => [
                        ['entityClassName' => Person::class, 'tableName' => 'table', 'identifierField' => 'identity'],
                    ],
                ],
                'originalFile' => null,
                'expectedName' => 'config name',
                'expectedDescription' => 'config description',
                'expectedVersion' => '1',
                'expectedSchema' => 'https://example.com/schema.json',
                'expectedSource' => DataSource::fromConfig(['repository' => 'foo', 'fetch' => 'bar()']),
                'expectedMapping' => [
                    MappingConfiguration::fromConfig(['entityClassName' => Person::class, 'tableName' => 'table', 'identifierField' => 'identity']),
                ],
            ],
            'minimal' => [
                'config' => [
                    'source' => ['repository' => 'foo', 'fetch' => 'bar()'],
                ],
                'originalFile' => null,
                'expectedName' => '',
                'expectedDescription' => '',
                'expectedVersion' => '',
                'expectedSchema' => '',
                'expectedSource' => DataSource::fromConfig(['repository' => 'foo', 'fetch' => 'bar()']),
                'expectedMapping' => [],
            ],
            'fallback to filename' => [
                'config' => [
                    'source' => ['repository' => 'foo', 'fetch' => 'bar()'],
                ],
                'originalFile' => 'path/to/mapping.yaml',
                'expectedName' => 'mapping.yaml',
                'expectedDescription' => '',
                'expectedVersion' => '',
                'expectedSchema' => '',
                'expectedSource' => DataSource::fromConfig(['repository' => 'foo', 'fetch' => 'bar()']),
                'expectedMapping' => [],
            ],
        ];
    }

    /**
     * @param mixed[] $config
     * @param MappingConfiguration[] $expectedMapping
     */
    #[Test]
    #[DataProvider('createSyncConfigurationFromConfigDataProvider')]
    public function createSyncConfigurationFromConfig(
        array $config,
        ?string $originalFile,
        string $expectedName,
        string $expectedDescription,
        string $expectedVersion,
        string $expectedSchema,
        DataSource $expectedSource,
        array $expectedMapping,
    ): void {
        $subject = SyncConfiguration::fromConfig($config, $originalFile);
        $this->assertSame($originalFile, $subject->originalFile);
        $this->assertSame($expectedName, $subject->name);
        $this->assertSame($expectedDescription, $subject->description);
        $this->assertSame($expectedVersion, $subject->version);
        $this->assertSame($expectedSchema, $subject->schema);
        $this->assertEquals($expectedSource, $subject->source);
        $this->assertEquals($expectedMapping, $subject->mapping);
    }

    /**
     * @return array{fieldMappings: mixed[], className: string, expectedMappings: MappingConfiguration[]}[]
     */
    public static function getMappingsForClassNameDataProvider(): array
    {
        return [
            'one match' => [
                'fieldMappings' => [
                    ['entityClassName' => Account::class, 'tableName' => 'fe_users', 'identifierField' => 'description'],
                    ['entityClassName' => OrgUnit::class, 'tableName' => 'foo_orgunit', 'identifierField' => 'description'],
                ],
                'className' => Account::class,
                'expectedMappings' => [
                    MappingConfiguration::fromConfig(['entityClassName' => Account::class, 'tableName' => 'fe_users', 'identifierField' => 'description']),
                ],
            ],
            'multiple matches' => [
                'fieldMappings' => [
                    ['entityClassName' => Account::class, 'tableName' => 'fe_users', 'identifierField' => 'description'],
                    ['entityClassName' => Account::class, 'tableName' => 'tt_address', 'identifierField' => 'description'],
                    ['entityClassName' => OrgUnit::class, 'tableName' => 'foo_orgunit', 'identifierField' => 'description'],
                ],
                'className' => Account::class,
                'expectedMappings' => [
                    MappingConfiguration::fromConfig(['entityClassName' => Account::class, 'tableName' => 'fe_users', 'identifierField' => 'description']),
                    MappingConfiguration::fromConfig(['entityClassName' => Account::class, 'tableName' => 'tt_address', 'identifierField' => 'description']),
                ],
            ],
        ];
    }

    /**
     * @param mixed[] $fieldMappings
     * @param MappingConfiguration[] $expectedMappings
     */
    #[Test]
    #[DataProvider('getMappingsForClassNameDataProvider')]
    public function getMappingsForClassName(array $fieldMappings, string $className, array $expectedMappings): void
    {
        $subject = SyncConfiguration::fromConfig(['source' => ['repository' => 'foo', 'fetch' => 'bar()'], 'mapping' => $fieldMappings]);
        $this->assertEquals($expectedMappings, $subject->getMappingsForClassName($className));
    }

    /**
     * @return array{fieldMappings: mixed[], className: string, expectedMapping: ?MappingConfiguration}[]
     */
    public static function getMappingForClassNameAndTableNameDataProvider(): array
    {
        return [
            'one match for className' => [
                'fieldMappings' => [
                    ['entityClassName' => Account::class, 'tableName' => 'fe_users', 'identifierField' => 'description'],
                    ['entityClassName' => OrgUnit::class, 'tableName' => 'foo_orgunit', 'identifierField' => 'description'],
                ],
                'className' => Account::class,
                'tableName' => 'fe_users',
                'expectedMapping' => MappingConfiguration::fromConfig(['entityClassName' => Account::class, 'tableName' => 'fe_users', 'identifierField' => 'description']),
            ],
            'multiple matches for className' => [
                'fieldMappings' => [
                    ['entityClassName' => Account::class, 'tableName' => 'fe_users', 'identifierField' => 'description'],
                    ['entityClassName' => Account::class, 'tableName' => 'tt_address', 'identifierField' => 'description'],
                    ['entityClassName' => OrgUnit::class, 'tableName' => 'foo_orgunit', 'identifierField' => 'description'],
                ],
                'className' => Account::class,
                'tableName' => 'fe_users',
                'expectedMapping' => MappingConfiguration::fromConfig(['entityClassName' => Account::class, 'tableName' => 'fe_users', 'identifierField' => 'description']),
            ],
            'no match' => [
                'fieldMappings' => [
                    ['entityClassName' => Account::class, 'tableName' => 'tt_address', 'identifierField' => 'description'],
                    ['entityClassName' => OrgUnit::class, 'tableName' => 'foo_orgunit', 'identifierField' => 'description'],
                ],
                'className' => Account::class,
                'tableName' => 'fe_users',
                'expectedMapping' => null,
            ],
        ];
    }

    /**
     * @param mixed[] $fieldMappings
     */
    #[Test]
    #[DataProvider('getMappingForClassNameAndTableNameDataProvider')]
    public function getMappingForClassNameAndTableName(array $fieldMappings, string $className, string $tableName, ?MappingConfiguration $expectedMapping): void
    {
        $subject = SyncConfiguration::fromConfig(['source' => ['repository' => 'foo', 'fetch' => 'bar()'], 'mapping' => $fieldMappings]);
        $this->assertEquals($expectedMapping, $subject->getMappingForClassNameAndTableName($className, $tableName));
    }
}
