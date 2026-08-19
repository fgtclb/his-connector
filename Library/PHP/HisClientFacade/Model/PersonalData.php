<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

final readonly class PersonalData implements EntityInterface
{
    public function __construct(
        public int $personId,
        public ?string $workplaceDescription,
        public ?string $academicCareer,
        public ?string $professionalLife,
        public ?string $researchProjects,
        public ?string $practiceCooperation,
        public ?string $publications,
        public ?string $administrationFunctions,
    ) {}

    public function getIdentifier(): string
    {
        return sprintf('personalData-%d', $this->personId);
    }
}
