<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\Configuration;

use FGTCLB\HisConnector\Sync\SyncField;
use FGTCLB\HisConnector\Sync\SyncRecord;
use FGTCLB\HisConnector\Sync\SyncRelatedRecords;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class SyncRecordTest extends UnitTestCase
{
    #[Test]
    public function fieldGetters(): void
    {
        $identifierField = new SyncField('import_id', 456);
        $relationField = new SyncField('relation_id', 789);
        $fields = [
            new SyncField('foo', 'bar'),
        ];
        $subject = new SyncRecord(
            tableName: 'foo_table',
            storagePage: 123,
            syncIdentifier: $identifierField,
            relation: $relationField,
            insertUpdateId: 234,
            fields: $fields,
        );
        $this->assertSame($fields, $subject->getFields());
        $this->assertEquals(
            [
                new SyncField('pid', 123),
                $identifierField,
                $relationField,
            ],
            $subject->getIdentifyingFields(),
        );
    }

    #[Test]
    public function withInsertUpdateId(): void
    {
        $identifierField = new SyncField('import_id', 456);
        $relationField = new SyncField('relation_id', 789);
        $fields = [
            new SyncField('foo', 'bar'),
        ];
        $subject = new SyncRecord(
            tableName: 'foo_table',
            storagePage: 123,
            syncIdentifier: $identifierField,
            relation: $relationField,
            insertUpdateId: 234,
            fields: $fields,
        );
        $subject = $subject->withInsertUpdateId(432);
        $this->assertSame('foo_table', $subject->tableName);
        $this->assertSame(123, $subject->storagePage);
        $this->assertSame($identifierField, $subject->syncIdentifier);
        $this->assertSame($relationField, $subject->relation);
        $this->assertSame(432, $subject->insertUpdateId);
        $this->assertSame($fields, $subject->getFields());
    }

    #[Test]
    public function withField(): void
    {
        $identifierField = new SyncField('import_id', 456);
        $relationField = new SyncField('relation_id', 789);
        $initialField = new SyncField('initial', 'bar');
        $addedField = new SyncRelatedRecords('added', []);
        $subject = new SyncRecord(
            tableName: 'foo_table',
            storagePage: 123,
            syncIdentifier: $identifierField,
            relation: $relationField,
            insertUpdateId: 234,
            fields: [$initialField],
        );
        $subject = $subject->withField($addedField);
        $this->assertSame('foo_table', $subject->tableName);
        $this->assertSame(123, $subject->storagePage);
        $this->assertSame($identifierField, $subject->syncIdentifier);
        $this->assertSame($relationField, $subject->relation);
        $this->assertSame(234, $subject->insertUpdateId);
        $this->assertSame([$initialField, $addedField], $subject->getFields());
    }
}
