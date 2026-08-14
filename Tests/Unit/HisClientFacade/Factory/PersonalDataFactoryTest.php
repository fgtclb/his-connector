<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\HisClientFacade\Factory;

use FGTCLB\HisClient\PersonService\Struct\Personaldata;
use FGTCLB\HisClientFacade\Factory\PersonalDataFactory;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class PersonalDataFactoryTest extends UnitTestCase
{
    /**
     * @return mixed[]
     */
    public static function createPersonalDataDataProvider(): array
    {
        return [
            'full' => [
                'workplaceDescription' => 'workplace',
                'academicCareer' => 'academic',
                'professionalLife' => 'professional',
                'researchProjects' => 'research',
                'practiceCooperation' => 'practice',
                'publications' => 'publication',
                'administrationFunctions' => 'administration',
            ],
            'null' => [
                'workplaceDescription' => null,
                'academicCareer' => null,
                'professionalLife' => null,
                'researchProjects' => null,
                'practiceCooperation' => null,
                'publications' => null,
                'administrationFunctions' => null,
            ],
        ];
    }

    #[Test]
    #[DataProvider('createPersonalDataDataProvider')]
    public function createPersonalData(?string $workplaceDescription, ?string $academicCareer, ?string $professionalLife, ?string $researchProjects, ?string $practiceCooperation, ?string $publications, ?string $administrationFunctions): void
    {
        $subject = new PersonalDataFactory();
        $result = $subject->create(
            new Personaldata(
                123,
                $workplaceDescription,
                $academicCareer,
                $professionalLife,
                $researchProjects,
                $practiceCooperation,
                $publications,
                $administrationFunctions,
            )
        );
        $this->assertSame($workplaceDescription, $result->workplaceDescription);
        $this->assertSame($academicCareer, $result->academicCareer);
        $this->assertSame($professionalLife, $result->professionalLife);
        $this->assertSame($researchProjects, $result->researchProjects);
        $this->assertSame($practiceCooperation, $result->practiceCooperation);
        $this->assertSame($publications, $result->publications);
        $this->assertSame($administrationFunctions, $result->administrationFunctions);
    }

    #[Test]
    public function createEmpty(): void
    {
        $subject = new PersonalDataFactory();
        $result = $subject->createEmpty();
        $this->assertNull($result->workplaceDescription);
        $this->assertNull($result->academicCareer);
        $this->assertNull($result->professionalLife);
        $this->assertNull($result->researchProjects);
        $this->assertNull($result->practiceCooperation);
        $this->assertNull($result->publications);
        $this->assertNull($result->administrationFunctions);
    }
}
