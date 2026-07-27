<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\PersonOrgunitService\Service\Service as PersonOrgunitService;
use FGTCLB\HisClient\PersonOrgunitService\Struct\ReadAffiliation;
use FGTCLB\HisClient\PersonOrgunitService\Struct\ReadAffiliationResponse;
use FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationsForPerson;
use FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationsForPersonResponse;
use FGTCLB\HisClientFacade\Exception\Exception;
use FGTCLB\HisClientFacade\Factory\PersonFunctionFactory;
use FGTCLB\HisClientFacade\Model\PersonFunction;

readonly class PersonFunctionRepository
{
    public function __construct(
        private PersonOrgunitService $personOrgunitService,
        private PersonFunctionFactory $personFunctionFactory,
    ) {}

    /**
     * @return PersonFunction[]
     */
    public function findFunctionsForPerson(int $personId, string $language): array
    {
        /** @var SearchAffiliationsForPersonResponse|false */
        $personAffiliationsResponse = $this->personOrgunitService->searchAffiliationsForPerson(new SearchAffiliationsForPerson($personId));
        if ($personAffiliationsResponse === false) {
            /** @var \SoapFault */
            $soapException = $this->personOrgunitService->getLastErrorForMethod(PersonOrgunitService::class . '::searchAffiliationsForPerson');
            throw new Exception(sprintf(
                'Unable to fetch affiliations of person "%d": %s',
                $personId,
                $soapException->getMessage(),
            ), 1785244137, $soapException);
        }
        $personFunctions = [];
        foreach ($personAffiliationsResponse->getAffiliations()->getAffiliation() ?? [] as $affiliation) {
            /** @var ReadAffiliationResponse|false */
            $affiliationDetailsResponse = $this->personOrgunitService->readAffiliation(new ReadAffiliation($affiliation->getId()));
            if ($affiliationDetailsResponse === false) {
                /** @var \SoapFault */
                $soapException = $this->personOrgunitService->getLastErrorForMethod(PersonOrgunitService::class . '::readAffiliation');
                throw new Exception(sprintf(
                    'Unable to fetch details of affiliation "%d" for person "%d": %s',
                    $affiliation->getId(),
                    $personId,
                    $soapException->getMessage(),
                ), 1785251403, $soapException);
            }
            $personFunctions[] = $this->personFunctionFactory->create($affiliationDetailsResponse->getAffiliation(), $language);
        }
        return $personFunctions;
    }
}
