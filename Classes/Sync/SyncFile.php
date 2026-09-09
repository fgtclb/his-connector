<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Sync;

final readonly class SyncFile
{
    public function __construct(
        public string $fileStorageFolder,
        public string $syncIdentifier,
        public string $fileContents,
        public string $mimeType,
        public ?string $originalFileName,
        public ?string $description,
        public ?int $insertUpdateId = null,
    ) {}

    public function withInsertUpdateId(int $insertUpdateId): self
    {
        return new self(
            fileStorageFolder: $this->fileStorageFolder,
            syncIdentifier: $this->syncIdentifier,
            fileContents: $this->fileContents,
            mimeType: $this->mimeType,
            originalFileName: $this->originalFileName,
            description: $this->description,
            insertUpdateId: $insertUpdateId,
        );
    }
}
