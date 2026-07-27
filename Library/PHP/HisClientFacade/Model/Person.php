<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

use FGTCLB\HisClient\KeyvalueService\Struct\CountryValue;
use FGTCLB\HisClient\MimedataService\Struct\Mimedata;
use FGTCLB\HisClient\PersonService\Struct\AcademicDegree;
use FGTCLB\HisClient\PersonService\Struct\Gender;
use FGTCLB\HisClient\PersonService\Struct\PersoninfoDto;
use FGTCLB\HisClient\PersonService\Struct\Title;

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
        /** @var \Closure(): ContactDetails[] */
        private \Closure $fetchContactDetailsClosure,
        /** @var \Closure(int): Mimedata[] */
        private \Closure $fetchPicturesClosure,
        /** @var \Closure(): PersonFunction[] */
        private \Closure $fetchFunctionsClosure,
    ) {}

    /**
     * @return ContactDetails[]
     */
    public function getContactDetails(): array
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

    /**
     * @return PersonFunction[]
     */
    public function getFunctions(): array
    {
        // TODO cache result? Use proper lazy object?
        return ($this->fetchFunctionsClosure)();
    }
}
