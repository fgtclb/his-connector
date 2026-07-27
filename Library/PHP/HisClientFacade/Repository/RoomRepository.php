<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\FacilityService\Service\Service as FacilityService;
use FGTCLB\HisClient\FacilityService\Struct\ReadRoom202112;
use FGTCLB\HisClient\FacilityService\Struct\ReadRoom202112Response;
use FGTCLB\HisClient\FacilityService\Struct\RoomLarge202112;
use FGTCLB\HisClientFacade\Exception\Exception;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;

readonly class RoomRepository
{
    public function __construct(
        private FacilityService $facilityService,
        #[Autowire(service: 'cache.runtime')]
        private readonly FrontendInterface $cache,
    ) {}

    public function findById(int $id): ?RoomLarge202112
    {
        $cacheIdentifier = str_replace('\\', '_', self::class) . '_' . $id;
        if (!$this->cache->has($cacheIdentifier)) {
            /** @var ReadRoom202112Response|false */
            $roomResponse = $this->facilityService->readRoom202112(new ReadRoom202112($id));
            if ($roomResponse === false) {
                /** @var \SoapFault */
                $soapException = $this->facilityService->getLastErrorForMethod(FacilityService::class . '::readRoom202112');
                throw new Exception(sprintf(
                    'Unable to fetch org unit "%d": %s',
                    $id,
                    $soapException->getMessage(),
                ), 1785252647, $soapException);
            }
            $this->cache->set($cacheIdentifier, $roomResponse->getRoom());
        }
        return $this->cache->get($cacheIdentifier);
    }
}
