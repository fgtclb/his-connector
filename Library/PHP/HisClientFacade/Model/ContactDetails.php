<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class ContactDetails
{
    public function __construct(
        /** @var PostAddress[] */
        public array $postAddresses,
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
