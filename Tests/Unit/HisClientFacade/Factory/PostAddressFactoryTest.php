<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\HisClientFacade\Factory;

use FGTCLB\HisClient\KeyvalueService\Struct\CountryValue;
use FGTCLB\HisClientFacade\Exception\PostAddressEntityException;
use FGTCLB\HisClientFacade\Factory\PostAddressFactory;
use FGTCLB\HisClientFacade\Repository\CountryRepository;
use FGTCLB\HisClientFacade\Utility\DateTimeConverter;
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
                'id' => 789,
                'postcode' => '12345',
                'street' => 'Test Street',
                'city' => 'Test City',
                'addressaddition' => 'Additional Information',
                'postofficebox' => 'PO123',
                'company' => 'Test Company',
                'state' => 'NRW',
                'countryId' => 456,
                'addresstagId' => 123,
                'validFrom' => '2016-01-01',
                'validTo' => '2016-02-01',
                'expectedCountryUniquename' => 'germany',
                'expectedDomain' => 'business',
                'expectedIdentifier' => '789',
                'expectedValidFrom' => new \DateTimeImmutable('2016-01-01'),
                'expectedValidTo' => new \DateTimeImmutable('2016-02-01'),
            ],
            'minimal fields filled' => [
                'id' => 123,
                'postcode' => '12345',
                'street' => 'Test Street',
                'city' => 'Test City',
                'addressaddition' => null,
                'postofficebox' => null,
                'company' => null,
                'state' => null,
                'countryId' => null,
                'addresstagId' => 123,
                'validFrom' => null,
                'validTo' => null,
                'expectedCountryUniquename' => null,
                'expectedDomain' => 'business',
                'expectedIdentifier' => '123',
                'expectedValidFrom' => null,
                'expectedValidTo' => null,
            ],
        ];
    }

    #[Test]
    #[DataProvider('createFromPersonOrgunitPostAddressDataProvider')]
    public function createFromPersonOrgunitPostAddress(
        ?int $id,
        string $postcode,
        string $street,
        string $city,
        ?string $addressaddition,
        ?string $postofficebox,
        ?string $company,
        ?string $state,
        ?int $countryId,
        int $addresstagId,
        ?string $validFrom,
        ?string $validTo,
        ?string $expectedCountryUniquename,
        ?string $expectedDomain,
        ?string $expectedIdentifier,
        ?\DateTimeInterface $expectedValidFrom,
        ?\DateTimeInterface $expectedValidTo,
    ): void {
        $germany = (new CountryValue())->setUniquename('germany');
        $mockCountryRepository = self::createMock(CountryRepository::class);
        $mockCountryRepository->method('findByIdForLanguage')->willReturnMap([[456, 'de', $germany]]);
        $mockKeyvalueConverter = self::createMock(KeyvalueConverter::class);
        $mockKeyvalueConverter->method('convertAddresstagIdToUniquename')->willReturnMap([[123, 'de', 'business']]);

        $subject = new PostAddressFactory($mockCountryRepository, $mockKeyvalueConverter, new DateTimeConverter());
        $input = (new \FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress($postcode, $street, $city, $addressaddition, $postofficebox, $company, $state, $countryId));
        $input->setId($id);
        $input->setAddresstagId($addresstagId);
        $input->setValidFrom($validFrom);
        $input->setValidTo($validTo);
        $postAddress = $subject->createFromPersonOrgunitPostAddress($input, 'de');
        $this->assertSame($expectedIdentifier, $postAddress->getIdentifier());
        $this->assertSame($id, $postAddress->id);
        $this->assertSame($postcode, $postAddress->postcode);
        $this->assertSame($street, $postAddress->street);
        $this->assertSame($city, $postAddress->city);
        $this->assertSame($addressaddition, $postAddress->addressaddition);
        $this->assertSame($postofficebox, $postAddress->postofficebox);
        $this->assertSame($company, $postAddress->company);
        $this->assertSame($state, $postAddress->state);
        $this->assertSame($expectedCountryUniquename, $postAddress->country?->getUniquename());
        $this->assertSame($expectedDomain, $postAddress->domain);
        $this->assertEquals($expectedValidFrom, $postAddress->validFrom);
        $this->assertEquals($expectedValidFrom, $postAddress->validFrom());
        $this->assertEquals($expectedValidTo, $postAddress->validTo);
        $this->assertEquals($expectedValidTo, $postAddress->validTo());
    }

    #[Test]
    public function createFromPersonOrgunitPostAddressValidatesId(): void
    {
        self::expectException(PostAddressEntityException::class);
        $subject = new PostAddressFactory(
            $this->createStub(CountryRepository::class),
            $this->createStub(KeyvalueConverter::class),
            new DateTimeConverter(),
        );
        $input = (new \FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress('12345', 'street', 'city'));
        $subject->createFromPersonOrgunitPostAddress($input, 'de');
    }

    /**
     * @return array<string, mixed[]>
     */
    public static function createFromPostAddressWithNillablePostcodeDataProvider(): array
    {
        return [
            'all fields filled' => [
                'id' => 789,
                'postcode' => '12345',
                'street' => 'Test Street',
                'city' => 'Test City',
                'addressaddition' => 'Additional Information',
                'postofficebox' => 'PO123',
                'company' => 'Test Company',
                'state' => 'NRW',
                'countryId' => 456,
                'addresstagId' => 123,
                'validFrom' => '2026-01-01',
                'validTo' => '2026-02-01',
                'expectedCountryUniquename' => 'germany',
                'expectedDomain' => 'business',
                'expectedIdentifier' => '789',
                'expectedValidFrom' => new \DateTimeImmutable('2026-01-01'),
                'expectedValidTo' => new \DateTimeImmutable('2026-02-01'),
            ],
            'minimal fields filled' => [
                'id' => 123,
                'postcode' => null,
                'street' => 'Test Street',
                'city' => 'Test City',
                'addressaddition' => null,
                'postofficebox' => null,
                'company' => null,
                'state' => null,
                'countryId' => null,
                'addresstagId' => null,
                'validFrom' => null,
                'validTo' => null,
                'expectedCountryUniquename' => null,
                'expectedDomain' => null,
                'expectedIdentifier' => '123',
                'expectedValidFrom' => null,
                'expectedValidTo' => null,
            ],
        ];
    }

    #[Test]
    #[DataProvider('createFromPersonOrgunitPostAddressDataProvider')]
    public function createFromPostAddressWithNillablePostcode(
        ?int $id,
        ?string $postcode,
        string $street,
        string $city,
        ?string $addressaddition,
        ?string $postofficebox,
        ?string $company,
        ?string $state,
        ?int $countryId,
        ?int $addresstagId,
        ?string $validFrom,
        ?string $validTo,
        ?string $expectedCountryUniquename,
        ?string $expectedDomain,
        ?string $expectedIdentifier,
        ?\DateTimeInterface $expectedValidFrom,
        ?\DateTimeInterface $expectedValidTo,
    ): void {
        $germany = (new CountryValue())->setUniquename('germany');
        $mockCountryRepository = self::createMock(CountryRepository::class);
        $mockCountryRepository->method('findByIdForLanguage')->willReturnMap([[456, 'de', $germany]]);
        $mockKeyvalueConverter = self::createMock(KeyvalueConverter::class);
        $mockKeyvalueConverter->method('convertAddresstagIdToUniquename')->willReturnMap([[123, 'de', 'business']]);

        $subject = new PostAddressFactory($mockCountryRepository, $mockKeyvalueConverter, new DateTimeConverter());
        $input = (new \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode($street, $city, $postcode, $addressaddition, $postofficebox, $company, $state, $countryId));
        $input->setId($id);
        $input->setAddresstagId($addresstagId);
        $input->setValidFrom($validFrom);
        $input->setValidTo($validTo);
        $postAddress = $subject->createFromPostAddressWithNillablePostcode($input, 'de');
        $this->assertSame($expectedIdentifier, $postAddress->getIdentifier());
        $this->assertSame($id, $postAddress->id);
        $this->assertSame($postcode, $postAddress->postcode);
        $this->assertSame($street, $postAddress->street);
        $this->assertSame($city, $postAddress->city);
        $this->assertSame($addressaddition, $postAddress->addressaddition);
        $this->assertSame($postofficebox, $postAddress->postofficebox);
        $this->assertSame($company, $postAddress->company);
        $this->assertSame($state, $postAddress->state);
        $this->assertSame($expectedCountryUniquename, $postAddress->country?->getUniquename());
        $this->assertSame($expectedDomain, $postAddress->domain);
        $this->assertEquals($expectedValidFrom, $postAddress->validFrom);
        $this->assertEquals($expectedValidFrom, $postAddress->validFrom());
        $this->assertEquals($expectedValidTo, $postAddress->validTo);
        $this->assertEquals($expectedValidTo, $postAddress->validTo());
    }

    #[Test]
    public function createFromPostAddressWithNillablePostcodeValidatesId(): void
    {
        self::expectException(PostAddressEntityException::class);
        $subject = new PostAddressFactory(
            $this->createStub(CountryRepository::class),
            $this->createStub(KeyvalueConverter::class),
            new DateTimeConverter(),
        );
        $input = (new \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode('street', 'city'));
        $subject->createFromPostAddressWithNillablePostcode($input, 'de');
    }

    /**
     * @return array<string, mixed[]>
     */
    public static function createFromPostaddressMetaDataProvider(): array
    {
        return [
            'all fields filled' => [
                'id' => 123,
                'postcode' => '12345',
                'street' => 'Test Street',
                'city' => 'Test City',
                'addressaddition' => 'Additional Information',
                'postofficebox' => 'PO123',
                'company' => 'Test Company',
                'state' => 'NRW',
                'country' => 'DE',
                'addresstag' => 'business',
                'validFrom' => '2026-01-01',
                'validTo' => '2026-02-01',
                'expectedIdentifier' => '123',
                'expectedPostcode' => '12345',
                'expectedStreet' => 'Test Street',
                'expectedCity' => 'Test City',
                'expectedCountryUniquename' => 'germany',
                'expectedValidFrom' => new \DateTimeImmutable('2026-01-01'),
                'expectedValidTo' => new \DateTimeImmutable('2026-02-01'),
            ],
            'minimal fields filled' => [
                'id' => 456,
                'postcode' => null,
                'street' => null,
                'city' => null,
                'addressaddition' => null,
                'postofficebox' => null,
                'company' => null,
                'state' => null,
                'country' => null,
                'addresstag' => null,
                'validFrom' => '1900-01-01',
                'validTo' => '2100-12-31',
                'expectedIdentifier' => '456',
                'expectedPostcode' => '',
                'expectedStreet' => '',
                'expectedCity' => '',
                'expectedCountryUniquename' => null,
                'expectedValidFrom' => null,
                'expectedValidTo' => null,
            ],
        ];
    }

    #[Test]
    #[DataProvider('createFromPostaddressMetaDataProvider')]
    public function createFromPostaddressMeta(
        int $id,
        ?string $postcode,
        ?string $street,
        ?string $city,
        ?string $addressaddition,
        ?string $postofficebox,
        ?string $company,
        ?string $state,
        ?string $country,
        ?string $addresstag,
        string $validFrom,
        string $validTo,
        string $expectedIdentifier,
        string $expectedPostcode,
        string $expectedStreet,
        string $expectedCity,
        ?string $expectedCountryUniquename,
        ?\DateTimeInterface $expectedValidFrom,
        ?\DateTimeInterface $expectedValidTo,
    ): void {
        $germany = (new CountryValue())->setUniquename('germany');
        $mockCountryRepository = self::createMock(CountryRepository::class);
        $mockCountryRepository->method('findByUniquenameForLanguage')->willReturnMap([['DE', 'de', $germany]]);
        $mockKeyvalueConverter = self::createMock(KeyvalueConverter::class);
        $mockKeyvalueConverter->method('convertAddresstagIdToUniquename')->willReturnMap([[123, 'de', 'business']]);

        $subject = new PostAddressFactory($mockCountryRepository, $mockKeyvalueConverter, new DateTimeConverter());
        $input = new \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta(
            new \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1($postcode, $addressaddition, $postofficebox, $country, $addresstag, $company, null, $state, $street, $city)
        );
        $input->setAddressId($id);
        $input->setValidFrom($validFrom);
        $input->setValidTo($validTo);
        $postAddress = $subject->createFromPostaddressMeta($input, 'de');
        $this->assertSame($expectedIdentifier, $postAddress->getIdentifier());
        $this->assertSame($id, $postAddress->id);
        $this->assertSame($expectedPostcode, $postAddress->postcode);
        $this->assertSame($expectedStreet, $postAddress->street);
        $this->assertSame($expectedCity, $postAddress->city);
        $this->assertSame($addressaddition, $postAddress->addressaddition);
        $this->assertSame($postofficebox, $postAddress->postofficebox);
        $this->assertSame($company, $postAddress->company);
        $this->assertSame($state, $postAddress->state);
        $this->assertSame($expectedCountryUniquename, $postAddress->country?->getUniquename());
        $this->assertSame($addresstag, $postAddress->domain);
        $this->assertEquals($expectedValidFrom, $postAddress->validFrom);
        $this->assertEquals($expectedValidFrom, $postAddress->validFrom());
        $this->assertEquals($expectedValidTo, $postAddress->validTo);
        $this->assertEquals($expectedValidTo, $postAddress->validTo());
    }
}
