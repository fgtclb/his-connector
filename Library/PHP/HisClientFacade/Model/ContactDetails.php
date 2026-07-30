<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

use FGTCLB\HisClientFacade\Collection\EmailAddressCollection;
use FGTCLB\HisClientFacade\Collection\HyperlinkCollection;
use FGTCLB\HisClientFacade\Collection\MessengerCollection;
use FGTCLB\HisClientFacade\Collection\PhoneNumberCollection;
use FGTCLB\HisClientFacade\Collection\PostAddressCollection;

final readonly class ContactDetails
{
    public function __construct(
        public PostAddressCollection $postAddresses,
        public EmailAddressCollection $emailAddresses,
        public PhoneNumberCollection $phoneNumbers,
        public HyperlinkCollection $hyperlinks,
        public MessengerCollection $messengers,
    ) {}
}
