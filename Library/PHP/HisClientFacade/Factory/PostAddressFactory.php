<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Factory;

use FGTCLB\HisClientFacade\Model\PostAddress;
use FGTCLB\HisClientFacade\Repository\CountryRepository;
use FGTCLB\HisClientFacade\Utility\KeyvalueConverter;

readonly class PostAddressFactory
{
    public function __construct(
        private CountryRepository $countryRepository,
        private KeyvalueConverter $keyvalueConverter,
    ) {}

    public function createFromPersonOrgunitPostAddress(
        \FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress $postAddress,
        string $language,
    ): PostAddress {
        return new PostAddress(
            postcode: $postAddress->getPostcode(),
            street: $postAddress->getStreet(),
            city: $postAddress->getCity(),
            addressaddition: $postAddress->getAddressaddition(),
            postofficebox: $postAddress->getPostofficebox(),
            company: $postAddress->getCompany(),
            state: $postAddress->getState(),
            country: $postAddress->getCountryId() ? $this->countryRepository->findByIdForLanguage($postAddress->getCountryId(), $language) : null,
            domain: $postAddress->getAddresstagId() ? $this->keyvalueConverter->convertAddresstagIdToUniquename($postAddress->getAddresstagId(), $language) : null,
        );
    }

    public function createFromPostAddressWithNillablePostcode(
        \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode $postAddress,
        string $language,
    ): PostAddress {
        return new PostAddress(
            postcode: $postAddress->getPostcode() ?? '',
            street: $postAddress->getStreet(),
            city: $postAddress->getCity(),
            addressaddition: $postAddress->getAddressaddition(),
            postofficebox: $postAddress->getPostofficebox(),
            company: $postAddress->getCompany(),
            state: $postAddress->getState(),
            country: $postAddress->getCountryId() ? $this->countryRepository->findByIdForLanguage($postAddress->getCountryId(), $language) : null,
            // Note that this field isn't filled in our real use case by the SOAP endpoint
            domain: $postAddress->getAddresstagId() ? $this->keyvalueConverter->convertAddresstagIdToUniquename($postAddress->getAddresstagId(), $language) : null,
        );
    }

    public function createFromStreetAndCity(string $street, string $city): PostAddress
    {
        return new PostAddress(
            postcode: '',
            street: $street,
            city: $city,
            addressaddition: null,
            postofficebox: null,
            company: null,
            state: null,
            country: null,
            domain: null,
        );
    }

    public function createFromPostaddress_1(
        \FGTCLB\HisClient\PersonAddressService\Struct\Postaddress_1 $postAddress,
        string $language,
    ): PostAddress {
        return new PostAddress(
            postcode: $postAddress->getPostcode() ?? '',
            street: $postAddress->getStreet() ?? '',
            city: $postAddress->getCity() ?? '',
            addressaddition: $postAddress->getAddressaddition(),
            postofficebox: $postAddress->getPostofficebox(),
            company: $postAddress->getCompany(),
            state: $postAddress->getState(),
            country: $postAddress->getCountry() ? $this->countryRepository->findByUniquenameForLanguage($postAddress->getCountry(), $language) : null,
            domain: $postAddress->getAddresstag(),
        );
    }
}
