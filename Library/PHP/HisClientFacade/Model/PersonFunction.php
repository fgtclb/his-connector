<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

use FGTCLB\HisClient\FacilityService\Struct\Room;
use FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit;

final readonly class PersonFunction
{
    public function __construct(
        public int $id,
        public ?OrgUnit $orgUnit,
        public ?Room $room,
        public ?PostAddress $postAddress,
        /** @var EmailAddress[] */
        public array $emailAddresses,
        /** @var PhoneNumber[] */
        public array $phoneNumbers,
        /** @var Hyperlink[] */
        public array $hyperlinks,
        /** @var Messenger[] */
        public array $messengers,
    ) {}
}
