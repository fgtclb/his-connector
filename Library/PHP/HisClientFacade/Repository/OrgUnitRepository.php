<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\OrgUnitService\Service\Service as OrgUnitService;
use FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit;
use FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnit;
use FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnitResponse;
use FGTCLB\HisClientFacade\Exception\Exception;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;

readonly class OrgUnitRepository
{
    public function __construct(
        private OrgUnitService $orgUnitService,
        #[Autowire(service: 'cache.runtime')]
        private readonly FrontendInterface $cache,
    ) {}

    public function findByLonglivingId(int $lid): ?OrgUnit
    {
        $cacheIdentifier = str_replace('\\', '_', self::class) . '_' . $lid;
        if (!$this->cache->has($cacheIdentifier)) {
            try {
                /** @var ReadOrgUnitResponse */
                $orgUnitResponse = $this->orgUnitService->readOrgUnit(new ReadOrgUnit($lid));
            } catch (\SoapFault $e) {
                throw new Exception(sprintf(
                    'Unable to fetch org unit "%d": %s',
                    $lid,
                    $e->getMessage(),
                ), 1785249486, $e);
            }
            $this->cache->set($cacheIdentifier, $orgUnitResponse->getOrgunit());
        }
        return $this->cache->get($cacheIdentifier);
    }
}
