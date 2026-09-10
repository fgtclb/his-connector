<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\EventListener;

use FGTCLB\HisConnector\Configuration\MappingConfiguration;
use FGTCLB\HisConnector\Event\ProcessSyncRecordEvent;
use FGTCLB\HisConnector\Exception\SyncException;
use FGTCLB\HisConnector\Sync\SyncFile;
use FGTCLB\HisConnector\Sync\SyncRecord;
use FGTCLB\HisConnector\Sync\SyncRelatedFiles;
use FGTCLB\HisConnector\Sync\SyncRelatedRecords;
use TYPO3\CMS\Core\Attribute\AsEventListener;
use TYPO3\CMS\Core\Resource\File;
use TYPO3\CMS\Core\Resource\MimeTypeDetector;
use TYPO3\CMS\Core\Resource\ResourceFactory;

/**
 * Creates or updates FAL file records referenced from a provided SyncRecord.
 * Note that only the files themselves are created here (sys_file and
 * sys_file_metadata), but no file references.
 */
#[AsEventListener(
    identifier: 'his-connector/create-files-from-sync-record',
)]
final readonly class CreateFilesFromSyncRecordEventListener
{
    public function __construct(
        private ResourceFactory $resourceFactory,
        private MimeTypeDetector $mimeTypeDetector,
    ) {}

    public function __invoke(ProcessSyncRecordEvent $event): void
    {
        $event->syncRecord = $this->createOrUpdateFiles($event->syncRecord);
    }

    private function createOrUpdateFiles(SyncRecord $syncRecord): SyncRecord
    {
        $fields = [];
        foreach ($syncRecord->getFields() as $field) {
            if ($field instanceof SyncRelatedRecords) {
                // Check subrecords for possible file references
                $relatedRecords = array_map($this->createOrUpdateFiles(...), $field->getValue());
                $field = new SyncRelatedRecords($field->getName(), $relatedRecords);
            } elseif ($field instanceof SyncRelatedFiles) {
                // Create or update files
                $relatedFiles = array_map(
                    fn(SyncFile $relatedFile) => $relatedFile->withInsertUpdateId($this->createOrUpdateFile($relatedFile)->getUid()),
                    $field->getValue(),
                );
                $field = new SyncRelatedFiles($field->getName(), $relatedFiles);
            }
            $fields[] = $field;
        }
        return $syncRecord->withFields(...$fields);
    }

    private function createOrUpdateFile(SyncFile $syncFile): File
    {
        try {
            $folder = $this->resourceFactory->getFolderObjectFromCombinedIdentifier($syncFile->fileStorageFolder);
        } catch (\Exception $e) {
            throw new SyncException(sprintf(
                'Unable to access folder "%s" while storing file "%s": %s',
                $syncFile->fileStorageFolder,
                $syncFile->syncIdentifier,
                $e->getMessage(),
            ), 1788963087);
        }
        $fileExtension = $this->mimeTypeDetector->getFileExtensionsForMimeType($syncFile->mimeType)[0];
        $fileName = $syncFile->syncIdentifier . '.' . $fileExtension;
        $file = $folder->createFile($fileName);
        $file->updateProperties(['mime_type' => $syncFile->mimeType]);
        $file->setContents($syncFile->fileContents);
        $metaData = [
            MappingConfiguration::DEFAULT_IDENTIFIER_FIELD => $syncFile->syncIdentifier,
        ];
        if ($syncFile->originalFileName !== null) {
            $metaData['download_name'] = $syncFile->originalFileName;
        }
        if ($syncFile->description !== null) {
            $metaData['description'] = $syncFile->description;
        }
        $file->getMetaData()->add($metaData)->save();
        return $file;
    }
}
