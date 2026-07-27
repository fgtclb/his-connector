<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Factory;

use FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation60;
use FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationPostaddressDto;
use FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationRoomDto;
use FGTCLB\HisClientFacade\Enum\AddressType;
use FGTCLB\HisClientFacade\Model\EmailAddress;
use FGTCLB\HisClientFacade\Model\Hyperlink;
use FGTCLB\HisClientFacade\Model\Messenger;
use FGTCLB\HisClientFacade\Model\PersonFunction;
use FGTCLB\HisClientFacade\Model\PhoneNumber;
use FGTCLB\HisClientFacade\Repository\AddressRepository;
use FGTCLB\HisClientFacade\Repository\OrgUnitRepository;
use FGTCLB\HisClientFacade\Repository\RoomRepository;
use FGTCLB\HisClientFacade\Utility\KeyvalueConverter;

readonly class PersonFunctionFactory
{
    public function __construct(
        private OrgUnitRepository $orgUnitRepository,
        private RoomRepository $roomRepository,
        private AddressRepository $addressRepository,
        private PostAddressFactory $postAddressFactory,
        private KeyvalueConverter $keyvalueConverter,
    ) {}

    public function create(Affiliation60 $affiliation, string $language): PersonFunction
    {
        $room = $postAddress = null;
        if ($affiliation->getLocation() instanceof AffiliationLocationRoomDto) {
            $room = $this->roomRepository->findById($affiliation->getLocation()->getRoomId());
            if ($room !== null) {
                $addresses = $room->getBuildingId() !== null
                    ? $this->addressRepository->findByIdAndType($room->getBuildingId(), AddressType::BUILDING)
                    : [];
                if (isset($addresses[0])) {
                    $postAddress = $this->postAddressFactory->createFromPostAddressWithNillablePostcode($addresses[0], $language);
                } elseif ($room->getBuildingDefaulttext() !== null) {
                    $postAddress = $this->postAddressFactory->createFromStreetAndCity($room->getBuildingDefaulttext(), $room->getDefaulttext());
                }
            }
        } elseif ($affiliation->getLocation() instanceof AffiliationLocationPostaddressDto) {
            $postAddress = $this->postAddressFactory->createFromPersonOrgunitPostAddress($affiliation->getLocation()->getPostAddress(), $language);
        }
        $emailAddresses = $hyperlinks = $phoneNumbers = $messengers = [];
        foreach ($affiliation->getEaddresses()->getEaddress() ?? [] as $eAddress) {
            $type = $this->keyvalueConverter->convertEAddressIdToUniquename($eAddress->getEaddresstypeId(), $language);
            $domain = $this->keyvalueConverter->convertAddresstagIdToUniquename($eAddress->getAddresstagId(), $language);
            if ($eAddress instanceof \FGTCLB\HisClient\PersonOrgunitService\Struct\Phone) {
                $phoneNumbers[] = new PhoneNumber($eAddress->getEaddress(), $type, $domain);
            } elseif ($eAddress instanceof \FGTCLB\HisClient\PersonOrgunitService\Struct\Messenger) {
                $messengers[] = new Messenger($eAddress->getEaddress(), $type, $domain);
            } elseif ($eAddress instanceof \FGTCLB\HisClient\PersonOrgunitService\Struct\Hyperlink) {
                $hyperlinks[] = new Hyperlink($eAddress->getEaddress(), $type, $domain);
            } elseif ($eAddress instanceof \FGTCLB\HisClient\PersonOrgunitService\Struct\EMail) {
                $emailAddresses[] = new EmailAddress(
                    $eAddress->getEaddress(),
                    false, // TODO check if verified information is available elsewhere
                    $domain,
                );
            }
        }
        return new PersonFunction(
            id: $affiliation->getId(),
            orgUnit: $this->orgUnitRepository->findByLonglivingId($affiliation->getOrgunitLid()),
            room: $room,
            postAddress: $postAddress,
            emailAddresses: $emailAddresses,
            hyperlinks: $hyperlinks,
            phoneNumbers: $phoneNumbers,
            messengers: $messengers,
        );
    }
}
