<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\PersonService\Service\Service as PersonService;
use FGTCLB\HisClient\PersonService\Struct\ReadPersonaldata;
use FGTCLB\HisClient\PersonService\Struct\ReadPersonaldataResponse;
use FGTCLB\HisClientFacade\Exception\Exception;
use FGTCLB\HisClientFacade\Factory\PersonalDataFactory;
use FGTCLB\HisClientFacade\Model\PersonalData;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;

/**
 * @implements RepositoryInterface<PersonalData>
 */
readonly class PersonalDataRepository implements RepositoryInterface
{
    public function __construct(
        private PersonService $personService,
        private PersonalDataFactory $personalDataFactory,
        #[Autowire(service: 'cache.runtime')]
        private readonly FrontendInterface $cache,
    ) {}

    public function findByPersonId(int $personId): PersonalData
    {
        $cacheIdentifier = str_replace('\\', '_', self::class) . '_' . $personId;
        if (!$this->cache->has($cacheIdentifier)) {
            try {
                /** @var ReadPersonaldataResponse */
                $response = $this->personService->readPersonaldata(new ReadPersonaldata($personId));
            } catch (\SoapFault $e) {
                throw new Exception(sprintf(
                    'Unable to fetch personal data for person "%d": %s',
                    $personId,
                    $e->getMessage(),
                ), 1786714318, $e);
            }
            $personalData = $response->getPersonaldata()
                ? $this->personalDataFactory->create($response->getPersonaldata())
                : $this->personalDataFactory->createEmpty($personId);
            $this->cache->set($cacheIdentifier, $personalData);
        }
        return $this->cache->get($cacheIdentifier);
    }

    public function getObjectType(): string
    {
        return PersonalData::class;
    }
}
