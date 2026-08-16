<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\PersonService\Service\Service as PersonService;
use FGTCLB\HisClient\PersonService\Struct\ReadAllTitles;
use FGTCLB\HisClient\PersonService\Struct\ReadAllTitlesResponse;
use FGTCLB\HisClient\PersonService\Struct\Title;
use FGTCLB\HisClientFacade\Exception\Exception;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;

/**
 * @implements RepositoryInterface<Title>
 */
readonly class TitleRepository implements RepositoryInterface
{
    public function __construct(
        private readonly PersonService $personService,
        #[Autowire(service: 'cache.runtime')]
        private readonly FrontendInterface $cache,
    ) {}

    public function findByIdForLanguage(int $id, string $language): ?Title
    {
        $all = $this->findAllForLanguage($language);
        return array_find(
            $all,
            fn(Title $title) => $title->getId() === $id,
        );
    }

    /**
     * @return Title[]
     */
    public function findAllForLanguage(string $language): array
    {
        $cacheIdentifier = str_replace('\\', '_', self::class) . '_' . $language;
        if (!$this->cache->has($cacheIdentifier)) {
            try {
                /** @var ReadAllTitlesResponse */
                $response = $this->personService->readAllTitles(new ReadAllTitles($language));
            } catch (\SoapFault $e) {
                throw new Exception(sprintf(
                    'Unable to fetch titles for language "%s": %s',
                    $language,
                    $e->getMessage(),
                ), 1784884053, $e);
            }
            $this->cache->set($cacheIdentifier, $response->getTitles()->getTitle() ?? []);
        }
        return $this->cache->get($cacheIdentifier);
    }

    public function getObjectType(): string
    {
        return Title::class;
    }
}
