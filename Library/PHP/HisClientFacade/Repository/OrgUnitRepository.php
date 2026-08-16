<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\OrgUnitService\Service\Service as OrgUnitService;
use FGTCLB\HisClient\OrgUnitService\Struct\GetOrgunitLid;
use FGTCLB\HisClient\OrgUnitService\Struct\GetOrgunitLidResponse;
use FGTCLB\HisClient\OrgUnitService\Struct\GetOrgunitWithChildren;
use FGTCLB\HisClient\OrgUnitService\Struct\GetOrgunitWithChildrenResponse;
use FGTCLB\HisClientFacade\Exception\Exception;
use FGTCLB\HisClientFacade\Factory\OrgUnitFactory;
use FGTCLB\HisClientFacade\Model\OrgUnit;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;

/**
 * Fetches organization units from the SOAP API. Unfortunately, sometimes
 * organizations are referenced by their id and sometimes by their longliving id,
 * which is why both variants need to be implemented. To prevent unnecessary roundtrips
 * to the API, already available data are used to pre-fill the runtime caches whenever
 * possible.
 *
 * @implements RepositoryInterface<OrgUnit>
 */
readonly class OrgUnitRepository implements RepositoryInterface
{
    public function __construct(
        private OrgUnitService $orgUnitService,
        private OrgUnitFactory $orgUnitFactory,
        #[Autowire(service: 'cache.runtime')]
        private readonly FrontendInterface $cache,
    ) {}

    public function findByLonglivingId(int $lid): ?OrgUnit
    {
        $cacheIdentifier = $this->generateCacheIdentifierForObject($lid);
        if (!$this->cache->has($cacheIdentifier)) {
            try {
                /** @var GetOrgunitWithChildrenResponse */
                $orgUnitResponse = $this->orgUnitService->getOrgunitWithChildren(new GetOrgunitWithChildren($lid));
            } catch (\SoapFault $e) {
                throw new Exception(sprintf(
                    'Unable to fetch org unit "%d": %s',
                    $lid,
                    $e->getMessage(),
                ), 1785249486, $e);
            }
            if ($orgUnitResponse->getOrgunit() === null) {
                $this->cache->set($cacheIdentifier, null);
                return null;
            }
            $parent = $orgUnitResponse->getOrgunit()->getParentId() !== null
                ? $this->findById($orgUnitResponse->getOrgunit()->getParentId())
                : null;
            $orgUnit = $this->orgUnitFactory->create($orgUnitResponse->getOrgunit(), $parent);
            $this->cache->set($cacheIdentifier, $orgUnit);

            // We already know id=>lid connection, so it can be added to the cache for future
            // requests
            if ($orgUnitResponse->getOrgunit()->getId() !== null && $orgUnitResponse->getOrgunit()->getLid()) {
                $this->cache->set(
                    $this->generateCacheIdentifierForId2Lid($orgUnitResponse->getOrgunit()->getId()),
                    $orgUnitResponse->getOrgunit()->getLid()
                );
            }

            // Fetch and cache as much data as possible (parent + children) to prevent unnecessary
            // roundtrips for future records
            foreach ($orgUnitResponse->getOrgunit()->getChildren()?->getOrgunit() ?? [] as $child) {
                if ($child->getLid() === null) {
                    continue;
                }
                $this->cache->set(
                    $this->generateCacheIdentifierForObject($child->getLid()),
                    $this->orgUnitFactory->create($child, $orgUnit),
                );
                // We already know id=>lid connection, so it can be added to the cache for future
                // requests
                if ($child->getId() !== null) {
                    $this->cache->set(
                        $this->generateCacheIdentifierForId2Lid($child->getId()),
                        $child->getLid(),
                    );
                }
            }
        }
        return $this->cache->get($cacheIdentifier);
    }

    public function findById(int $id): ?OrgUnit
    {
        // Convert id to longliving id first
        $cacheIdentifier = $this->generateCacheIdentifierForId2Lid($id);
        if (!$this->cache->has($cacheIdentifier)) {
            try {
                /** @var GetOrgunitLidResponse */
                $lidResponse = $this->orgUnitService->getOrgunitLid(new GetOrgunitLid($id));
            } catch (\SoapFault $e) {
                throw new Exception(sprintf(
                    'Unable to fetch org unit lid for "%d": %s',
                    $id,
                    $e->getMessage(),
                ), 1786549983, $e);
            }
            $this->cache->set($cacheIdentifier, $lidResponse->getLid());
        }
        $lid = $this->cache->get($cacheIdentifier);
        // Fetch orgUnit by longliving id
        return $this->findByLonglivingId($lid);
    }

    private function generateCacheIdentifierForObject(int $lid): string
    {
        return str_replace('\\', '_', self::class) . '_' . $lid;
    }

    private function generateCacheIdentifierForId2Lid(int $id): string
    {
        return str_replace('\\', '_', self::class) . '_id2lid_' . $id;
    }

    public function getObjectType(): string
    {
        return OrgUnit::class;
    }
}
