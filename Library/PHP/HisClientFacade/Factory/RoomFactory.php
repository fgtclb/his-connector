<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Factory;

use FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112;
use FGTCLB\HisClientFacade\Enum\AddressType;
use FGTCLB\HisClientFacade\Exception\RoomEntityException;
use FGTCLB\HisClientFacade\Model\Building;
use FGTCLB\HisClientFacade\Model\Room;
use FGTCLB\HisClientFacade\Repository\AddressRepository;

readonly class RoomFactory
{
    public function __construct(private AddressRepository $addressRepository) {}

    public function create(RoomLarge202112 $room, string $language): Room
    {
        if ($room->getId() === null) {
            throw new RoomEntityException(sprintf(
                'Post address of type "%s" does not have an id: %s',
                get_class($room),
                $room->getDefaulttext(),
            ), 1786794673);
        }
        if ($room->getBuildingId() !== null) {
            $buildingAddresses = $this->addressRepository->findByIdAndTypeForLanguage($room->getBuildingId(), AddressType::BUILDING, $language);
            $building = new Building(
                id: $room->getBuildingId(),
                building: $room->getBuildingDefaulttext() ?? '',
                campus: $room->getCampusDefaulttext() ?? '',
                postAddress: $buildingAddresses[0] ?? null,
            );
        }
        return new Room(
            id: $room->getId(),
            defaultText: $room->getDefaulttext(),
            shortText: $room->getShorttext() ?? '',
            longText: $room->getLongtext() ?? '',
            uniquename: $room->getUniquename() ?? '',
            building: $building ?? null,
        );
    }
}
