<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Sync;

use FGTCLB\HisConnector\Configuration\MappingConfiguration;
use Symfony\Component\DependencyInjection\Attribute\AsAlias;
use TYPO3\CMS\Core\Database\ConnectionPool;

#[AsAlias(SyncRecordStatusCheckerInterface::class)]
final readonly class SyncRecordStatusChecker implements SyncRecordStatusCheckerInterface
{
    public function __construct(private ConnectionPool $connectionPool) {}

    public function recordShouldBeSkipped(SyncRecord $syncRecord, MappingConfiguration $mappingConfig): bool
    {
        if (!$mappingConfig->skipField) {
            return false;
        }
        $queryBuilder = $this->connectionPool->getQueryBuilderForTable($syncRecord->tableName);
        $constraints = [];
        foreach ($syncRecord->getIdentifyingFields() as $field) {
            $constraints[] = $queryBuilder->expr()->eq($field->name, $queryBuilder->createNamedParameter($field->value));
        }
        $existingRecord = $queryBuilder
            ->select($mappingConfig->skipField)
            ->from($syncRecord->tableName)
            ->where(...$constraints)
            ->setMaxResults(1)
            ->executeQuery()
            ->fetchAssociative();
        return (bool)($existingRecord[$mappingConfig->skipField] ?? false);
    }

    public function determineInsertUpdateIdFromDatabase(SyncRecord $syncRecord): ?int
    {
        $queryBuilder = $this->connectionPool->getQueryBuilderForTable($syncRecord->tableName);
        $constraints = [];
        foreach ($syncRecord->getIdentifyingFields() as $field) {
            $constraints[] = $queryBuilder->expr()->eq($field->name, $queryBuilder->createNamedParameter($field->value));
        }
        $existingRecord = $queryBuilder
            ->select('uid')
            ->from($syncRecord->tableName)
            ->where(...$constraints)
            ->setMaxResults(1)
            ->executeQuery()
            ->fetchAssociative();
        return $existingRecord['uid'] ?? null;
    }
}
