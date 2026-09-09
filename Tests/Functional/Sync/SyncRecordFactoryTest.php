<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\Service;

use FGTCLB\HisClient\PersonService\Struct\Title;
use FGTCLB\HisClientFacade\Collection\AccountCollection;
use FGTCLB\HisClientFacade\Collection\ContactDetailsCollection;
use FGTCLB\HisClientFacade\Collection\EmailAddressCollection;
use FGTCLB\HisClientFacade\Collection\HyperlinkCollection;
use FGTCLB\HisClientFacade\Collection\MessengerCollection;
use FGTCLB\HisClientFacade\Collection\PersonAttributeCollection;
use FGTCLB\HisClientFacade\Collection\PersonFunctionCollection;
use FGTCLB\HisClientFacade\Collection\PersonPictureCollection;
use FGTCLB\HisClientFacade\Collection\PhoneNumberCollection;
use FGTCLB\HisClientFacade\Model\EntityInterface;
use FGTCLB\HisClientFacade\Model\FunctionType;
use FGTCLB\HisClientFacade\Model\Person;
use FGTCLB\HisClientFacade\Model\PersonalData;
use FGTCLB\HisClientFacade\Model\PersonFunction;
use FGTCLB\HisClientFacade\Model\PersonPicture;
use FGTCLB\HisConnector\Configuration\MappingConfiguration;
use FGTCLB\HisConnector\Configuration\SyncConfiguration;
use FGTCLB\HisConnector\Exception\SyncException;
use FGTCLB\HisConnector\Service\FieldMapper;
use FGTCLB\HisConnector\Sync\SyncField;
use FGTCLB\HisConnector\Sync\SyncFile;
use FGTCLB\HisConnector\Sync\SyncRecord;
use FGTCLB\HisConnector\Sync\SyncRecordFactory;
use FGTCLB\HisConnector\Sync\SyncRecordStatusCheckerInterface;
use FGTCLB\HisConnector\Sync\SyncRelatedFiles;
use FGTCLB\HisConnector\Sync\SyncRelatedRecords;
use FGTCLB\HisConnector\Tests\Functional\AbstractHisConnectorTestCase;
use FGTCLB\HisConnector\Utility\MappingUtility;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\CMS\Core\Schema\TcaSchemaFactory;

final class SyncRecordFactoryTest extends AbstractHisConnectorTestCase
{
    protected array $testExtensionsToLoad = [
        'fgtclb/his-connector',
        'typo3conf/ext/his_connector/Tests/Functional/Sync/Fixtures/Extensions/test_sync',
    ];

    protected bool $initializeDatabase = false;

    /**
     * @return array{source: EntityInterface, config: mixed[], tableName: string, recordShouldBeSkipped: bool, expectedRecord: ?SyncRecord, expectedInsertUpdateIds: mixed[]}[]
     */
    public static function createDataProvider(): iterable
    {
        $personFunction = new PersonFunction(
            id: 789,
            orgUnit: null,
            type: new FunctionType(234, 'function unique', 'function short', 'function default', 'function long'),
            room: null,
            postAddress: null,
            emailAddresses: EmailAddressCollection::fromArray([]),
            phoneNumbers: PhoneNumberCollection::fromArray([]),
            hyperlinks: HyperlinkCollection::fromArray([]),
            messengers: MessengerCollection::fromArray([]),
            validFrom: null,
            validTo: null,
        );
        $personPicture = new PersonPicture(
            id: 678,
            fileContents: 'blob',
            mimeType: 'image/png',
            description: 'image description',
            originalFileName: 'original.png',
        );
        $title = new Title();
        $title->setId(567)->setDefaulttext('title default');
        $person = new Person(
            id: 456,
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
            title: $title,
            birthcity: null,
            country: null,
            personInfo: null,
            createdAt: null,
            updatedAt: null,
            fetchContactDetailsClosure: fn() => ContactDetailsCollection::fromArray([]),
            fetchPersonalDataClosure: fn() => new PersonalData(456, 'workplace', 'academic career', null, null, null, null, null),
            fetchPicturesClosure: fn(int $hisKey) => PersonPictureCollection::fromArray([$personPicture]),
            fetchFunctionsClosure: fn() => PersonFunctionCollection::fromArray([$personFunction]),
            fetchAccountsClosure: fn() => AccountCollection::fromArray([]),
            fetchAttributesClosure: fn() => PersonAttributeCollection::fromArray([]),
        );

        //
        // Simple sync case without relations or existing records
        //
        $expectedRecord = new SyncRecord(
            tableName: 'fe_users',
            storagePage: 123,
            syncIdentifier: new SyncField('hisconnector_identifier', 'person-456'),
            insertUpdateId: -456,
            fields: [
                new SyncField('title', $title),
                new SyncField('first_name', 'first name'),
                new SyncField('last_name', 'last name'),
            ],
        );
        yield 'sync record' => [
            'source' => $person,
            'config' => [
                'source' => ['repository' => 'personRepository', 'fetch' => 'fetchById(123)'],
                'storagePage' => 123,
                'mapping' => [
                    [
                        'entityClassName' => Person::class,
                        'tableName' =>  'fe_users',
                        'fields' => [
                            'title' => ['sourceField' => 'person.title'],
                            'first_name' => ['sourceField' => 'person.firstname'],
                            'last_name' => ['sourceField' => 'person.surname'],
                        ],
                    ],
                ],
            ],
            'tableName' => 'fe_users',
            'recordShouldBeSkipped' => false,
            'initialInsertUpdateIds' => [],
            'expectedRecord' => $expectedRecord,
            'expectedInsertUpdateIds' => [123 => ['fe_users' => ['hisconnector_identifier' => ['person-456' => -456]]]],
        ];

        //
        // Simulated skip flag
        //
        yield 'skip sync' => [
            'source' => $person,
            'config' => [
                'source' => ['repository' => 'personRepository', 'fetch' => 'fetchById(123)'],
                'storagePage' => 123,
                'mapping' => [
                    [
                        'entityClassName' => Person::class,
                        'tableName' =>  'fe_users',
                    ],
                ],
            ],
            'tableName' => 'fe_users',
            'recordShouldBeSkipped' => true,
            'initialInsertUpdateIds' => [],
            'expectedRecord' => null,
            'expectedInsertUpdateIds' => [123 => ['fe_users' => ['hisconnector_identifier' => ['person-456' => -456]]]],
        ];

        //
        // Sync record with 1:n relation
        //
        $expectedRecord = new SyncRecord(
            tableName: 'fe_users',
            storagePage: 123,
            syncIdentifier: new SyncField('hisconnector_identifier', 'person-456'),
            insertUpdateId: -456,
            fields: [
                new SyncField('first_name', 'first name'),
                new SyncRelatedRecords('usergroup', [
                    new SyncRecord(
                        tableName: 'fe_groups',
                        storagePage: 123,
                        syncIdentifier: new SyncField('hisconnector_identifier', 'personFunction-789'),
                        insertUpdateId: -789,
                        fields: [
                            new SyncField('title', 'function default'),
                            new SyncField('description', 456),
                        ],
                    ),
                ]),
            ],
        );
        yield 'with 1:n subrecord' => [
            'source' => $person,
            'config' => [
                'source' => ['repository' => 'personRepository', 'fetch' => 'fetchById(123)'],
                'storagePage' => 123,
                'mapping' => [
                    [
                        'entityClassName' => Person::class,
                        'tableName' => 'fe_users',
                        'fields' => [
                            'first_name' => ['sourceField' => 'person.firstname'],
                            'usergroup' => ['sourceField' => 'person.functions'],
                        ],
                    ],
                    [
                        'entityClassName' => PersonFunction::class,
                        'tableName' => 'fe_groups',
                        'fields' => [
                            'title' => ['sourceField' => 'personFunction.type.defaultText'],
                            'description' => ['sourceField' => 'person.id'],
                        ],
                    ],
                ],
            ],
            'tableName' => 'fe_users',
            'recordShouldBeSkipped' => false,
            'initialInsertUpdateIds' => [],
            'expectedRecord' => $expectedRecord,
            'expectedInsertUpdateIds' => [
                123 => [
                    'fe_users' => ['hisconnector_identifier' => ['person-456' => -456]],
                    'fe_groups' => ['hisconnector_identifier' => ['personFunction-789' => -789]],
                ],
            ],
        ];

        //
        // Sync record with 1:n relation to table with relation field
        //
        $expectedRecord = new SyncRecord(
            tableName: 'fe_users',
            storagePage: 123,
            syncIdentifier: new SyncField('hisconnector_identifier', 'person-456'),
            insertUpdateId: -456,
            fields: [
                new SyncField('first_name', 'first name'),
                new SyncRelatedRecords('test_sync_records', [
                    new SyncRecord(
                        tableName: 'test_sync_record',
                        storagePage: 123,
                        syncIdentifier: new SyncField('hisconnector_identifier', 'personFunction-789'),
                        relation: new SyncField('parentid', -456),
                        insertUpdateId: -789,
                        fields: [
                            new SyncField('title', 'function default'),
                        ],
                    ),
                ]),
            ],
        );
        yield 'with 1:n subrecord to table with relation field' => [
            'source' => $person,
            'config' => [
                'source' => ['repository' => 'personRepository', 'fetch' => 'fetchById(123)'],
                'storagePage' => 123,
                'mapping' => [
                    [
                        'entityClassName' => Person::class,
                        'tableName' => 'fe_users',
                        'fields' => [
                            'first_name' => ['sourceField' => 'person.firstname'],
                            'test_sync_records' => ['sourceField' => 'person.functions'],
                        ],
                    ],
                    [
                        'entityClassName' => PersonFunction::class,
                        'tableName' => 'test_sync_record',
                        'fields' => [
                            'title' => ['sourceField' => 'personFunction.type.defaultText'],
                        ],
                    ],
                ],
            ],
            'tableName' => 'fe_users',
            'recordShouldBeSkipped' => false,
            'initialInsertUpdateIds' => [],
            'expectedRecord' => $expectedRecord,
            'expectedInsertUpdateIds' => [
                123 => [
                    'fe_users' => ['hisconnector_identifier' => ['person-456' => -456]],
                    'test_sync_record' => ['hisconnector_identifier' => ['personFunction-789' => -789]],
                ],
            ],
        ];

        //
        // Simulate existing record
        //
        $expectedRecord = new SyncRecord(
            tableName: 'fe_users',
            storagePage: 123,
            syncIdentifier: new SyncField('hisconnector_identifier', 'person-456'),
            insertUpdateId: -456,
            fields: [
                new SyncField('first_name', 'first name'),
                new SyncRelatedRecords('usergroup', [
                    new SyncRecord(
                        tableName: 'fe_groups',
                        storagePage: 123,
                        syncIdentifier: new SyncField('hisconnector_identifier', 'personFunction-789'),
                        insertUpdateId: 'NEW789',
                        fields: [
                            new SyncField('title', 'function default'),
                            new SyncField('description', 456),
                        ],
                    ),
                ]),
            ],
        );
        yield 'with 1:n subrecord with existing id' => [
            'source' => $person,
            'config' => [
                'source' => ['repository' => 'personRepository', 'fetch' => 'fetchById(123)'],
                'storagePage' => 123,
                'mapping' => [
                    [
                        'entityClassName' => Person::class,
                        'tableName' => 'fe_users',
                        'fields' => [
                            'first_name' => ['sourceField' => 'person.firstname'],
                            'usergroup' => ['sourceField' => 'person.functions'],
                        ],
                    ],
                    [
                        'entityClassName' => PersonFunction::class,
                        'tableName' => 'fe_groups',
                        'fields' => [
                            'title' => ['sourceField' => 'personFunction.type.defaultText'],
                            'description' => ['sourceField' => 'person.id'],
                        ],
                    ],
                ],
            ],
            'tableName' => 'fe_users',
            'recordShouldBeSkipped' => false,
            'initialInsertUpdateIds' => [
                123 => [
                    'fe_groups' => ['hisconnector_identifier' => ['personFunction-789' => 'NEW789']],
                ],
            ],
            'expectedRecord' => $expectedRecord,
            'expectedInsertUpdateIds' => [
                123 => [
                    'fe_users' => ['hisconnector_identifier' => ['person-456' => -456]],
                    'fe_groups' => ['hisconnector_identifier' => ['personFunction-789' => 'NEW789']],
                ],
            ],
        ];

        //
        // Sync record with 1:1 relation
        //
        $expectedRecord = new SyncRecord(
            tableName: 'fe_users',
            storagePage: 123,
            syncIdentifier: new SyncField('hisconnector_identifier', 'person-456'),
            insertUpdateId: -456,
            fields: [
                new SyncField('first_name', 'first name'),
                new SyncRelatedRecords('usergroup', [
                    new SyncRecord(
                        tableName: 'fe_groups',
                        storagePage: 123,
                        syncIdentifier: new SyncField('hisconnector_identifier', 'personalData-456'),
                        insertUpdateId: -456,
                        fields: [
                            new SyncField('title', 'workplace'),
                            new SyncField('description', 456),
                        ],
                    ),
                ]),
            ],
        );
        yield 'with 1:1 subrecord' => [
            'source' => $person,
            'config' => [
                'source' => ['repository' => 'personRepository', 'fetch' => 'fetchById(123)'],
                'storagePage' => 123,
                'mapping' => [
                    [
                        'entityClassName' => Person::class,
                        'tableName' => 'fe_users',
                        'fields' => [
                            'first_name' => ['sourceField' => 'person.firstname'],
                            'usergroup' => ['sourceField' => 'person.personalData'],
                        ],
                    ],
                    [
                        'entityClassName' => PersonalData::class,
                        'tableName' => 'fe_groups',
                        'fields' => [
                            'title' => ['sourceField' => 'personalData.workplaceDescription'],
                            'description' => ['sourceField' => 'person.id'],
                        ],
                    ],
                ],
            ],
            'tableName' => 'fe_users',
            'recordShouldBeSkipped' => false,
            'initialInsertUpdateIds' => [],
            'expectedRecord' => $expectedRecord,
            'expectedInsertUpdateIds' => [
                123 => [
                    'fe_users' => ['hisconnector_identifier' => ['person-456' => -456]],
                    'fe_groups' => ['hisconnector_identifier' => ['personalData-456' => -456]],
                ],
            ],
        ];

        //
        // Sync record with file reference
        //
        $expectedRecord = new SyncRecord(
            tableName: 'fe_users',
            storagePage: 123,
            syncIdentifier: new SyncField('hisconnector_identifier', 'person-456'),
            insertUpdateId: -456,
            fields: [
                new SyncField('first_name', 'first name'),
                new SyncRelatedFiles('image', [
                    new SyncFile(
                        fileStorageFolder: '1:/user_upload/',
                        syncIdentifier: 'personPicture-678',
                        fileContents: 'blob',
                        mimeType: 'image/png',
                        originalFileName: 'original.png',
                        description: 'image description',
                        insertUpdateId: null,
                    ),
                ]),
            ],
        );

        yield 'with file relation' => [
            'source' => $person,
            'config' => [
                'source' => ['repository' => 'personRepository', 'fetch' => 'fetchById(123)'],
                'storagePage' => 123,
                'fileStorageFolder' => '1:/user_upload/',
                'mapping' => [
                    [
                        'entityClassName' => Person::class,
                        'tableName' => 'fe_users',
                        'fields' => [
                            'first_name' => ['sourceField' => 'person.firstname'],
                            'image' => ['sourceExpression' => 'person.getPictures(1).first()'],
                        ],
                    ],
                ],
            ],
            'tableName' => 'fe_users',
            'recordShouldBeSkipped' => false,
            'initialInsertUpdateIds' => [],
            'expectedRecord' => $expectedRecord,
            'expectedInsertUpdateIds' => [
                123 => [
                    'fe_users' => ['hisconnector_identifier' => ['person-456' => -456]],
                ],
            ],
        ];
    }

    /**
     * @param mixed[] $config
     * @param mixed[] $initialInsertUpdateIds
     * @param mixed[] $expectedInsertUpdateIds
     */
    #[Test]
    #[DataProvider('createDataProvider')]
    public function create(EntityInterface $source, array $config, string $tableName, bool $recordShouldBeSkipped, array $initialInsertUpdateIds, ?SyncRecord $expectedRecord, array $expectedInsertUpdateIds): void
    {
        $syncConfig = SyncConfiguration::fromConfig($config);
        $mappingConfig = $syncConfig->getMappingForClassNameAndTableName(get_class($source), $tableName);

        $statusCheckerMock = $this->createMock(SyncRecordStatusCheckerInterface::class);
        // Returns negative original id for testing purposes
        $statusCheckerMock->method('determineInsertUpdateIdFromDatabase')->willReturnCallback(
            fn(SyncRecord $syncRecord): int => (int)preg_replace('#[^0-9]#', '', $syncRecord->syncIdentifier->getValue()) * -1
        );
        $statusCheckerMock->method('recordShouldBeSkipped')->willReturn($recordShouldBeSkipped);

        $subject = new SyncRecordFactory(
            $statusCheckerMock,
            $this->get(TcaSchemaFactory::class),
            $this->get(MappingUtility::class),
            $this->get(FieldMapper::class),
        );
        $this->assertInstanceOf(MappingConfiguration::class, $mappingConfig);
        $this->assertEquals($expectedRecord, $subject->createRecord($source, $syncConfig, $mappingConfig, [], $initialInsertUpdateIds));
        $this->assertEquals($expectedInsertUpdateIds, $initialInsertUpdateIds);
    }

    /**
     * @return array{source: EntityInterface, config: mixed[], tableName: string, expectedExceptionCode: int}[]
     */
    public static function createThrowsExceptionDataProvider(): iterable
    {
        $personPicture = new PersonPicture(
            id: 678,
            fileContents: 'blob',
            mimeType: 'image/png',
            description: 'image description',
            originalFileName: 'original.png',
        );
        $person = new Person(
            id: 456,
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
            fetchPersonalDataClosure: fn() => new PersonalData(456, 'workplace', 'academic career', null, null, null, null, null),
            fetchPicturesClosure: fn(int $hisKey) => PersonPictureCollection::fromArray([$personPicture]),
            fetchFunctionsClosure: fn() => PersonFunctionCollection::fromArray([]),
            fetchAccountsClosure: fn() => AccountCollection::fromArray([]),
            fetchAttributesClosure: fn() => PersonAttributeCollection::fromArray([]),
        );

        yield 'missing storage page' => [
            'source' => $person,
            'config' => [
                'source' => ['repository' => 'personRepository', 'fetch' => 'fetchById(123)'],
                'mapping' => [
                    [
                        'entityClassName' => Person::class,
                        'tableName' =>  'fe_users',
                    ],
                ],
            ],
            'tableName' => 'fe_users',
            'expectedExceptionCode' => 1788609240,
        ];
        yield 'mapping object to non-relation field' => [
            'source' => $person,
            'config' => [
                'source' => ['repository' => 'personRepository', 'fetch' => 'fetchById(123)'],
                'storagePage' => 123,
                'mapping' => [
                    [
                        'entityClassName' => Person::class,
                        'tableName' =>  'fe_users',
                        'fields' => [
                            'first_name' => [
                                'sourceField' => 'person.functions',
                            ],
                        ],
                    ],
                ],
            ],
            'tableName' => 'fe_users',
            'expectedExceptionCode' => 1788609450,
        ];
        yield 'missing file storage folder' => [
            'source' => $person,
            'config' => [
                'source' => ['repository' => 'personRepository', 'fetch' => 'fetchById(123)'],
                'storagePage' => 123,
                'mapping' => [
                    [
                        'entityClassName' => Person::class,
                        'tableName' =>  'fe_users',
                        'fields' => [
                            'image' => [
                                'sourceExpression' => 'person.getPictures(1).first()',
                            ],
                        ],
                    ],
                ],
            ],
            'tableName' => 'fe_users',
            'expectedExceptionCode' => 1788965433,
        ];
        yield 'file mapped to non-relation field' => [
            'source' => $person,
            'config' => [
                'source' => ['repository' => 'personRepository', 'fetch' => 'fetchById(123)'],
                'storagePage' => 123,
                'mapping' => [
                    [
                        'entityClassName' => Person::class,
                        'tableName' =>  'fe_users',
                        'fields' => [
                            'first_name' => [
                                'sourceExpression' => 'person.getPictures(1).first()',
                            ],
                        ],
                    ],
                ],
            ],
            'tableName' => 'fe_users',
            'expectedExceptionCode' => 1788965249,
        ];
        yield 'file mapped to non-file field' => [
            'source' => $person,
            'config' => [
                'source' => ['repository' => 'personRepository', 'fetch' => 'fetchById(123)'],
                'storagePage' => 123,
                'mapping' => [
                    [
                        'entityClassName' => Person::class,
                        'tableName' =>  'fe_users',
                        'fields' => [
                            'usergroup' => [
                                'sourceExpression' => 'person.getPictures(1).first()',
                            ],
                        ],
                    ],
                ],
            ],
            'tableName' => 'fe_users',
            'expectedExceptionCode' => 1788965249,
        ];
    }

    /**
     * @param mixed[] $config
     */
    #[Test]
    #[DataProvider('createThrowsExceptionDataProvider')]
    public function createThrowsException(EntityInterface $source, array $config, string $tableName, int $expectedExceptionCode): void
    {
        $this->expectException(SyncException::class);
        $this->expectExceptionCode($expectedExceptionCode);
        $syncConfig = SyncConfiguration::fromConfig($config);
        $mappingConfig = $syncConfig->getMappingForClassNameAndTableName(get_class($source), $tableName);
        $subject = new SyncRecordFactory(
            $this->createStub(SyncRecordStatusCheckerInterface::class),
            $this->get(TcaSchemaFactory::class),
            $this->get(MappingUtility::class),
            $this->get(FieldMapper::class),
        );
        $this->assertInstanceOf(MappingConfiguration::class, $mappingConfig);
        $subject->createRecord($source, $syncConfig, $mappingConfig);
    }
}
