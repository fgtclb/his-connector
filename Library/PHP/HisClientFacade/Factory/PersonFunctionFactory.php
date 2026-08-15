<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Factory;

use FGTCLB\HisClient\PersonOrgunitService\Struct\Affiliation60;
use FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationPostaddressDto;
use FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationRoomDto;
use FGTCLB\HisClientFacade\Collection\EmailAddressCollection;
use FGTCLB\HisClientFacade\Collection\HyperlinkCollection;
use FGTCLB\HisClientFacade\Collection\MessengerCollection;
use FGTCLB\HisClientFacade\Collection\PhoneNumberCollection;
use FGTCLB\HisClientFacade\Enum\AddressType;
use FGTCLB\HisClientFacade\Model\EmailAddress;
use FGTCLB\HisClientFacade\Model\Hyperlink;
use FGTCLB\HisClientFacade\Model\Messenger;
use FGTCLB\HisClientFacade\Model\PersonFunction;
use FGTCLB\HisClientFacade\Model\PhoneNumber;
use FGTCLB\HisClientFacade\Repository\AddressRepository;
use FGTCLB\HisClientFacade\Repository\FunctionTypeRepository;
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
        private FunctionTypeRepository $functionTypeRepository,
    ) {}

    public function create(Affiliation60 $affiliation, string $language): PersonFunction
    {
        $room = $postAddress = null;
        if ($affiliation->getLocation() instanceof AffiliationLocationRoomDto) {
            $room = $this->roomRepository->findById($affiliation->getLocation()->getRoomId());
            if ($room !== null) {
                $buildingAddresses = $room->getBuildingId() !== null
                    ? $this->addressRepository->findByIdAndTypeForLanguage($room->getBuildingId(), AddressType::BUILDING, $language)
                    : [];
                if (isset($buildingAddresses[0])) {
                    $postAddress = $buildingAddresses[0];
                }
            }
        } elseif ($affiliation->getLocation() instanceof AffiliationLocationPostaddressDto) {
            $postAddress = $this->postAddressFactory->createFromPersonOrgunitPostAddress($affiliation->getLocation()->getPostAddress(), $language);
        }
        $emailAddresses = $hyperlinks = $phoneNumbers = $messengers = [];
        foreach ($affiliation->getEaddresses()->getEaddress() ?? [] as $eAddress) {
            // Skip addresses without IDs as those cannot be imported properly
            // In testing, this case never occurred, so it might just be a wrong declaration
            // in the SOAP endpoint
            if ($eAddress->getId() === null) {
                continue;
            }
            $type = $this->keyvalueConverter->convertEAddressIdToUniquename($eAddress->getEaddresstypeId(), $language);
            $domain = $this->keyvalueConverter->convertAddresstagIdToUniquename($eAddress->getAddresstagId(), $language);
            if ($eAddress instanceof \FGTCLB\HisClient\PersonOrgunitService\Struct\Phone) {
                $phoneNumbers[] = new PhoneNumber(
                    id: $eAddress->getId(),
                    phoneNumber: $eAddress->getEaddress(),
                    type: $type,
                    domain: $domain,
                );
            } elseif ($eAddress instanceof \FGTCLB\HisClient\PersonOrgunitService\Struct\Messenger) {
                $messengers[] = new Messenger(
                    id: $eAddress->getId(),
                    account: $eAddress->getEaddress(),
                    type: $type,
                    domain: $domain,
                );
            } elseif ($eAddress instanceof \FGTCLB\HisClient\PersonOrgunitService\Struct\Hyperlink) {
                $hyperlinks[] = new Hyperlink(
                    id: $eAddress->getId(),
                    hyperlink: $eAddress->getEaddress(),
                    type: $type,
                    domain: $domain,
                );
            } elseif ($eAddress instanceof \FGTCLB\HisClient\PersonOrgunitService\Struct\EMail) {
                $emailAddresses[] = new EmailAddress(
                    id: $eAddress->getId(),
                    email: $eAddress->getEaddress(),
                    isVerified: false, // TODO check if verified information is available elsewhere
                    domain: $domain,
                );
            }
        }
        return new PersonFunction(
            id: $affiliation->getId(),
            type: $this->functionTypeRepository->findByIdForLanguage($affiliation->getAffiliationTypeId(), $language),
            orgUnit: $this->orgUnitRepository->findByLonglivingId($affiliation->getOrgunitLid()),
            room: $room,
            postAddress: $postAddress,
            emailAddresses: EmailAddressCollection::fromArray($emailAddresses),
            hyperlinks: HyperlinkCollection::fromArray($hyperlinks),
            phoneNumbers: PhoneNumberCollection::fromArray($phoneNumbers),
            messengers: MessengerCollection::fromArray($messengers),
        );
    }
}
