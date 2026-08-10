<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\PersonService\Service\Service as PersonService;
use FGTCLB\HisClient\PersonService\Struct\Gender;
use FGTCLB\HisClient\PersonService\Struct\ReadAllGenders;
use FGTCLB\HisClient\PersonService\Struct\ReadAllGendersResponse;
use FGTCLB\HisClientFacade\Exception\Exception;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;

readonly class GenderRepository
{
    public function __construct(
        private readonly PersonService $personService,
        #[Autowire(service: 'cache.runtime')]
        private readonly FrontendInterface $cache,
    ) {}

    public function findByIdForLanguage(int $id, string $language): ?Gender
    {
        $all = $this->findAllForLanguage($language);
        return array_find(
            $all,
            fn(Gender $gender) => $gender->getId() === $id,
        );
    }

    /**
     * @return Gender[]
     */
    public function findAllForLanguage(string $language): array
    {
        $cacheIdentifier = str_replace('\\', '_', self::class) . '_' . $language;
        if (!$this->cache->has($cacheIdentifier)) {
            try {
                /** @var ReadAllGendersResponse */
                $response = $this->personService->readAllGenders(new ReadAllGenders($language));
            } catch (\SoapFault $e) {
                throw new Exception(sprintf(
                    'Unable to fetch genders for language "%s": %s',
                    $language,
                    $e->getMessage(),
                ), 1784884052, $e);
            }
            $this->cache->set($cacheIdentifier, $response->getGenders()->getGender() ?? []);
        }
        return $this->cache->get($cacheIdentifier);
    }
}
