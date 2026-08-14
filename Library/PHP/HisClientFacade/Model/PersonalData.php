<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class PersonalData
{
    public function __construct(
        public ?string $workplaceDescription,
        public ?string $academicCareer,
        public ?string $professionalLife,
        public ?string $researchProjects,
        public ?string $practiceCooperation,
        public ?string $publications,
        public ?string $administrationFunctions,
    ) {}
}
