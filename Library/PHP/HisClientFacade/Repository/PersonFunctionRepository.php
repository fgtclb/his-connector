<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\PersonOrgunitService\Service\Service as PersonOrgunitService;
use FGTCLB\HisClient\PersonOrgunitService\Struct\ReadAffiliation;
use FGTCLB\HisClient\PersonOrgunitService\Struct\ReadAffiliationResponse;
use FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationsForPerson;
use FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationsForPersonResponse;
use FGTCLB\HisClientFacade\Collection\PersonFunctionCollection;
use FGTCLB\HisClientFacade\Exception\Exception;
use FGTCLB\HisClientFacade\Factory\PersonFunctionFactory;

readonly class PersonFunctionRepository
{
    public function __construct(
        private PersonOrgunitService $personOrgunitService,
        private PersonFunctionFactory $personFunctionFactory,
    ) {}

    public function findByPersonIdForLanguage(int $personId, string $language): PersonFunctionCollection
    {
        try {
            /** @var SearchAffiliationsForPersonResponse */
            $personAffiliationsResponse = $this->personOrgunitService->searchAffiliationsForPerson(new SearchAffiliationsForPerson($personId));
        } catch (\SoapFault $e) {
            throw new Exception(sprintf(
                'Unable to fetch affiliations of person "%d": %s',
                $personId,
                $e->getMessage(),
            ), 1785244137, $e);
        }
        $personFunctions = [];
        foreach ($personAffiliationsResponse->getAffiliations()->getAffiliation() ?? [] as $affiliation) {
            try {
                /** @var ReadAffiliationResponse */
                $affiliationDetailsResponse = $this->personOrgunitService->readAffiliation(new ReadAffiliation($affiliation->getId()));
            } catch (\SoapFault $e) {
                throw new Exception(sprintf(
                    'Unable to fetch details of affiliation "%d" for person "%d": %s',
                    $affiliation->getId(),
                    $personId,
                    $e->getMessage(),
                ), 1785251403, $e);
            }
            $personFunctions[] = $this->personFunctionFactory->create($affiliationDetailsResponse->getAffiliation(), $language);
        }
        return PersonFunctionCollection::fromArray($personFunctions);
    }
}
