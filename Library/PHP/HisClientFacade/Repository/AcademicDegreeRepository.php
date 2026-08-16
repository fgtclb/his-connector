<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\PersonService\Service\Service as PersonService;
use FGTCLB\HisClient\PersonService\Struct\AcademicDegree;
use FGTCLB\HisClient\PersonService\Struct\ReadAllAcademicDegrees;
use FGTCLB\HisClient\PersonService\Struct\ReadAllAcademicDegreesResponse;
use FGTCLB\HisClientFacade\Exception\Exception;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;

/**
 * @implements RepositoryInterface<AcademicDegree>
 */
readonly class AcademicDegreeRepository implements RepositoryInterface
{
    public function __construct(
        private readonly PersonService $personService,
        #[Autowire(service: 'cache.runtime')]
        private readonly FrontendInterface $cache,
    ) {}

    public function findByIdForLanguage(int $id, string $language): ?AcademicDegree
    {
        $all = $this->findAllForLanguage($language);
        return array_find(
            $all,
            fn(AcademicDegree $academicDegree) => $academicDegree->getId() === $id,
        );
    }

    /**
     * @return AcademicDegree[]
     */
    public function findAllForLanguage(string $language): array
    {
        $cacheIdentifier = str_replace('\\', '_', self::class) . '_' . $language;
        if (!$this->cache->has($cacheIdentifier)) {
            try {
                /** @var ReadAllAcademicDegreesResponse */
                $response = $this->personService->readAllAcademicDegrees(new ReadAllAcademicDegrees($language));
            } catch (\SoapFault $e) {
                throw new Exception(sprintf(
                    'Unable to fetch academic degrees for language "%s": %s',
                    $language,
                    $e->getMessage(),
                ), 1784884050, $e);
            }
            $this->cache->set($cacheIdentifier, $response->getAcademicDegrees()->getAcademicDegree() ?? []);
        }
        return $this->cache->get($cacheIdentifier);
    }

    public function getObjectType(): string
    {
        return AcademicDegree::class;
    }
}
