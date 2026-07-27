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
        /** @var FindPerson60Response|false */
        $findResponse = $this->personService->findPerson60(new FindPerson60(roleId: implode(',', array_map(fn(int $roleId) => '=' . $roleId, $roleIds))));
        if ($findResponse === false) {
            /** @var \SoapFault */
            $soapException = $this->personService->getLastErrorForMethod(PersonService::class . '::findPerson60');
            throw new Exception(sprintf(
                'Unable to fetch ids of persons with roles "%s" for language "%s": %s',
                implode(', ', $roleIds),
                $language,
                $soapException->getMessage(),
            ), 1784884055, $soapException);
        }

        $persons = [];
        foreach ($findResponse->getPersonIds()->getId() ?? [] as $personId) {
            /** @var ReadPersonResponse|false */
            $personResponse = $this->personService->readPerson(new ReadPerson($personId));
            if ($personResponse === false) {
                /** @var \SoapFault */
                $soapException = $this->personService->getLastErrorForMethod(PersonService::class . '::readPerson');
                throw new Exception(sprintf(
                    'Unable to fetch person "%d" for language "%s": %s',
                    $personId,
                    $language,
                    $soapException->getMessage(),
                ), 1784884056, $soapException);
            }
            if ($personResponse->getPerson() !== null) {
                $persons[] = $this->personFactory->create($personResponse->getPerson(), $language);
            }
        }
        return $persons;
    }
}
