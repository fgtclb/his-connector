<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\PersonService\Service\Service as PersonService;
use FGTCLB\HisClient\PersonService\Struct\FindPerson60;
use FGTCLB\HisClient\PersonService\Struct\FindPerson60Response;
use FGTCLB\HisClient\PersonService\Struct\ReadPerson;
use FGTCLB\HisClient\PersonService\Struct\ReadPersonResponse;
use FGTCLB\HisClientFacade\Collection\PersonCollection;
use FGTCLB\HisClientFacade\Exception\Exception;
use FGTCLB\HisClientFacade\Factory\PersonFactory;
use FGTCLB\HisClientFacade\Model\Person;

/**
 * @implements RepositoryInterface<Person>
 */
readonly class PersonRepository implements RepositoryInterface
{
    public function __construct(
        private PersonService $personService,
        private PersonFactory $personFactory,
    ) {}

    /**
     * @param int[] $roleIds
     */
    public function findByRolesForLanguage(array $roleIds, string $language): PersonCollection
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
            $persons[] = function () use ($personId, $language) {
                $person = $this->findByIdForLanguage($personId, $language);
                // If an item in the collection is null, this is a fatal error
                if ($person === null) {
                    throw new Exception(sprintf(
                        'Unable to fetch person "%d" for language "%s"',
                        $personId,
                        $language
                    ), 1784884057);
                }
                return $person;
            };
        }
        return PersonCollection::fromArray($persons);
    }

    public function findByIdForLanguage(int $id, string $language): ?Person
    {
        try {
            /** @var ReadPersonResponse */
            $personResponse = $this->personService->readPerson(new ReadPerson($id));
        } catch (\SoapFault $e) {
            throw new Exception(sprintf(
                'Unable to fetch person "%d" for language "%s": %s',
                $id,
                $language,
                $e->getMessage(),
            ), 1784884056, $e);
        }
        return $personResponse->getPerson() !== null
            ? $this->personFactory->create($personResponse->getPerson(), $language)
            : null;
    }

    public function getObjectType(): string
    {
        return Person::class;
    }
}
