<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\PersonService\Service\Service as PersonService;
use FGTCLB\HisClient\PersonService\Struct\FindPerson60;
use FGTCLB\HisClient\PersonService\Struct\FindPerson60Response;
use FGTCLB\HisClient\PersonService\Struct\ReadPerson;
use FGTCLB\HisClient\PersonService\Struct\ReadPersonResponse;
use FGTCLB\HisClientFacade\Exception\Exception;
use FGTCLB\HisClientFacade\Factory\PersonFactory;
use FGTCLB\HisClientFacade\Model\Person;

readonly class PersonRepository
{
    public function __construct(
        private PersonService $personService,
        private PersonFactory $personFactory,
    ) {}

    /**
     * @param int[] $roleIds
     * @return Person[]
     */
    public function findByRolesForLanguage(array $roleIds, string $language): array
    {
        try {
            /** @var FindPerson60Response */
            $findResponse = $this->personService->findPerson60(new FindPerson60(roleId: implode(',', array_map(fn(int $roleId) => '=' . $roleId, $roleIds))));
        } catch (\SoapFault $e) {
            throw new Exception(sprintf(
                'Unable to fetch ids of persons with roles "%s" for language "%s": %s',
                implode(', ', $roleIds),
                $language,
                $e->getMessage(),
            ), 1784884055, $e);
        }

        $persons = [];
        foreach ($findResponse->getPersonIds()->getId() ?? [] as $personId) {
            try {
                /** @var ReadPersonResponse */
                $personResponse = $this->personService->readPerson(new ReadPerson($personId));
            } catch (\SoapFault $e) {
                throw new Exception(sprintf(
                    'Unable to fetch person "%d" for language "%s": %s',
                    $personId,
                    $language,
                    $e->getMessage(),
                ), 1784884056, $e);
            }
            if ($personResponse->getPerson() !== null) {
                $persons[] = $this->personFactory->create($personResponse->getPerson(), $language);
            }
        }
        return $persons;
    }
}
