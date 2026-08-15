<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\HisClientFacade\Collection;

use FGTCLB\HisClientFacade\Collection\AccountCollection;
use FGTCLB\HisClientFacade\Collection\CollectionInterface;
use FGTCLB\HisClientFacade\Collection\ContactDetailsCollection;
use FGTCLB\HisClientFacade\Collection\EmailAddressCollection;
use FGTCLB\HisClientFacade\Collection\HyperlinkCollection;
use FGTCLB\HisClientFacade\Collection\MessengerCollection;
use FGTCLB\HisClientFacade\Collection\PersonAttributeCollection;
use FGTCLB\HisClientFacade\Collection\PersonCollection;
use FGTCLB\HisClientFacade\Collection\PersonFunctionCollection;
use FGTCLB\HisClientFacade\Collection\PhoneNumberCollection;
use FGTCLB\HisClientFacade\Collection\PostAddressCollection;
use FGTCLB\HisClientFacade\Collection\ValidityAwareCollectionInterface;
use FGTCLB\HisClientFacade\Model\Account;
use FGTCLB\HisClientFacade\Model\ContactDetails;
use FGTCLB\HisClientFacade\Model\EmailAddress;
use FGTCLB\HisClientFacade\Model\FunctionType;
use FGTCLB\HisClientFacade\Model\Hyperlink;
use FGTCLB\HisClientFacade\Model\Messenger;
use FGTCLB\HisClientFacade\Model\Person;
use FGTCLB\HisClientFacade\Model\PersonalData;
use FGTCLB\HisClientFacade\Model\PersonAttribute;
use FGTCLB\HisClientFacade\Model\PersonFunction;
use FGTCLB\HisClientFacade\Model\PhoneNumber;
use FGTCLB\HisClientFacade\Model\PostAddress;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class CollectionTest extends UnitTestCase
{
    /**
     * @return array{collection: object, expectedItems: object[]}[]
     */
    public static function collectionDataProvider(): iterable
    {
        $items = [
            new ContactDetails(PostAddressCollection::fromArray([]), EmailAddressCollection::fromArray([]), PhoneNumberCollection::fromArray([]), HyperlinkCollection::fromArray([]), MessengerCollection::fromArray([])),
            new ContactDetails(PostAddressCollection::fromArray([]), EmailAddressCollection::fromArray([]), PhoneNumberCollection::fromArray([]), HyperlinkCollection::fromArray([]), MessengerCollection::fromArray([])),
            new ContactDetails(PostAddressCollection::fromArray([]), EmailAddressCollection::fromArray([]), PhoneNumberCollection::fromArray([]), HyperlinkCollection::fromArray([]), MessengerCollection::fromArray([])),
        ];
        $collection = ContactDetailsCollection::fromArray($items);
        yield 'ContactDetailsCollection' => [
            'collection' => $collection,
            'expectedItems' => $items,
        ];

        $items = [
            new EmailAddress(123, 'foo@example.com', false, null),
            new EmailAddress(456, 'bar@example.com', true, null),
            new EmailAddress(789, 'baz@example.com', false, 'business'),
        ];
        $collection = EmailAddressCollection::fromArray($items);
        yield 'EmailAddressCollection' => [
            'collection' => $collection,
            'expectedItems' => $items,
        ];

        $items = [
            new Hyperlink(123, 'https://example.com', null, null),
            new Hyperlink(456, 'https://foo.example.com', 'www', null),
            new Hyperlink(789, 'https://bar.example.com', 'www', 'business'),
        ];
        $collection = HyperlinkCollection::fromArray($items);
        yield 'HyperlinkCollection' => [
            'collection' => $collection,
            'expectedItems' => $items,
        ];

        $items = [
            new Messenger(123, '123456', 'icq', null),
            new Messenger(456, 'baz@example.com', 'msn', null),
            new Messenger(789, 'baz@example.com', null, 'business'),
        ];
        $collection = MessengerCollection::fromArray($items);
        yield 'MessengerCollection' => [
            'collection' => $collection,
            'expectedItems' => $items,
        ];

        $items = [
            new PhoneNumber(123, '+49 123 123456', 'mobile', null),
            new PhoneNumber(456, '+41 32 4353234', null, null),
            new PhoneNumber(789, '+49 3245 53434', null, 'business'),
        ];
        $collection = PhoneNumberCollection::fromArray($items);
        yield 'PhoneNumberCollection' => [
            'collection' => $collection,
            'expectedItems' => $items,
        ];

        $items = [
            new PersonAttribute('foo', 'bar'),
            new PersonAttribute('foo2', 'bar2'),
            new PersonAttribute('foo3', 'bar3'),
        ];
        $collection = PersonAttributeCollection::fromArray($items);
        yield 'PersonAttributeCollection' => [
            'collection' => $collection,
            'expectedItems' => $items,
        ];

        $postAddress = new PostAddress(
            id: 123,
            postcode: '',
            street: 'Musterstraße',
            city: 'Hamburg',
            addressaddition: null,
            postofficebox: null,
            company: null,
            state: null,
            country: null,
            domain: null,
            validFrom: null,
            validTo: null,
        );
        $items = [$postAddress, clone $postAddress, clone $postAddress];
        $collection = PostAddressCollection::fromArray($items);
        yield 'PostAddressCollection' => [
            'collection' => $collection,
            'expectedItems' => $items,
        ];

        $person = new Person(
            id: 123,
            firstname: 'Max',
            surname: 'Mustermann',
            gender: null,
            dateofbirth: null,
            allfirstnames: null,
            birthname: null,
            artistname: null,
            nameprefix: null,
            namesuffix: null,
            academicdegreesuffix: null,
            academicdegree: null,
            title: null,
            birthcity: null,
            country: null,
            personInfo: null,
            createdAt: null,
            updatedAt: null,
            fetchContactDetailsClosure: fn() => ContactDetailsCollection::fromArray([]),
            fetchPersonalDataClosure: fn() => new PersonalData(null, null, null, null, null, null, null),
            fetchPicturesClosure: fn() => [],
            fetchFunctionsClosure: fn() => PersonFunctionCollection::fromArray([]),
            fetchAccountsClosure: fn() => AccountCollection::fromArray([]),
            fetchAttributesClosure: fn() => PersonAttributeCollection::fromArray([]),
        );
        $items = [$person, clone $person, clone $person];
        $collection = PersonCollection::fromArray($items);
        yield 'PersonCollection' => [
            'collection' => $collection,
            'expectedItems' => $items,
        ];

        $function = new PersonFunction(
            id: 123,
            type: new FunctionType(456, 'unique', 'Assistent/in', 'Assistent/in', 'Assistent/in'),
            orgUnit: null,
            room: null,
            postAddress: null,
            emailAddresses: EmailAddressCollection::fromArray([]),
            hyperlinks: HyperlinkCollection::fromArray([]),
            phoneNumbers: PhoneNumberCollection::fromArray([]),
            messengers: MessengerCollection::fromArray([]),
            validFrom: new \DateTimeImmutable(),
            validTo: new \DateTimeImmutable(),
        );
        $items = [$function, clone $function, clone $function];
        $collection = PersonFunctionCollection::fromArray($items);
        yield 'PersonFunctionCollection' => [
            'collection' => $collection,
            'expectedItems' => $items,
        ];

        $items = [
            new Account(123, 'foo', false, null, null),
            new Account(456, 'bar', true, null, null),
            new Account(789, 'baz', false, null, null),
        ];
        $collection = AccountCollection::fromArray($items);
        yield 'AccountCollection' => [
            'collection' => $collection,
            'expectedItems' => $items,
        ];
    }

    /**
     * @param object[] $expectedItems
     */
    #[Test]
    #[DataProvider('collectionDataProvider')]
    public function collectionCanBeIterated(\IteratorAggregate $collection, array $expectedItems): void
    {
        foreach ($collection as $i => $item) {
            $this->assertSame($expectedItems[$i], $item);
        }
    }

    /**
     * @param object[] $expectedItems
     */
    #[Test]
    #[DataProvider('collectionDataProvider')]
    public function collectionCanBeCounted(CollectionInterface $collection, array $expectedItems): void
    {
        $this->assertSame(count($expectedItems), count($collection));
    }

    /**
     * @param object[] $expectedItems
     */
    #[Test]
    #[DataProvider('collectionDataProvider')]
    public function arrayCanBeObtained(CollectionInterface $collection, array $expectedItems): void
    {
        $this->assertSame($expectedItems, $collection->asArray());
    }

    /**
     * @param object[] $expectedItems
     */
    #[Test]
    #[DataProvider('collectionDataProvider')]
    public function firstElementCanBeFetched(CollectionInterface $collection, array $expectedItems): void
    {
        $this->assertSame($expectedItems[0], $collection->first());
    }

    /**
     * @param object[] $expectedItems
     */
    #[Test]
    #[DataProvider('collectionDataProvider')]
    public function lastElementCanBeFetched(CollectionInterface $collection, array $expectedItems): void
    {
        $this->assertSame($expectedItems[2], $collection->last());
    }

    #[Test]
    public function phoneNumberCollectionCanBeFiltered(): void
    {
        $items = [
            new PhoneNumber(123, '+49 123 123456', 'mobile', null),
            new PhoneNumber(456, '+41 32 4353234', 'mobile', null),
            new PhoneNumber(789, '+49 3245 53434', null, 'business'),
        ];
        $collection = PhoneNumberCollection::fromArray($items);
        $this->assertSame(1, count($collection->onlyInDomain('business')));
        $this->assertSame($items[2], $collection->onlyInDomain('business')->first());
        $this->assertSame(2, count($collection->onlyOfType('mobile')));
        $this->assertSame([$items[0], $items[1]], $collection->onlyOfType('mobile')->asArray());
    }

    #[Test]
    public function hyperlinkCollectionCanBeFiltered(): void
    {
        $items = [
            new Hyperlink(123, 'https://example.com', null, null),
            new Hyperlink(456, 'https://foo.example.com', 'www', null),
            new Hyperlink(789, 'https://bar.example.com', 'www', 'business'),
        ];
        $collection = HyperlinkCollection::fromArray($items);
        $this->assertSame(1, count($collection->onlyInDomain('business')));
        $this->assertSame($items[2], $collection->onlyInDomain('business')->first());
        $this->assertSame(2, count($collection->onlyOfType('www')));
        $this->assertSame([$items[1], $items[2]], $collection->onlyOfType('www')->asArray());
    }

    #[Test]
    public function EmailAddressCollectionCanBeFiltered(): void
    {
        $items = [
            new EmailAddress(123, 'foo@example.com', false, null),
            new EmailAddress(456, 'bar@example.com', true, null),
            new EmailAddress(789, 'baz@example.com', false, 'business'),
        ];
        $collection = EmailAddressCollection::fromArray($items);
        $this->assertSame(1, count($collection->onlyInDomain('business')));
        $this->assertSame($items[2], $collection->onlyInDomain('business')->first());
        $this->assertSame(2, count($collection->onlyNotVerified()));
        $this->assertSame([$items[0], $items[2]], $collection->onlyNotVerified()->asArray());
        $this->assertSame(1, count($collection->onlyVerified()));
        $this->assertSame($items[1], $collection->onlyVerified()->first());
    }

    #[Test]
    public function AccountCollectionCanBeFiltered(): void
    {
        $items = [
            new Account(
                id: 123,
                username: 'foo',
                isLdapAccount: false,
                validFrom: null,
                validTo: null,
            ),
            new Account(
                id: 456,
                username: 'bar',
                isLdapAccount: true,
                validFrom: new \DateTimeImmutable('2026-01-15'),
                validTo: new \DateTimeImmutable('2026-01-18'),
            ),
            new Account(
                id: 789,
                username: 'baz',
                isLdapAccount: false,
                validFrom: new \DateTimeImmutable('2026-01-05'),
                validTo: new \DateTimeImmutable('2026-01-10'),
            ),
        ];
        $collection = AccountCollection::fromArray($items);
        $this->assertSame(1, count($collection->onlyLdap()));
        $this->assertSame($items[1], $collection->onlyLdap()->first());
    }

    /**
     * @return array{collection: object, expectedValidItems: object[], expectedNotValidItems: object[]}[]
     */
    public static function validityAwareCollectionsCanBeFilteredDataProvider(): iterable
    {
        $items = [
            new PostAddress(
                id: 123,
                postcode: '',
                street: 'Musterstraße',
                city: 'Hamburg',
                addressaddition: null,
                postofficebox: null,
                company: null,
                state: null,
                country: null,
                domain: null,
                validFrom: null,
                validTo: null,
            ),
            new PostAddress(
                id: 123,
                postcode: '',
                street: 'Musterstraße',
                city: 'Hamburg',
                addressaddition: null,
                postofficebox: null,
                company: null,
                state: null,
                country: null,
                domain: null,
                validFrom: new \DateTimeImmutable('2026-01-15'),
                validTo: new \DateTimeImmutable('2026-01-18'),
            ),
            new PostAddress(
                id: 123,
                postcode: '',
                street: 'Musterstraße',
                city: 'Hamburg',
                addressaddition: null,
                postofficebox: null,
                company: null,
                state: null,
                country: null,
                domain: null,
                validFrom: new \DateTimeImmutable('2026-01-05'),
                validTo: new \DateTimeImmutable('2026-01-10'),
            ),
        ];
        yield 'PostAddressCollection' => [
            'collection' => PostAddressCollection::fromArray($items),
            'expectedValidItems' => [$items[0], $items[2]],
            'expectedNotValidItems' => [$items[1]],
        ];

        $items = [
            new PersonFunction(
                id: 123,
                type: new FunctionType(456, 'unique', 'Assistent/in', 'Assistent/in', 'Assistent/in'),
                orgUnit: null,
                room: null,
                postAddress: null,
                emailAddresses: EmailAddressCollection::fromArray([]),
                hyperlinks: HyperlinkCollection::fromArray([]),
                phoneNumbers: PhoneNumberCollection::fromArray([]),
                messengers: MessengerCollection::fromArray([]),
                validFrom: null,
                validTo: null,
            ),
            new PersonFunction(
                id: 456,
                type: new FunctionType(456, 'unique', 'Assistent/in', 'Assistent/in', 'Assistent/in'),
                orgUnit: null,
                room: null,
                postAddress: null,
                emailAddresses: EmailAddressCollection::fromArray([]),
                hyperlinks: HyperlinkCollection::fromArray([]),
                phoneNumbers: PhoneNumberCollection::fromArray([]),
                messengers: MessengerCollection::fromArray([]),
                validFrom: new \DateTimeImmutable('2026-01-15'),
                validTo: new \DateTimeImmutable('2026-01-18'),
            ),
            new PersonFunction(
                id: 789,
                type: new FunctionType(456, 'unique', 'Assistent/in', 'Assistent/in', 'Assistent/in'),
                orgUnit: null,
                room: null,
                postAddress: null,
                emailAddresses: EmailAddressCollection::fromArray([]),
                hyperlinks: HyperlinkCollection::fromArray([]),
                phoneNumbers: PhoneNumberCollection::fromArray([]),
                messengers: MessengerCollection::fromArray([]),
                validFrom: new \DateTimeImmutable('2026-01-05'),
                validTo: new \DateTimeImmutable('2026-01-10'),
            ),
        ];
        yield 'PersonFunctionCollection' => [
            'collection' => PersonFunctionCollection::fromArray($items),
            'expectedValidItems' => [$items[0], $items[2]],
            'expectedNotValidItems' => [$items[1]],
        ];

        $items = [
            new Account(
                id: 123,
                username: 'foo',
                isLdapAccount: false,
                validFrom: null,
                validTo: null,
            ),
            new Account(
                id: 456,
                username: 'bar',
                isLdapAccount: true,
                validFrom: new \DateTimeImmutable('2026-01-15'),
                validTo: new \DateTimeImmutable('2026-01-18'),
            ),
            new Account(
                id: 789,
                username: 'baz',
                isLdapAccount: false,
                validFrom: new \DateTimeImmutable('2026-01-05'),
                validTo: new \DateTimeImmutable('2026-01-10'),
            ),
        ];
        $collection = AccountCollection::fromArray($items);
        yield 'AccountCollection' => [
            'collection' => $collection,
            'expectedValidItems' => [$items[0], $items[2]],
            'expectedNotValidItems' => [$items[1]],
        ];
    }

    /**
     * @param object[] $expectedValidItems
     * @param object[] $expectedNotValidItems
     */
    #[Test]
    #[DataProvider('validityAwareCollectionsCanBeFilteredDataProvider')]
    public function validityAwareCollectionsCanBeFiltered(
        CollectionInterface&ValidityAwareCollectionInterface $collection,
        array $expectedValidItems,
        array $expectedNotValidItems,
    ): void {
        $this->assertSame($expectedValidItems, $collection->onlyValidAt(new \DateTimeImmutable('2026-01-07'))->asArray());
        $this->assertSame($expectedNotValidItems, $collection->notValidAt(new \DateTimeImmutable('2026-01-07'))->asArray());
    }
}
