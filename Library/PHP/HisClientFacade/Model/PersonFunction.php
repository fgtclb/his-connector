<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

use FGTCLB\HisClient\FacilityService\Struct\Room;
use FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit;
use FGTCLB\HisClientFacade\Collection\EmailAddressCollection;
use FGTCLB\HisClientFacade\Collection\HyperlinkCollection;
use FGTCLB\HisClientFacade\Collection\MessengerCollection;
use FGTCLB\HisClientFacade\Collection\PhoneNumberCollection;

final readonly class PersonFunction
{
    public function __construct(
        public int $id,
        public string $title,
        public ?OrgUnit $orgUnit,
        public ?Room $room,
        public ?PostAddress $postAddress,
        public EmailAddressCollection $emailAddresses,
        public PhoneNumberCollection $phoneNumbers,
        public HyperlinkCollection $hyperlinks,
        public MessengerCollection $messengers,
    ) {}
}
