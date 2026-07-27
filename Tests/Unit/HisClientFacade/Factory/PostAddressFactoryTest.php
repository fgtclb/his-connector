<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit;

use FGTCLB\HisClient\KeyvalueService\Struct\CountryValue;
use FGTCLB\HisClientFacade\Factory\PostAddressFactory;
use FGTCLB\HisClientFacade\Repository\CountryRepository;
use FGTCLB\HisClientFacade\Utility\KeyvalueConverter;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class PostAddressFactoryTest extends UnitTestCase
{
    /**
     * @return array<string, mixed[]>
     */
    public static function createFromPersonOrgunitPostAddressDataProvider(): array
    {
        return [
            'all fields filled' => [
                'postcode' => '12345',
                'street' => 'Test Street',
                'city' => 'Test City',
                'addressaddition' => 'Additional Information',
                'postofficebox' => 'PO123',
                'company' => 'Test Company',
                'state' => 'NRW',
                'countryId' => 456,
                'addresstagId' => 123,
                'expectedCountryUniquename' => 'germany',
                'expectedDomain' => 'business',
            ],
            'minimal fields filled' => [
                'postcode' => '12345',
                'street' => 'Test Street',
                'city' => 'Test City',
                'addressaddition' => null,
                'postofficebox' => null,
                'company' => null,
                'state' => null,
                'countryId' => null,
                'addresstagId' => 123,
                'expectedCountryUniquename' => null,
                'expectedDomain' => 'business',
            ],
        ];
    }

    #[Test]
    #[DataProvider('createFromPersonOrgunitPostAddressDataProvider')]
    public function createFromPersonOrgunitPostAddress(
        string $postcode,
        string $street,
        string $city,
        ?string $addressaddition,
        ?string $postofficebox,
        ?string $company,
        ?string $state,
        ?int $countryId,
        int $addresstagId,
        ?string $expectedCountryUniquename,
        ?string $expectedDomain,
    ): void {
        $germany = (new CountryValue())->setUniquename('germany');
        $mockCountryRepository = self::createMock(CountryRepository::class);
        $mockCountryRepository->method('findByIdForLanguage')->willReturnMap([[456, 'de', $germany]]);
        $mockKeyvalueConverter = self::createMock(KeyvalueConverter::class);
        $mockKeyvalueConverter->method('convertAddresstagIdToUniquename')->willReturnMap([[123, 'de', 'business']]);

        $subject = new PostAddressFactory($mockCountryRepository, $mockKeyvalueConverter);
        $input = (new \FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress($postcode, $street, $city, $addressaddition, $postofficebox, $company, $state, $countryId));
        $input->setAddresstagId($addresstagId);
        $postAddress = $subject->createFromPersonOrgunitPostAddress($input, 'de');
        $this->assertSame($postcode, $postAddress->postcode);
        $this->assertSame($street, $postAddress->street);
        $this->assertSame($city, $postAddress->city);
        $this->assertSame($addressaddition, $postAddress->addressaddition);
        $this->assertSame($postofficebox, $postAddress->postofficebox);
        $this->assertSame($company, $postAddress->company);
        $this->assertSame($state, $postAddress->state);
        $this->assertSame($expectedCountryUniquename, $postAddress->country?->getUniquename());
        $this->assertSame($expectedDomain, $postAddress->domain);
    }

    /**
     * @return array<string, mixed[]>
     */
    public static function createFromPostAddressWithNillablePostcodeDataProvider(): array
    {
        return [
            'all fields filled' => [
                'postcode' => '12345',
                'street' => 'Test Street',
                'city' => 'Test City',
                'addressaddition' => 'Additional Information',
                'postofficebox' => 'PO123',
                'company' => 'Test Company',
                'state' => 'NRW',
                'countryId' => 456,
                'addresstagId' => 123,
                'expectedCountryUniquename' => 'germany',
                'expectedDomain' => 'business',
            ],
            'minimal fields filled' => [
                'postcode' => null,
                'street' => 'Test Street',
                'city' => 'Test City',
                'addressaddition' => null,
                'postofficebox' => null,
                'company' => null,
                'state' => null,
                'countryId' => null,
                'addresstagId' => null,
                'expectedCountryUniquename' => null,
                'expectedDomain' => null,
            ],
        ];
    }

    #[Test]
    #[DataProvider('createFromPersonOrgunitPostAddressDataProvider')]
    public function createFromPostAddressWithNillablePostcode(
        ?string $postcode,
        string $street,
        string $city,
        ?string $addressaddition,
        ?string $postofficebox,
        ?string $company,
        ?string $state,
        ?int $countryId,
        ?int $addresstagId,
        ?string $expectedCountryUniquename,
        ?string $expectedDomain,
    ): void {
        $germany = (new CountryValue())->setUniquename('germany');
        $mockCountryRepository = self::createMock(CountryRepository::class);
        $mockCountryRepository->method('findByIdForLanguage')->willReturnMap([[456, 'de', $germany]]);
        $mockKeyvalueConverter = self::createMock(KeyvalueConverter::class);
        $mockKeyvalueConverter->method('convertAddresstagIdToUniquename')->willReturnMap([[123, 'de', 'business']]);

        $subject = new PostAddressFactory($mockCountryRepository, $mockKeyvalueConverter);
        $input = (new \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode($street, $city, $postcode, $addressaddition, $postofficebox, $company, $state, $countryId));
        $input->setAddresstagId($addresstagId);
        $postAddress = $subject->createFromPostAddressWithNillablePostcode($input, 'de');
        $this->assertSame($postcode, $postAddress->postcode);
        $this->assertSame($street, $postAddress->street);
        $this->assertSame($city, $postAddress->city);
        $this->assertSame($addressaddition, $postAddress->addressaddition);
        $this->assertSame($postofficebox, $postAddress->postofficebox);
        $this->assertSame($company, $postAddress->company);
        $this->assertSame($state, $postAddress->state);
        $this->assertSame($expectedCountryUniquename, $postAddress->country?->getUniquename());
        $this->assertSame($expectedDomain, $postAddress->domain);
    }

    #[Test]
    public function createFromStreetAndCity(): void
    {
        $subject = new PostAddressFactory(
            $this->createStub(CountryRepository::class),
            $this->createStub(KeyvalueConverter::class)
        );
        $postAddress = $subject->createFromStreetAndCity('Test Street', 'Test City');
        $this->assertSame('', $postAddress->postcode);
        $this->assertSame('Test Street', $postAddress->street);
        $this->assertSame('Test City', $postAddress->city);
        $this->assertNull($postAddress->addressaddition);
        $this->assertNull($postAddress->postofficebox);
        $this->assertNull($postAddress->company);
        $this->assertNull($postAddress->state);
        $this->assertNull($postAddress->country);
        $this->assertNull($postAddress->domain);
    }

    /**
     * @return array<string, mixed[]>
     */
    public static function createFromPostaddress_1DataProvider(): array
    {
        return [
            'all fields filled' => [
                'postcode' => '12345',
                'street' => 'Test Street',
                'city' => 'Test City',
                'addressaddition' => 'Additional Information',
                'postofficebox' => 'PO123',
                'company' => 'Test Company',
                'state' => 'NRW',
                'country' => 'DE',
                'addresstag' => 'business',
                'expectedPostcode' => '12345',
                'expectedStreet' => 'Test Street',
                'expectedCity' => 'Test City',
                'expectedCountryUniquename' => 'germany',
            ],
            'minimal fields filled' => [
                'postcode' => null,
                'street' => null,
                'city' => null,
                'addressaddition' => null,
                'postofficebox' => null,
                'company' => null,
                'state' => null,
                'country' => null,
                'addresstag' => null,
                'expectedPostcode' => '',
                'expectedStreet' => '',
                'expectedCity' => '',
                'expectedCountryUniquename' => null,
            ],
        ];
    }

    #[Test]
    #[DataProvider('createFromPostaddress_1DataProvider')]
    public function createFromPostaddress_1(
        ?string $postcode,
        ?string $street,
        ?string $city,
        ?string $addressaddition,
        ?string $postofficebox,
        ?string $company,
        ?string $state,
        ?string $country,
        ?string $addresstag,
        string $expectedPostcode,
        string $expectedStreet,
        string $expectedCity,
        ?string $expectedCountryUniquename,
    ): void {
        $germany = (new CountryValue())->setUniquename('germany');
        $mockCountryRepository = self::createMock(CountryRepository::class);
        $mockCountryRepository->method('findByUniquenameForLanguage')->willReturnMap([['DE', 'de', $germany]]);
        $mockKeyvalueConverter = self::createMock(KeyvalueConverter::class);
        $mockKeyvalueConverter->method('convertAddresstagIdToUniquename')->willReturnMap([[123, 'de', 'business']]);

        $subject = new PostAddressFactory($mockCountryRepository, $mockKeyvalueConverter);
        $input = (new \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1($postcode, $addressaddition, $postofficebox, $country, $addresstag, $company, null, $state, $street, $city));
        $postAddress = $subject->createFromPostaddress_1($input, 'de');
        $this->assertSame($expectedPostcode, $postAddress->postcode);
        $this->assertSame($expectedStreet, $postAddress->street);
        $this->assertSame($expectedCity, $postAddress->city);
        $this->assertSame($addressaddition, $postAddress->addressaddition);
        $this->assertSame($postofficebox, $postAddress->postofficebox);
        $this->assertSame($company, $postAddress->company);
        $this->assertSame($state, $postAddress->state);
        $this->assertSame($expectedCountryUniquename, $postAddress->country?->getUniquename());
        $this->assertSame($addresstag, $postAddress->domain);
    }
}
