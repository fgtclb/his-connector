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
            /** @var ReadOrgUnitResponse|false */
            $orgUnitResponse = $this->orgUnitService->readOrgUnit(new ReadOrgUnit($lid));
            if ($orgUnitResponse === false) {
                /** @var \SoapFault */
                $soapException = $this->orgUnitService->getLastErrorForMethod(OrgUnitService::class . '::readOrgUnit');
                throw new Exception(sprintf(
                    'Unable to fetch org unit "%d": %s',
                    $lid,
                    $soapException->getMessage(),
                ), 1785249486, $soapException);
            }
            $this->cache->set($cacheIdentifier, $orgUnitResponse->getOrgunit());
        }
        return $this->cache->get($cacheIdentifier);
    }
}
