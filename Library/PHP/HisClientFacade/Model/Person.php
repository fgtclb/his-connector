<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

use FGTCLB\HisClient\KeyvalueService\Struct\CountryValue;
use FGTCLB\HisClient\MimedataService\Struct\Mimedata;
use FGTCLB\HisClient\PersonService\Struct\AcademicDegree;
use FGTCLB\HisClient\PersonService\Struct\Gender;
use FGTCLB\HisClient\PersonService\Struct\PersoninfoDto;
use FGTCLB\HisClient\PersonService\Struct\Title;
use FGTCLB\HisClientFacade\Collection\AccountCollection;
use FGTCLB\HisClientFacade\Collection\ContactDetailsCollection;
use FGTCLB\HisClientFacade\Collection\PersonAttributeCollection;
use FGTCLB\HisClientFacade\Collection\PersonFunctionCollection;

final class Person implements EntityInterface
{
    public function __construct(
        public readonly int $id,
        public readonly ?string $firstname,
        public readonly ?string $surname,
        public readonly ?Gender $gender,
        public readonly ?string $dateofbirth,
        public readonly ?string $allfirstnames,
        public readonly ?string $birthname,
        public readonly ?string $artistname,
        public readonly ?string $nameprefix,
        public readonly ?string $namesuffix,
        public readonly ?string $academicdegreesuffix,
        public readonly ?AcademicDegree $academicdegree,
        public readonly ?Title $title,
        public readonly ?string $birthcity,
        public readonly ?CountryValue $country,
        public readonly ?PersoninfoDto $personInfo,
        public readonly ?string $createdAt,
        public readonly ?string $updatedAt,
        /** @var ContactDetailsCollection|(\Closure(): ContactDetailsCollection) */
        private ContactDetailsCollection|\Closure $contactDetails,
        /** @var PersonalData|(\Closure(): PersonalData) */
        private PersonalData|\Closure $personalData,
        /** @var PersonFunctionCollection|(\Closure(): PersonFunctionCollection) */
        private PersonFunctionCollection|\Closure $functions,
        /** @var AccountCollection|(\Closure(): AccountCollection) */
        private AccountCollection|\Closure $accounts,
        /** @var PersonAttributeCollection|(\Closure(): PersonAttributeCollection) */
        private PersonAttributeCollection|\Closure $attributes,
        /** @var \Closure(int): Mimedata[] */
        private \Closure $fetchPicturesClosure,
    ) {}

    public function getIdentifier(): string
    {
        return (string)$this->id;
    }

    /**
     * @return Mimedata[]
     */
    public function getPictures(int $hisKey): array
    {
        return ($this->fetchPicturesClosure)($hisKey);
    }

    public function __get(string $name): mixed
    {
        // This allows access to lazy properties with the normal dot syntax (".functions" instead of ".getFunctions()")
        // in the mapping configuration, which makes configuration easier to grasp. Also, it makes sure that each lazy
        // relation is only resolved once. Because of that, the class can only be partially readonly.
        // TODO Replace this with lazy objects and/or property hooks once support for PHP < 8.4 is dropped
        switch ($name) {
            case 'contactDetails':
                if ($this->contactDetails instanceof \Closure) {
                    $this->contactDetails = ($this->contactDetails)();
                }
                return $this->contactDetails;

            case 'personalData':
                if ($this->personalData instanceof \Closure) {
                    $this->personalData = ($this->personalData)();
                }
                return $this->personalData;

            case 'functions':
                if ($this->functions instanceof \Closure) {
                    $this->functions = ($this->functions)();
                }
                return $this->functions;

            case 'accounts':
                if ($this->accounts instanceof \Closure) {
                    $this->accounts = ($this->accounts)();
                }
                return $this->accounts;

            case 'attributes':
                if ($this->attributes instanceof \Closure) {
                    $this->attributes = ($this->attributes)();
                }
                return $this->attributes;
        }
        throw new \InvalidArgumentException(sprintf(
            'Invalid property "%s" requested for "%s"',
            $name,
            static::class,
        ), 1786817178);
    }
}
