<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\Configuration;

use FGTCLB\HisConnector\Sync\SyncFile;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class SyncFileTest extends UnitTestCase
{
    #[Test]
    public function withInsertUpdateId(): void
    {
        $subject = new SyncFile(
            fileStorageFolder: '1:/user_upload/',
            syncIdentifier: 'file-123',
            fileContents: 'blob',
            mimeType: 'image/png',
            originalFileName: 'file.png',
            description: 'description',
            insertUpdateId: null,
        );
        $subject = $subject->withInsertUpdateId(456);
        $this->assertSame('1:/user_upload/', $subject->fileStorageFolder);
        $this->assertSame('file-123', $subject->syncIdentifier);
        $this->assertSame('blob', $subject->fileContents);
        $this->assertSame('image/png', $subject->mimeType);
        $this->assertSame('file.png', $subject->originalFileName);
        $this->assertSame('description', $subject->description);
        $this->assertSame(456, $subject->insertUpdateId);
    }
}
