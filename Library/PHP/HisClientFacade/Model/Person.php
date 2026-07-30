<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

use FGTCLB\HisClient\AccountService\Struct\CompleteAccount;
use FGTCLB\HisClient\KeyvalueService\Struct\CountryValue;
use FGTCLB\HisClient\MimedataService\Struct\Mimedata;
use FGTCLB\HisClient\PersonService\Struct\AcademicDegree;
use FGTCLB\HisClient\PersonService\Struct\Gender;
use FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto;
use FGTCLB\HisClient\PersonService\Struct\PersoninfoDto;
use FGTCLB\HisClient\PersonService\Struct\Title;
use FGTCLB\HisClientFacade\Collection\ContactDetailsCollection;
use FGTCLB\HisClientFacade\Collection\PersonFunctionCollection;

final readonly class Person
{
    public function __construct(
        public int $id,
        public ?string $firstname,
        public ?string $surname,
        public ?Gender $gender,
        public ?string $dateofbirth,
        public ?string $allfirstnames,
        public ?string $birthname,
        public ?string $artistname,
        public ?string $nameprefix,
        public ?string $namesuffix,
        public ?string $academicdegreesuffix,
        public ?AcademicDegree $academicdegree,
        public ?Title $title,
        public ?string $birthcity,
        public ?CountryValue $country,
        public ?PersoninfoDto $personInfo,
        public ?string $createdAt,
        public ?string $updatedAt,
        /** @var \Closure(): ContactDetailsCollection */
        private \Closure $fetchContactDetailsClosure,
        /** @var \Closure(int): Mimedata[] */
        private \Closure $fetchPicturesClosure,
        /** @var \Closure(): PersonFunctionCollection */
        private \Closure $fetchFunctionsClosure,
        /** @var \Closure(): CompleteAccount[] */
        private \Closure $fetchAccountsClosure,
        /** @var \Closure(): PersonAttributeDto[] */
        private \Closure $fetchAttributesClosure,
    ) {}

    public function getContactDetails(): ContactDetailsCollection
    {
        // TODO cache result? Use proper lazy object?
        return ($this->fetchContactDetailsClosure)();
    }

    /**
     * @return Mimedata[]
     */
    public function getPictures(int $hisKey): array
    {
        // TODO cache result? Use proper lazy object?
        return ($this->fetchPicturesClosure)($hisKey);
    }

    public function getFunctions(): PersonFunctionCollection
    {
        // TODO cache result? Use proper lazy object?
        return ($this->fetchFunctionsClosure)();
    }

    /**
     * @return CompleteAccount[]
     */
    public function getAccounts(): array
    {
        // TODO cache result? Use proper lazy object?
        return ($this->fetchAccountsClosure)();
    }

    /**
     * @return PersonAttributeDto[]
     */
    public function getAttributes(): array
    {
        // TODO cache result? Use proper lazy object?
        return ($this->fetchAttributesClosure)();
    }
}
