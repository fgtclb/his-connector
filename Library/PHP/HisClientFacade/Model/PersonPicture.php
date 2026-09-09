<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class PersonPicture implements EntityInterface, FileEntityInterface
{
    public function __construct(
        public int $id,
        public string $fileContents,
        public string $mimeType,
        public ?string $description,
        public ?string $originalFileName,
    ) {}

    public function getIdentifier(): string
    {
        return sprintf('personPicture-%d', $this->id);
    }

    public function getFileContents(): string
    {
        return $this->fileContents;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function getOriginalFileName(): ?string
    {
        return $this->originalFileName;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}
