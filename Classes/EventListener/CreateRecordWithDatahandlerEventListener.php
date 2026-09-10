<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\EventListener;

use FGTCLB\HisConnector\Event\ProcessSyncRecordEvent;
use FGTCLB\HisConnector\Exception\SyncException;
use FGTCLB\HisConnector\Sync\SyncRecord;
use FGTCLB\HisConnector\Sync\SyncRelatedFiles;
use FGTCLB\HisConnector\Sync\SyncRelatedRecords;
use TYPO3\CMS\Core\Attribute\AsEventListener;
use TYPO3\CMS\Core\DataHandling\DataHandler;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\StringUtility;

/**
 * Inserts or updates a provided SyncRecord and all of its subrecords in
 * the TYPO3 database by using a DataHandler dataMap.
 */
#[AsEventListener(
    identifier: 'his-connector/create-record-with-datahandler',
    after: 'his-connector/create-files-from-sync-record',
)]
final readonly class CreateRecordWithDatahandlerEventListener
{
    public function __invoke(ProcessSyncRecordEvent $event): void
    {
        $data = $this->serializeForDataHandler($event->syncRecord);
        $dataHandler = GeneralUtility::makeInstance(DataHandler::class);
        $dataHandler->start($data, []);
        $dataHandler->process_datamap();
        if ($dataHandler->errorLog !== []) {
            throw new SyncException(sprintf(
                'Unable to sync record "%s:%s" from HIS to "%s": %s',
                get_class($event->originalEntity),
                $event->syncRecord->syncIdentifier->getValue(),
                $event->syncRecord->tableName,
                implode('; ', $dataHandler->errorLog),
            ), 1786380024);
        }
        if (is_string($event->syncRecord->insertUpdateId)) {
            $event->syncRecord = $event->syncRecord->withInsertUpdateId(
                $dataHandler->substNEWwithIDs[$event->syncRecord->insertUpdateId]
            );
        }
    }

    /**
     * Converts a sync record and its subrecords into a dataMap to be processed
     * by DataHandler. Referenced files are expected to exist. This is usually
     * performed by the CreateFilesFromSyncRecordEventListener, which runs before
     * this event listener.
     *
     * @return array<string, array<string|int, array<string, scalar>>>
     */
    private function serializeForDataHandler(SyncRecord $syncRecord): array
    {
        $data = [];
        $fields = array_merge($syncRecord->getIdentifyingFields(), $syncRecord->getFields());
        foreach ($fields as $field) {
            $fieldValue = $field->getValue();
            if ($field instanceof SyncRelatedRecords) {
                $relatedIds = [];
                foreach ($fieldValue as $relatedRecord) {
                    $relatedIds[] = $relatedRecord->insertUpdateId;
                    $data = array_replace_recursive($data, $this->serializeForDataHandler($relatedRecord));
                }
                // TODO delete orphaned relations if necessary
                $fieldValue = implode(',', $relatedIds);
            } elseif ($field instanceof SyncRelatedFiles) {
                $fileReferenceIds = [];
                foreach ($fieldValue as $relatedFile) {
                    if ($relatedFile->insertUpdateId === null) {
                        // silently skip files without uid. These should have already
                        // been created by CreateFilesFromSyncRecordEventListener.
                        continue;
                    }
                    $fileReferenceId = StringUtility::getUniqueId('NEW');
                    $data['sys_file_reference'][$fileReferenceId] = [
                        'uid_local' => $relatedFile->insertUpdateId,
                        'tablenames' => $syncRecord->tableName,
                        'uid_foreign' => $syncRecord->insertUpdateId,
                        'fieldname' => $field->getName(),
                        'pid' => $syncRecord->storagePage,
                    ];
                    $fileReferenceIds[] = $fileReferenceId;
                }
                // TODO delete orphaned files if necessary
                $fieldValue = implode(',', $fileReferenceIds);
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
                    $field->getName(),
                    is_object($fieldValue) ? get_class($fieldValue) : gettype($fieldValue),
                ), 1788612202);
            }
            $data[$syncRecord->tableName][$syncRecord->insertUpdateId][$field->getName()] = $fieldValue;
        }
        return $data;
    }

    /**
     * Makes sure that a provided date is within the possible range of UNIX timestamps
     * and converts to a format that is processable by DataHandler.
     *
     * @param \DateTimeInterface $dateTime
     * @return string
     */
    private function convertDateTimeForDataHandler(\DateTimeInterface $dateTime): string
    {
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
