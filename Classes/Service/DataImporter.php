<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Service;

use FGTCLB\HisClientFacade\Model\EntityInterface;
use FGTCLB\HisConnector\Exception\ImportException;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\DataHandling\DataHandler;
use TYPO3\CMS\Core\ExpressionLanguage\Resolver;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\StringUtility;

final readonly class DataImporter
{
    private Resolver $expressionLanguage;

    public function __construct(
        private ConnectionPool $connectionPool,
    ) {
        $this->expressionLanguage = new Resolver('his_connector', []);
    }

    /**
     * @param mixed[] $fieldMapping
     */
    public function importEntity(EntityInterface $source, array $fieldMapping, int $storagePage): void
    {
        // TODO introduce validated DTO for config
        if (!isset($fieldMapping['tableName']) || !isset($fieldMapping['identifierField'])) {
            throw new ImportException('Import configuration needs to at least provide "tableName" and "identifierField"', 1786380026);
        }
        $targetTable = $fieldMapping['tableName'];
        $data = [];
        $insertUpdateUid = $this->checkForExistingRecord(
            $targetTable,
            $fieldMapping['identifierField'],
            $storagePage,
            $source->getIdentifier(),
        );
        $insertUpdateUid ??= StringUtility::getUniqueId('NEW');
        $data[$targetTable][$insertUpdateUid][$fieldMapping['identifierField']] = $source->getIdentifier();
        $data[$targetTable][$insertUpdateUid]['pid'] = $storagePage;
        foreach ($fieldMapping['fields'] as $targetField => $config) {
            $sourceValue = $this->expressionLanguage->evaluate(
                $config['sourceField'],
                ['person' => $source],
            );
            $sourceValue = $this->performValueMapping(
                $sourceValue,
                $config['valueMapping'] ?? [],
                $config['defaultValue'] ?? null,
            );
            if ($sourceValue !== null) {
                $data[$targetTable][$insertUpdateUid][$targetField] = $sourceValue;
            }
        }

        $dataHandler = GeneralUtility::makeInstance(DataHandler::class);
        $dataHandler->start($data, []);
        $dataHandler->process_datamap();
        if ($dataHandler->errorLog !== []) {
            throw new ImportException(sprintf(
                'Unable to import record "%s:%s" from HIS to "%s": %s',
                get_class($source),
                $source->getIdentifier(),
                $fieldMapping['tableName'],
                implode('; ', $dataHandler->errorLog),
            ), 1786380024);
        }
    }

    /**
     * @param array{source: mixed, target: mixed}[] $valueMapping
     */
    private function performValueMapping(mixed $sourceValue, array $valueMapping, mixed $defaultValue): mixed
    {
        $valueMapping = array_find($valueMapping, fn($item) => $item['source'] === $sourceValue);
        return $valueMapping['target'] ?? $sourceValue ?? $defaultValue;
    }

    private function checkForExistingRecord(string $tableName, string $identifierField, int $storagePage, string $sourceIdentifier): ?int
    {
        // TODO check schema for column names (uid, pid)
        $queryBuilder = $this->connectionPool->getQueryBuilderForTable($tableName);
        $existingRecord = $queryBuilder
            ->select('uid')
            ->from($tableName)
            ->where($queryBuilder->expr()->eq($identifierField, $sourceIdentifier))
            ->andWhere($queryBuilder->expr()->eq('pid', $storagePage))
            ->setMaxResults(1)
            ->executeQuery()
            ->fetchAssociative();
        return $existingRecord['uid'] ?? null;
    }
}
