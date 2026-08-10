<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Factory;

use FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta202506;
use FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta;
use FGTCLB\HisClient\PersonAddressService\Struct\MessengerMeta;
use FGTCLB\HisClient\PersonAddressService\Struct\PersonAddressesByNotification202506;
use FGTCLB\HisClient\PersonAddressService\Struct\PhoneMeta;
use FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta;
use FGTCLB\HisClientFacade\Model\ContactDetails;
use FGTCLB\HisClientFacade\Model\EmailAddress;
use FGTCLB\HisClientFacade\Model\Hyperlink;
use FGTCLB\HisClientFacade\Model\Messenger;
use FGTCLB\HisClientFacade\Model\PhoneNumber;

readonly class ContactDetailsFactory
{
    public function __construct(private PostAddressFactory $postAddressFactory) {}

    public function create(PersonAddressesByNotification202506 $addresses, string $language): ContactDetails
    {
        return new ContactDetails(
            postAddresses: array_map(
                fn(PostaddressMeta $address) => $this->postAddressFactory->createFromPostaddress_1($address->getPostaddress(), $language),
                $addresses->getPostaddresses202506()?->getPostaddressMeta202506() ?? [],
            ),
            emailAddresses: array_map(
                fn(EmailMeta202506 $email) => new EmailAddress(
                    email: $email->getEmail()->getEmailValue() ?? '',
                    isVerified: $email->getEmail()->getIsVerified() ?? false,
                    domain: $email->getEmail()->getAddresstag(),
                ),
                $addresses->getEmails202506()?->getEmailMeta202506() ?? [],
            ),
            phoneNumbers: array_map(
                fn(PhoneMeta $phone) => new PhoneNumber(
                    phoneNumber: $phone->getPhone()->getPhoneNumber() ?? '',
                    type: $phone->getPhone()->getEaddresstype(),
                    domain: $phone->getPhone()->getAddresstag(),
                ),
                $addresses->getPhones202506()?->getPhoneMeta202506() ?? [],
            ),
            hyperlinks: array_map(
                fn(HyperlinkMeta $link) => new Hyperlink(
                    hyperlink: $link->getHyperlink()->getHyperlinkValue() ?? '',
                    type: $link->getHyperlink()->getEaddresstype(),
                    domain: $link->getHyperlink()->getAddresstag(),
                ),
                $addresses->getHyperlinks202506()?->getHyperlinkMeta202506() ?? [],
            ),
            messengers: array_map(
                fn(MessengerMeta $messenger) => new Messenger(
                    account: $messenger->getMessenger()->getMessengerValue() ?? '',
                    type: $messenger->getMessenger()->getEaddresstype(),
                    domain: $messenger->getMessenger()->getAddresstag(),
                ),
                $addresses->getMessengers202506()?->getMessengerMeta202506() ?? [],
            ),
        );
    }
}
