<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Factory;

use FGTCLB\HisClient\PersonService\Struct\PersonExisting;
use FGTCLB\HisClientFacade\Model\Person;
use FGTCLB\HisClientFacade\Repository\AcademicDegreeRepository;
use FGTCLB\HisClientFacade\Repository\AccountRepository;
use FGTCLB\HisClientFacade\Repository\ContactDetailsRepository;
use FGTCLB\HisClientFacade\Repository\CountryRepository;
use FGTCLB\HisClientFacade\Repository\GenderRepository;
use FGTCLB\HisClientFacade\Repository\PersonAttributeRepository;
use FGTCLB\HisClientFacade\Repository\PersonFunctionRepository;
use FGTCLB\HisClientFacade\Repository\PersonPictureRepository;
use FGTCLB\HisClientFacade\Repository\TitleRepository;

readonly class PersonFactory
{
    public function __construct(
        private GenderRepository $genderRepository,
        private AcademicDegreeRepository $academicDegreeRepository,
        private TitleRepository $titleRepository,
        private CountryRepository $countryRepository,
        private PersonPictureRepository $personPictureRepository,
        private ContactDetailsRepository $contactDetailsRepository,
        private PersonFunctionRepository $personFunctionRepository,
        private AccountRepository $accountRepository,
        private PersonAttributeRepository $personAttributeRepository,
    ) {}

    public function create(PersonExisting $person, string $language): Person
    {
        return new Person(
            id: $person->getId(),
            firstname: $person->getFirstname(),
            surname: $person->getSurname(),
            gender: $person->getGenderId() ? $this->genderRepository->findByIdForLanguage($person->getGenderId(), $language) : null,
            dateofbirth: $person->getDateofbirth(),
            allfirstnames: $person->getAllfirstnames(),
            birthname: $person->getBirthname(),
            artistname: $person->getArtistname(),
            nameprefix: $person->getNameprefix(),
            namesuffix: $person->getNamesuffix(),
            academicdegreesuffix: $person->getAcademicdegreesuffix(),
            academicdegree: $person->getAcademicdegreeId() ? $this->academicDegreeRepository->findByIdForLanguage($person->getAcademicdegreeId(), $language) : null,
            title: $person->getTitleId() ? $this->titleRepository->findByIdForLanguage($person->getTitleId(), $language) : null,
            birthcity: $person->getBirthcity(),
            country: $person->getCountryId() ? $this->countryRepository->findByIdForLanguage($person->getCountryId(), $language) : null,
            personInfo: $person->getPersonInfo(),
            createdAt: $person->getCreatedAt(),
            updatedAt: $person->getUpdatedAt(),
            fetchContactDetailsClosure: fn() => $this->contactDetailsRepository->findByPersonIdForLanguage($person->getId(), $language),
            fetchPicturesClosure: fn(int $hisKey) => $this->personPictureRepository->findByPersonIdAndHisKey($person->getId(), $hisKey),
            fetchFunctionsClosure: fn() => $this->personFunctionRepository->findByPersonIdForLanguage($person->getId(), $language),
            fetchAccountsClosure: fn() => $this->accountRepository->findByPersonId($person->getId()),
            fetchAttributesClosure: fn() => $this->personAttributeRepository->findByPersonId($person->getId()),
        );
    }
}
