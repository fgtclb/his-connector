<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\HisClientFacade\Collection;

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
use FGTCLB\HisClientFacade\Model\ContactDetails;
use FGTCLB\HisClientFacade\Model\EmailAddress;
use FGTCLB\HisClientFacade\Model\Hyperlink;
use FGTCLB\HisClientFacade\Model\Messenger;
use FGTCLB\HisClientFacade\Model\Person;
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
            new EmailAddress('foo@example.com', false, null),
            new EmailAddress('bar@example.com', true, null),
            new EmailAddress('baz@example.com', false, 'business'),
        ];
        $collection = EmailAddressCollection::fromArray($items);
        yield 'EmailAddressCollection' => [
            'collection' => $collection,
            'expectedItems' => $items,
        ];

        $items = [
            new Hyperlink('https://example.com', null, null),
            new Hyperlink('https://foo.example.com', 'www', null),
            new Hyperlink('https://bar.example.com', 'www', 'business'),
        ];
        $collection = HyperlinkCollection::fromArray($items);
        yield 'HyperlinkCollection' => [
            'collection' => $collection,
            'expectedItems' => $items,
        ];

        $items = [
            new Messenger('123456', 'icq', null),
            new Messenger('baz@example.com', 'msn', null),
            new Messenger('baz@example.com', null, 'business'),
        ];
        $collection = MessengerCollection::fromArray($items);
        yield 'MessengerCollection' => [
            'collection' => $collection,
            'expectedItems' => $items,
        ];

        $items = [
            new PhoneNumber('+49 123 123456', 'mobile', null),
            new PhoneNumber('+41 32 4353234', null, null),
            new PhoneNumber('+49 3245 53434', null, 'business'),
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
            postcode: '',
            street: 'Musterstraße',
            city: 'Hamburg',
            addressaddition: null,
            postofficebox: null,
            company: null,
            state: null,
            country: null,
            domain: null,
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
            fetchPicturesClosure: fn() => [],
            fetchFunctionsClosure: fn() => PersonFunctionCollection::fromArray([]),
            fetchAccountsClosure: fn() => [],
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
            title: 'Assistent/in',
            orgUnit: null,
            room: null,
            postAddress: null,
            emailAddresses: EmailAddressCollection::fromArray([]),
            hyperlinks: HyperlinkCollection::fromArray([]),
            phoneNumbers: PhoneNumberCollection::fromArray([]),
            messengers: MessengerCollection::fromArray([]),
        );
        $items = [$function, clone $function, clone $function];
        $collection = PersonFunctionCollection::fromArray($items);
        yield 'PersonFunctionCollection' => [
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
            new PhoneNumber('+49 123 123456', 'mobile', null),
            new PhoneNumber('+41 32 4353234', 'mobile', null),
            new PhoneNumber('+49 3245 53434', null, 'business'),
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
            new Hyperlink('https://example.com', null, null),
            new Hyperlink('https://foo.example.com', 'www', null),
            new Hyperlink('https://bar.example.com', 'www', 'business'),
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
            new EmailAddress('foo@example.com', false, null),
            new EmailAddress('bar@example.com', true, null),
            new EmailAddress('baz@example.com', false, 'business'),
        ];
        $collection = EmailAddressCollection::fromArray($items);
        $this->assertSame(1, count($collection->onlyInDomain('business')));
        $this->assertSame($items[2], $collection->onlyInDomain('business')->first());
        $this->assertSame(2, count($collection->onlyNotVerified()));
        $this->assertSame([$items[0], $items[2]], $collection->onlyNotVerified()->asArray());
        $this->assertSame(1, count($collection->onlyVerified()));
        $this->assertSame($items[1], $collection->onlyVerified()->first());
    }
}
