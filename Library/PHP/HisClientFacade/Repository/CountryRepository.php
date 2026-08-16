<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\KeyvalueService\Service\Service as KeyvalueService;
use FGTCLB\HisClient\KeyvalueService\Struct\CountryValue;
use FGTCLB\HisClient\KeyvalueService\Struct\GetAllExtended;
use FGTCLB\HisClient\KeyvalueService\Struct\GetAllExtendedResponse;
use FGTCLB\HisClientFacade\Exception\Exception;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;

/**
 * @implements RepositoryInterface<CountryValue>
 */
readonly class CountryRepository implements RepositoryInterface
{
    public function __construct(
        private readonly KeyvalueService $keyvalueService,
        #[Autowire(service: 'cache.runtime')]
        private readonly FrontendInterface $cache,
    ) {}

    public function findByIdForLanguage(int $id, string $language): ?CountryValue
    {
        $all = $this->findAllForLanguage($language);
        return array_find(
            $all,
            fn(CountryValue $country) => $country->getId() === $id,
        );
    }

    public function findByUniquenameForLanguage(string $uniquename, string $language): ?CountryValue
    {
        $all = $this->findAllForLanguage($language);
        return array_find(
            $all,
            fn(CountryValue $country) => $country->getUniquename() === $uniquename,
        );
    }

    /**
     * @return CountryValue[]
     */
    public function findAllForLanguage(string $language): array
    {
        $cacheIdentifier = str_replace('\\', '_', self::class) . '_' . $language;
        if (!$this->cache->has($cacheIdentifier)) {
            try {
                /** @var GetAllExtendedResponse */
                $response = $this->keyvalueService->getAllExtended(new GetAllExtended('CountryValue', $language));
            } catch (\SoapFault $e) {
                throw new Exception(sprintf(
                    'Unable to fetch countries for language "%s": %s',
                    $language,
                    $e->getMessage(),
                ), 1784884051, $e);
            }
            $this->cache->set($cacheIdentifier, $response->getValuesXtd()->getValue() ?? []);
        }
        return $this->cache->get($cacheIdentifier);
    }

    public function getObjectType(): string
    {
        return CountryValue::class;
    }
}
