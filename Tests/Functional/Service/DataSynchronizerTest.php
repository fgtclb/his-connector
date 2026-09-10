<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Functional\Service;

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
use FGTCLB\HisConnector\Configuration\SyncConfiguration;
use FGTCLB\HisConnector\Exception\SyncException;
use FGTCLB\HisConnector\Service\DataSynchronizer;
use FGTCLB\HisConnector\Tests\Functional\AbstractHisConnectorTestCase;
use FGTCLB\HisConnector\Tests\Functional\Service\Fixtures\EntityWithNonStringableProperty;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\CMS\Core\Configuration\Loader\YamlFileLoader;

final class DataSynchronizerTest extends AbstractHisConnectorTestCase
{
    protected array $testExtensionsToLoad = [
        'fgtclb/his-connector',
        'typo3conf/ext/his_connector/Tests/Functional/Service/Fixtures/Extensions/test_synchronizer',
    ];

    protected array $additionalFoldersToCreate = [
        'fileadmin/user_upload/his_connector/',
    ];

    /**
     * @return array{baseDataSet: string, syncEntity: EntityInterface, syncConfig: string, expectedDataSet: string, expectedFiles: array<string, string>}[]
     */
    public static function processEntityDataProvider(): iterable
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
            validFrom: new \DateTimeImmutable('2026-01-01 10:00:00'),
            validTo: null,
        );
        $personPicture1 = new PersonPicture(
            id: 678,
            fileContents: base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAgAAAAIAQMAAAD+wSzIAAAABlBMVEX///+/v7+jQ3Y5AAAADklEQVQI12P4AIX8EAgALgAD/aNpbtEAAAAASUVORK5CYII'),
            mimeType: 'image/png',
            description: 'image description',
            originalFileName: 'original.png',
        );
        $personPicture2 = new PersonPicture(
            id: 567,
            fileContents: base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAgAAAAIAQMAAAD+wSzIAAAABlBMVEX///+/v7+jQ3Y5AAAADklEQVQI12P4AIX8EAgALgAD/aNpbtEAAAAASUVORK5CYII'),
            mimeType: 'image/png',
            description: 'image description 2',
            originalFileName: 'original2.png',
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
            fetchPicturesClosure: fn(int $hisKey) => PersonPictureCollection::fromArray([$personPicture1, $personPicture2]),
            fetchFunctionsClosure: fn() => PersonFunctionCollection::fromArray([$personFunction]),
            fetchAccountsClosure: fn() => AccountCollection::fromArray([]),
            fetchAttributesClosure: fn() => PersonAttributeCollection::fromArray([]),
        );

        yield 'person import' => [
            'baseDataSet' => __DIR__ . '/Fixtures/person_import_base.csv',
            'syncEntity' => $person,
            'syncConfig' => 'EXT:test_synchronizer/Configuration/HisConnector/person_import.yaml',
            'expectedDataSet' => __DIR__ . '/Fixtures/person_import_expected.csv',
            'expectedFiles' => [
                self::getInstancePath() . '/fileadmin/user_upload/his_connector/personPicture-678.png' => $personPicture1->getFileContents(),
                self::getInstancePath() . '/fileadmin/user_upload/his_connector/personPicture-567.png' => $personPicture2->getFileContents(),
            ],
        ];
        yield 'skipped import' => [
            'baseDataSet' => __DIR__ . '/Fixtures/skipped_import_base.csv',
            'syncEntity' => $person,
            'syncConfig' => 'EXT:test_synchronizer/Configuration/HisConnector/skipped_import.yaml',
            'expectedDataSet' => __DIR__ . '/Fixtures/skipped_import_expected.csv',
            'expectedFiles' => [],
        ];
        yield 'person sync' => [
            'baseDataSet' => __DIR__ . '/Fixtures/person_sync_base.csv',
            'syncEntity' => $person,
            'syncConfig' => 'EXT:test_synchronizer/Configuration/HisConnector/person_sync.yaml',
            'expectedDataSet' => __DIR__ . '/Fixtures/person_sync_expected.csv',
            'expectedFiles' => [
                self::getInstancePath() . '/fileadmin/user_upload/his_connector/personPicture-678.png' => $personPicture1->getFileContents(),
            ],
        ];
    }

    /**
     * @param array<string, string> $expectedFiles
     */
    #[Test]
    #[DataProvider('processEntityDataProvider')]
    public function processEntity(string $baseDataSet, EntityInterface $syncEntity, string $syncConfig, string $expectedDataSet, array $expectedFiles): void
    {
        /** @var YamlFileLoader */
        $yamlFileLoader = $this->get(YamlFileLoader::class);
        $this->importCSVDataSet($baseDataSet);
        $this->setUpBackendUser(1);
        /** @var DataSynchronizer */
        $subject = $this->get(DataSynchronizer::class);
        $subject->processEntity($syncEntity, SyncConfiguration::fromConfig($yamlFileLoader->load($syncConfig)));
        $this->assertCSVDataSet($expectedDataSet);
        foreach ($expectedFiles as $fileName => $fileContent) {
            $this->assertFileExists($fileName);
            $this->assertSame($fileContent, file_get_contents($fileName));
        }
    }

    /**
     * @return array{syncEntity: EntityInterface, syncConfig: string, expectedExceptionCode: int}[]
     */
    public static function processEntityThrowsExceptionDataProvider(): iterable
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
            fileContents: base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAgAAAAIAQMAAAD+wSzIAAAABlBMVEX///+/v7+jQ3Y5AAAADklEQVQI12P4AIX8EAgALgAD/aNpbtEAAAAASUVORK5CYII'),
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

        yield 'invalid entity' => [
            'syncEntity' => $person,
            'syncConfig' => 'EXT:test_synchronizer/Configuration/HisConnector/invalid_entity.yaml',
            'expectedExceptionCode' => 1786908182,
        ];
        yield 'invalid storage folder' => [
            'syncEntity' => $person,
            'syncConfig' => 'EXT:test_synchronizer/Configuration/HisConnector/invalid_storage_folder.yaml',
            'expectedExceptionCode' => 1788963087,
        ];
        yield 'non-stringable value' => [
            'syncEntity' => new EntityWithNonStringableProperty(),
            'syncConfig' => 'EXT:test_synchronizer/Configuration/HisConnector/non_stringable_value.yaml',
            'expectedExceptionCode' => 1788612202,
        ];
    }

    #[Test]
    #[DataProvider('processEntityThrowsExceptionDataProvider')]
    public function processEntityThrowsException(EntityInterface $syncEntity, string $syncConfig, int $expectedExceptionCode): void
    {
        $this->expectException(SyncException::class);
        $this->expectExceptionCode($expectedExceptionCode);

        /** @var YamlFileLoader */
        $yamlFileLoader = $this->get(YamlFileLoader::class);
        $this->importCSVDataSet(__DIR__ . '/Fixtures/invalid_base.csv');
        /** @var DataSynchronizer */
        $subject = $this->get(DataSynchronizer::class);
        $subject->processEntity($syncEntity, SyncConfiguration::fromConfig($yamlFileLoader->load($syncConfig)));
        $this->assertCSVDataSet(__DIR__ . '/Fixtures/invalid_expected.csv');
    }
}
