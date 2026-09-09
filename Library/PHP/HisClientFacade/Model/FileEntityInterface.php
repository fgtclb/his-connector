<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

interface FileEntityInterface
{
    public function getFileContents(): string;
    public function getMimeType(): string;
    public function getOriginalFileName(): ?string;
    public function getDescription(): ?string;
}
