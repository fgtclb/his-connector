<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\HisClientFacade\Factory;

use FGTCLB\HisClientFacade\Enum\AddressType;
use FGTCLB\HisClientFacade\Exception\RoomEntityException;
use FGTCLB\HisClientFacade\Factory\RoomFactory;
use FGTCLB\HisClientFacade\Model\Building;
use FGTCLB\HisClientFacade\Model\PostAddress;
use FGTCLB\HisClientFacade\Repository\AddressRepository;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class RoomFactoryTest extends UnitTestCase
{
    /**
     * @return array<string, mixed[]>
     */
    public static function createRoomDataProvider(): array
    {
        return [
            'all fields filled' => [
                'id' => 789,
                'buildingId' => 123,
                'defaultText' => 'default',
                'shortText' => 'short',
                'longText' => 'long',
                'uniquename' => 'unique',
                'expectedIdentifier' => '789',
                'expectedShortText' => 'short',
                'expectedLongText' => 'long',
                'expectedUniquename' => 'unique',
                'expectedBuildingClass' => Building::class,
                'expectedPostAddressClass' => PostAddress::class,
            ],
            'building without address' => [
                'id' => 789,
                'buildingId' => 456,
                'defaultText' => 'default',
                'shortText' => 'short',
                'longText' => 'long',
                'uniquename' => 'unique',
                'expectedIdentifier' => '789',
                'expectedShortText' => 'short',
                'expectedLongText' => 'long',
                'expectedUniquename' => 'unique',
                'expectedBuildingClass' => Building::class,
                'expectedPostAddressClass' => null,
            ],
            'minimal fields filled' => [
                'id' => 789,
                'buildingId' => null,
                'defaultText' => 'default',
                'shortText' => null,
                'longText' => null,
                'uniquename' => null,
                'expectedIdentifier' => '789',
                'expectedShortText' => '',
                'expectedLongText' => '',
                'expectedUniquename' => '',
                'expectedBuildingClass' => null,
                'expectedPostAddressClass' => null,
            ],
        ];
    }

    /**
     * @param class-string|null $expectedBuildingClass
     * @param class-string|null $expectedPostAddressClass
     */
    #[Test]
    #[DataProvider('createRoomDataProvider')]
    public function createRoom(
        int $id,
        ?int $buildingId,
        string $defaultText,
        ?string $shortText,
        ?string $longText,
        ?string $uniquename,
        string $expectedIdentifier,
        string $expectedShortText,
        string $expectedLongText,
        string $expectedUniquename,
        ?string $expectedBuildingClass,
        ?string $expectedPostAddressClass,
    ): void {
        $mockAddressRepository = self::createMock(AddressRepository::class);
        $mockAddressRepository->method('findByIdAndTypeForLanguage')->willReturnCallback(
            fn(int $buildingId, AddressType $type, string $language) => match ($buildingId) {
                123 => [new PostAddress(123, '12345', 'street', 'city', null, null, null, null, null, null, null, null)],
                default => [],
            }
        );

        $subject = new RoomFactory($mockAddressRepository);
        $input = (new \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112());
        $input->setId($id);
        $input->setBuildingId($buildingId);
        $input->setDefaulttext($defaultText);
        $input->setShorttext($shortText);
        $input->setLongtext($longText);
        $input->setUniquename($uniquename);
        $room = $subject->create($input, 'de');
        $this->assertSame($expectedIdentifier, $room->getIdentifier());
        $this->assertSame($id, $room->id);
        $this->assertSame($defaultText, $room->defaultText);
        $this->assertSame($expectedShortText, $room->shortText);
        $this->assertSame($expectedLongText, $room->longText);
        $this->assertSame($expectedUniquename, $room->uniquename);
        if ($expectedBuildingClass === null) {
            $this->assertNull($room->building);
        } else {
            $this->assertInstanceOf($expectedBuildingClass, $room->building);
        }
        if ($expectedPostAddressClass === null) {
            $this->assertNull($room->building?->postAddress);
        } else {
            $this->assertInstanceOf($expectedPostAddressClass, $room->building?->postAddress);
        }
    }

    #[Test]
    public function createRoomValidatesId(): void
    {
        self::expectException(RoomEntityException::class);
        $subject = new RoomFactory($this->createStub(AddressRepository::class));
        $input = (new \FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112());
        // Needs to be set because of internal behavior of generated client code
        $input->setDefaulttext('default');
        $subject->create($input, 'de');
    }
}
