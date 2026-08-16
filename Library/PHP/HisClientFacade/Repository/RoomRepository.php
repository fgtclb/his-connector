<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\FacilityService\Service\Service as FacilityService;
use FGTCLB\HisClient\FacilityService\Struct\ReadRoom202112;
use FGTCLB\HisClient\FacilityService\Struct\ReadRoom202112Response;
use FGTCLB\HisClientFacade\Exception\Exception;
use FGTCLB\HisClientFacade\Factory\RoomFactory;
use FGTCLB\HisClientFacade\Model\Room;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;

/**
 * @implements RepositoryInterface<Room>
 */
readonly class RoomRepository implements RepositoryInterface
{
    public function __construct(
        private FacilityService $facilityService,
        private RoomFactory $roomFactory,
        #[Autowire(service: 'cache.runtime')]
        private readonly FrontendInterface $cache,
    ) {}

    public function findByIdForLanguage(int $id, string $language): ?Room
    {
        $cacheIdentifier = str_replace('\\', '_', self::class) . '_' . $id;
        if (!$this->cache->has($cacheIdentifier)) {
            try {
                /** @var ReadRoom202112Response */
                $roomResponse = $this->facilityService->readRoom202112(new ReadRoom202112($id));
            } catch (\SoapFault $e) {
                throw new Exception(sprintf(
                    'Unable to fetch org unit "%d": %s',
                    $id,
                    $e->getMessage(),
                ), 1785252647, $e);
            }
            if ($roomResponse->getRoom()) {
                $this->cache->set($cacheIdentifier, $this->roomFactory->create($roomResponse->getRoom(), $language));
            } else {
                $this->cache->set($cacheIdentifier, null);
            }
        }
        return $this->cache->get($cacheIdentifier);
    }

    public function getObjectType(): string
    {
        return Room::class;
    }
}
