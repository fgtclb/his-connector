<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

use FGTCLB\HisClientFacade\Collection\EmailAddressCollection;
use FGTCLB\HisClientFacade\Collection\HyperlinkCollection;
use FGTCLB\HisClientFacade\Collection\MessengerCollection;
use FGTCLB\HisClientFacade\Collection\PhoneNumberCollection;
use FGTCLB\HisClientFacade\Collection\PostAddressCollection;

final readonly class ContactDetails implements EntityInterface
{
    public function __construct(
        public int $personId,
        public PostAddressCollection $postAddresses,
        public EmailAddressCollection $emailAddresses,
        public PhoneNumberCollection $phoneNumbers,
        public HyperlinkCollection $hyperlinks,
        public MessengerCollection $messengers,
    ) {}

    public function getIdentifier(): string
    {
        return "contactDetails-$this->personId";
    }
}
