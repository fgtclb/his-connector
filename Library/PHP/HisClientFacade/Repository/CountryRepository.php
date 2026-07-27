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

readonly class CountryRepository
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
            /** @var GetAllExtendedResponse|false */
            $response = $this->keyvalueService->getAllExtended(new GetAllExtended('CountryValue', $language));
            if ($response === false) {
                /** @var \SoapFault */
                $soapException = $this->keyvalueService->getLastErrorForMethod(KeyvalueService::class . '::getAllExtended');
                throw new Exception(sprintf(
                    'Unable to fetch countries for language "%s": %s',
                    $language,
                    $soapException->getMessage(),
                ), 1784884051, $soapException);
            }
            $this->cache->set($cacheIdentifier, $response->getValuesXtd()->getValue() ?? []);
        }
        return $this->cache->get($cacheIdentifier);
    }
}
