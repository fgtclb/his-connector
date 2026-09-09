<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\HisClientFacade\Factory;

use FGTCLB\HisClient\MimedataService\Struct\Mimedata;
use FGTCLB\HisClientFacade\Exception\PersonPictureEntityException;
use FGTCLB\HisClientFacade\Factory\PersonPictureFactory;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class PersonPictureFactoryTest extends UnitTestCase
{
    /**
     * @return mixed[]
     */
    public static function createPictureDataProvider(): array
    {
        return [
            'all fields filled' => [
                'id' => 123,
                'fileContents' => 'blob',
                'mimeType' => 'image/png',
                'originalFileName' => 'original.png',
                'description' => 'description text',
                'expectedIdentifier' => 'personPicture-123',
            ],
            'minimal filled' => [
                'id' => 123,
                'fileContents' => 'blob',
                'mimeType' => 'image/png',
                'originalFileName' => null,
                'description' => null,
                'expectedIdentifier' => 'personPicture-123',
            ],
        ];
    }

    #[Test]
    #[DataProvider('createPictureDataProvider')]
    public function createPicture(
        int $id,
        string $fileContents,
        string $mimeType,
        ?string $originalFileName,
        ?string $description,
        string $expectedIdentifier,
    ): void {
        $subject = new PersonPictureFactory();
        $result = $subject->create(
            new Mimedata(
                $fileContents,
                $id,
                null,
                $description,
                null,
                null,
                $mimeType,
                null,
                null,
                $originalFileName,
            )
        );
        $this->assertSame($id, $result->id);
        $this->assertSame($fileContents, $result->fileContents);
        $this->assertSame($mimeType, $result->mimeType);
        $this->assertEquals($originalFileName, $result->originalFileName);
        $this->assertEquals($description, $result->description);
        $this->assertSame($expectedIdentifier, $result->getIdentifier());
        $this->assertSame($fileContents, $result->getFileContents());
        $this->assertSame($mimeType, $result->getMimeType());
        $this->assertSame($originalFileName, $result->getOriginalFileName());
        $this->assertSame($description, $result->getDescription());
    }

    #[Test]
    public function createPictureThrowsExceptionForMissingId(): void
    {
        $this->expectException(PersonPictureEntityException::class);
        $subject = new PersonPictureFactory();
        $subject->create(new Mimedata('blob', mimeType: 'image/png'));
    }

    #[Test]
    public function createPictureThrowsExceptionForMissingMimeType(): void
    {
        $this->expectException(PersonPictureEntityException::class);
        $subject = new PersonPictureFactory();
        $subject->create(new Mimedata('blob', id: 123));
    }
}
