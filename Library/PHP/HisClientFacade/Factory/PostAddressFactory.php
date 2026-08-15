<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Factory;

use FGTCLB\HisClientFacade\Exception\PostAddressEntityException;
use FGTCLB\HisClientFacade\Model\PostAddress;
use FGTCLB\HisClientFacade\Repository\CountryRepository;
use FGTCLB\HisClientFacade\Utility\DateTimeConverter;
use FGTCLB\HisClientFacade\Utility\KeyvalueConverter;

readonly class PostAddressFactory
{
    public function __construct(
        private CountryRepository $countryRepository,
        private KeyvalueConverter $keyvalueConverter,
        private DateTimeConverter $dateTimeConverter,
    ) {}

    public function createFromPersonOrgunitPostAddress(
        \FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress $postAddress,
        string $language,
    ): PostAddress {
        if ($postAddress->getId() === null) {
            throw new PostAddressEntityException(sprintf(
                'Post address of type "%s" does not have an id: %s %s %s',
                get_class($postAddress),
                $postAddress->getStreet(),
                $postAddress->getPostcode(),
                $postAddress->getCity(),
            ), 1786792221);
        }
        $country = $postAddress->getCountryId() ? $this->countryRepository->findByIdForLanguage($postAddress->getCountryId(), $language) : null;
        $domain = $postAddress->getAddresstagId() ? $this->keyvalueConverter->convertAddresstagIdToUniquename($postAddress->getAddresstagId(), $language) : null;
        return new PostAddress(
            id: $postAddress->getId(),
            postcode: $postAddress->getPostcode(),
            street: $postAddress->getStreet(),
            city: $postAddress->getCity(),
            addressaddition: $postAddress->getAddressaddition(),
            postofficebox: $postAddress->getPostofficebox(),
            company: $postAddress->getCompany(),
            state: $postAddress->getState(),
            country: $country,
            domain: $domain,
            validFrom: $this->dateTimeConverter->convert($postAddress->getValidFrom()),
            validTo: $this->dateTimeConverter->convert($postAddress->getValidTo()),
        );
    }

    public function createFromPostAddressWithNillablePostcode(
        \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode $postAddress,
        string $language,
    ): PostAddress {
        if ($postAddress->getId() === null) {
            throw new PostAddressEntityException(sprintf(
                'Post address of type "%s" does not have an id: %s %s %s',
                get_class($postAddress),
                $postAddress->getStreet(),
                $postAddress->getPostcode() ?? '',
                $postAddress->getCity(),
            ), 1786792220);
        }
        $country = $postAddress->getCountryId() ? $this->countryRepository->findByIdForLanguage($postAddress->getCountryId(), $language) : null;
        // Note that this field currently doesn't seem to be filled by the SOAP endpoint
        $domain = $postAddress->getAddresstagId() ? $this->keyvalueConverter->convertAddresstagIdToUniquename($postAddress->getAddresstagId(), $language) : null;
        return new PostAddress(
            id: $postAddress->getId(),
            postcode: $postAddress->getPostcode() ?? '',
            street: $postAddress->getStreet(),
            city: $postAddress->getCity(),
            addressaddition: $postAddress->getAddressaddition(),
            postofficebox: $postAddress->getPostofficebox(),
            company: $postAddress->getCompany(),
            state: $postAddress->getState(),
            country: $country,
            domain: $domain,
            validFrom: $this->dateTimeConverter->convert($postAddress->getValidFrom()),
            validTo: $this->dateTimeConverter->convert($postAddress->getValidTo()),
        );
    }

    public function createFromPostaddressMeta(
        \FGTCLB\HisClient\PersonAddressService\Struct\PostaddressMeta $postAddress,
        string $language,
    ): PostAddress {
        return new PostAddress(
            id: $postAddress->getAddressId(),
            postcode: $postAddress->getPostaddress()->getPostcode() ?? '',
            street: $postAddress->getPostaddress()->getStreet() ?? '',
            city: $postAddress->getPostaddress()->getCity() ?? '',
            addressaddition: $postAddress->getPostaddress()->getAddressaddition(),
            postofficebox: $postAddress->getPostaddress()->getPostofficebox(),
            company: $postAddress->getPostaddress()->getCompany(),
            state: $postAddress->getPostaddress()->getState(),
            country: $postAddress->getPostaddress()->getCountry() ? $this->countryRepository->findByUniquenameForLanguage($postAddress->getPostaddress()->getCountry(), $language) : null,
            domain: $postAddress->getPostaddress()->getAddresstag(),
            validFrom: $this->dateTimeConverter->convert($postAddress->getValidFrom()),
            validTo: $this->dateTimeConverter->convert($postAddress->getValidTo()),
        );
    }
}
