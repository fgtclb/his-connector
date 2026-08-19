<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Factory;

use FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta202506;
use FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta;
use FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta;
use FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506;
use FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta;
use FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta;
use FGTCLB\HisClientFacade\Collection\EmailAddressCollection;
use FGTCLB\HisClientFacade\Collection\HyperlinkCollection;
use FGTCLB\HisClientFacade\Collection\MessengerCollection;
use FGTCLB\HisClientFacade\Collection\PhoneNumberCollection;
use FGTCLB\HisClientFacade\Collection\PostAddressCollection;
use FGTCLB\HisClientFacade\Model\ContactDetails;
use FGTCLB\HisClientFacade\Model\EmailAddress;
use FGTCLB\HisClientFacade\Model\Hyperlink;
use FGTCLB\HisClientFacade\Model\Messenger;
use FGTCLB\HisClientFacade\Model\PhoneNumber;

readonly class ContactDetailsFactory
{
    public function __construct(private PostAddressFactory $postAddressFactory) {}

    public function create(int $personId, PersonAddressesByNotification202506 $addresses, string $language): ContactDetails
    {
        return new ContactDetails(
            personId: $personId,
            postAddresses: PostAddressCollection::fromArray(array_map(
                fn(PostaddressMeta $address) => $this->postAddressFactory->createFromPostaddressMeta($address, $language),
                array_values($addresses->getPostaddresses202506()?->getPostaddressMeta202506() ?? []),
            )),
            emailAddresses: EmailAddressCollection::fromArray(array_map(
                fn(EmailMeta202506 $email) => new EmailAddress(
                    id: $email->getAddressId(),
                    email: $email->getEmail()->getEmailValue() ?? '',
                    isVerified: $email->getEmail()->getIsVerified() ?? false,
                    domain: $email->getEmail()->getAddresstag(),
                ),
                array_values($addresses->getEmails202506()?->getEmailMeta202506() ?? []),
            )),
            phoneNumbers: PhoneNumberCollection::fromArray(array_map(
                fn(PhoneMeta $phone) => new PhoneNumber(
                    id: $phone->getAddressId(),
                    phoneNumber: $phone->getPhone()->getPhoneNumber() ?? '',
                    type: $phone->getPhone()->getEaddresstype(),
                    domain: $phone->getPhone()->getAddresstag(),
                ),
                array_values($addresses->getPhones202506()?->getPhoneMeta202506() ?? []),
            )),
            hyperlinks: HyperlinkCollection::fromArray(array_map(
                fn(HyperlinkMeta $link) => new Hyperlink(
                    id: $link->getAddressId(),
                    hyperlink: $link->getHyperlink()->getHyperlinkValue() ?? '',
                    type: $link->getHyperlink()->getEaddresstype(),
                    domain: $link->getHyperlink()->getAddresstag(),
                ),
                array_values($addresses->getHyperlinks202506()?->getHyperlinkMeta202506() ?? []),
            )),
            messengers: MessengerCollection::fromArray(array_map(
                fn(MessengerMeta $messenger) => new Messenger(
                    id: $messenger->getAddressId(),
                    account: $messenger->getMessenger()->getMessengerValue() ?? '',
                    type: $messenger->getMessenger()->getEaddresstype(),
                    domain: $messenger->getMessenger()->getAddresstag(),
                ),
                array_values($addresses->getMessengers202506()?->getMessengerMeta202506() ?? []),
            )),
        );
    }
}
