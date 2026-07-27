<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\KeyvalueService\Service\Service as KeyvalueService;
use FGTCLB\HisClient\KeyvalueService\Struct\GetAll;
use FGTCLB\HisClient\KeyvalueService\Struct\GetAllResponse;
use FGTCLB\HisClient\KeyvalueService\Struct\KeyValue;
use FGTCLB\HisClientFacade\Enum\KeyvalueTable;
use FGTCLB\HisClientFacade\Exception\Exception;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;

readonly class KeyvalueRepository
{
    public function __construct(
        private readonly KeyvalueService $keyvalueService,
        #[Autowire(service: 'cache.runtime')]
        private readonly FrontendInterface $cache,
    ) {}

    /**
     * @return KeyValue[]
     */
    public function findByTableForLanguage(KeyvalueTable $table, string $language): array
    {
        $cacheIdentifier = str_replace('\\', '_', self::class) . '_' . $table->value . '_' . $language;
        if (!$this->cache->has($cacheIdentifier)) {
            try {
                /** @var GetAllResponse */
                $response = $this->keyvalueService->getAll(new GetAll($table->value, $language));
            } catch (\SoapFault $e) {
                throw new Exception(sprintf(
                    'Unable to fetch keyvalue table "%s" for language "%s": %s',
                    $table->value,
                    $language,
                    $e->getMessage(),
                ), 1785339279, $e);
            }
            $this->cache->set($cacheIdentifier, $response->getValues()->getValue() ?? []);
        }
        return $this->cache->get($cacheIdentifier);
    }
}
