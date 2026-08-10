<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Service;

use FGTCLB\HisClientFacade\Model\EntityInterface;
use FGTCLB\HisConnector\Configuration\SyncConfiguration;
use FGTCLB\HisConnector\Exception\SyncException;
use FGTCLB\HisConnector\Sync\SyncRecord;
use FGTCLB\HisConnector\Sync\SyncRecordFactory;
use FGTCLB\HisConnector\Sync\SyncRelatedRecords;
use TYPO3\CMS\Core\DataHandling\DataHandler;
use TYPO3\CMS\Core\Utility\GeneralUtility;

final readonly class DataSynchronizer
{
    public function __construct(private SyncRecordFactory $syncRecordFactory) {}

    /**
     * @return SyncRecord[]
     */
    public function processEntity(EntityInterface $syncEntity, SyncConfiguration $config, int $storagePage): array
    {
        if ($config->storagePage === null) {
            $config = $config->withStoragePage($storagePage);
        }
        $mappingConfigs = $config->getMappingsForClassName(get_class($syncEntity));
        if (count($mappingConfigs) === 0) {
            throw new SyncException(sprintf(
                'No mapping configuration found for "%s"',
                get_class($syncEntity),
            ), 1786908182);
        }
        $syncedRecords = [];
        foreach ($mappingConfigs as $mappingConfig) {
            $syncRecord = $this->syncRecordFactory->create($syncEntity, $config, $mappingConfig);
            if ($syncRecord === null) {
                continue;
            }
            $data = $this->serializeForDataHandler($syncRecord);

            $dataHandler = GeneralUtility::makeInstance(DataHandler::class);
            $dataHandler->start($data, []);
            $dataHandler->process_datamap();
            if ($dataHandler->errorLog !== []) {
                throw new SyncException(sprintf(
                    'Unable to sync record "%s:%s" from HIS to "%s": %s',
                    get_class($syncEntity),
                    $syncEntity->getIdentifier(),
                    $mappingConfig->tableName,
                    implode('; ', $dataHandler->errorLog),
                ), 1786380024);
            }
            if (is_string($syncRecord->insertUpdateId)) {
                $syncRecord = $syncRecord->withInsertUpdateId($dataHandler->substNEWwithIDs[$syncRecord->insertUpdateId]);
            }
            $syncedRecords[] = $syncRecord;
        }
        return $syncedRecords;
    }

    /**
     * @return array<string, array<string|int, array<string, scalar>>>
     */
    private function serializeForDataHandler(SyncRecord $syncRecord): array
    {
        $data = [];
        $fields = array_merge($syncRecord->getIdentifyingFields(), $syncRecord->getFields());
        foreach ($fields as $field) {
            $fieldValue = $field->value;
            if ($field instanceof SyncRelatedRecords) {
                $relatedIds = [];
                foreach ($fieldValue as $relatedRecord) {
                    $relatedIds[] = $relatedRecord->insertUpdateId;
                    $data = array_replace_recursive($data, $this->serializeForDataHandler($relatedRecord));
                }
                // TODO delete orphaned relations if necessary
                $fieldValue = implode(',', $relatedIds);
            } elseif ($fieldValue instanceof \DateTimeInterface) {
                $fieldValue = $this->convertDateTimeForDataHandler($fieldValue);
            }
            if ($fieldValue === null) {
                continue;
            }
            if (!is_scalar($fieldValue) && !$fieldValue instanceof \Stringable) {
                throw new SyncException(sprintf(
                    'Unable to process sync record "%s:%s" due to non-stringable value in "%s": %s',
                    $syncRecord->tableName,
                    (string)$syncRecord->insertUpdateId,
                    $field->name,
                    is_object($fieldValue) ? get_class($fieldValue) : gettype($fieldValue),
                ), 1788612202);
            }
            $data[$syncRecord->tableName][$syncRecord->insertUpdateId][$field->name] = $fieldValue;
        }
        return $data;
    }

    private function convertDateTimeForDataHandler(\DateTimeInterface $dateTime): string
    {
        // TODO detect if the field can handle more than the usual timestamp range
        $min = new \DateTimeImmutable('@0');
        $max = new \DateTimeImmutable('@2147483647');
        if ($dateTime < $min) {
            $dateTime = $min;
        } elseif ($dateTime > $max) {
            $dateTime = $max;
        }
        return $dateTime->format('c');
    }
}
