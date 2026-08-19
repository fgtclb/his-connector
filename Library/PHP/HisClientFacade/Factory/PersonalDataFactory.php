<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Factory;

use FGTCLB\HisClientFacade\Model\PersonalData;

readonly class PersonalDataFactory
{
    public function create(\FGTCLB\HisClient\PersonService\Struct\Personaldata $personalData): PersonalData
    {
        return new PersonalData(
            personId: $personalData->getPersonId(),
            workplaceDescription: $personalData->getWorkplaceDescription(),
            academicCareer: $personalData->getAcademicCareer(),
            professionalLife: $personalData->getProfessionalLife(),
            researchProjects: $personalData->getResearchProjects(),
            practiceCooperation: $personalData->getPracticeCooperation(),
            publications: $personalData->getPublications(),
            administrationFunctions: $personalData->getAdministrationFunctions(),
        );
    }

    public function createEmpty(int $personId): PersonalData
    {
        return new PersonalData(
            personId: $personId,
            workplaceDescription: null,
            academicCareer: null,
            professionalLife: null,
            researchProjects: null,
            practiceCooperation: null,
            publications: null,
            administrationFunctions: null,
        );
    }
}
