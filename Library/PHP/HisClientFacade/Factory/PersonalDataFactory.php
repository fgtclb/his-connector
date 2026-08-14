<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Factory;

use FGTCLB\HisClientFacade\Model\PersonalData;

readonly class PersonalDataFactory
{
    public function create(\FGTCLB\HisClient\PersonService\Struct\Personaldata $addresses): PersonalData
    {
        return new PersonalData(
            workplaceDescription: $addresses->getWorkplaceDescription(),
            academicCareer: $addresses->getAcademicCareer(),
            professionalLife: $addresses->getProfessionalLife(),
            researchProjects: $addresses->getResearchProjects(),
            practiceCooperation: $addresses->getPracticeCooperation(),
            publications: $addresses->getPublications(),
            administrationFunctions: $addresses->getAdministrationFunctions(),
        );
    }

    public function createEmpty(): PersonalData
    {
        return new PersonalData(
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
