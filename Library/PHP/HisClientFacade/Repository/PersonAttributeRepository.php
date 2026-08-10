<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\PersonService\Service\Service as PersonService;
use FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto;
use FGTCLB\HisClient\PersonService\Struct\ReadAllPersonAttributesFromPerson;
use FGTCLB\HisClient\PersonService\Struct\ReadAllPersonAttributesFromPersonResponse;
use FGTCLB\HisClientFacade\Exception\Exception;

readonly class PersonAttributeRepository
{
    public function __construct(
        private PersonService $personService,
    ) {}

    /**
     * @return PersonAttributeDto[]
     */
    public function findByPersonId(int $personId): array
    {
        try {
            /** @var ReadAllPersonAttributesFromPersonResponse */
            $response = $this->personService->readAllPersonAttributesFromPerson(new ReadAllPersonAttributesFromPerson($personId));
        } catch (\SoapFault $e) {
            throw new Exception(sprintf(
                'Unable to fetch attributes of person "%d": %s',
                $personId,
                $e->getMessage(),
            ), 1785421558, $e);
        }
        return $response->getPersonAttributeDtos()->getPersonAttributeDto() ?? [];
    }
}
