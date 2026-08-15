<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

use FGTCLB\HisClientFacade\Collection\EmailAddressCollection;
use FGTCLB\HisClientFacade\Collection\HyperlinkCollection;
use FGTCLB\HisClientFacade\Collection\MessengerCollection;
use FGTCLB\HisClientFacade\Collection\PhoneNumberCollection;

final readonly class PersonFunction implements EntityInterface, ValidityAwareEntityInterface
{
    use ValidityAwareEntityTrait;

    public function __construct(
        public int $id,
        public ?FunctionType $type,
        public ?OrgUnit $orgUnit,
        public ?Room $room,
        public ?PostAddress $postAddress,
        public EmailAddressCollection $emailAddresses,
        public PhoneNumberCollection $phoneNumbers,
        public HyperlinkCollection $hyperlinks,
        public MessengerCollection $messengers,
        public ?\DateTimeInterface $validFrom,
        public ?\DateTimeInterface $validTo,
    ) {}

    public function getIdentifier(): string
    {
        return (string)$this->id;
    }
}
