<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\PersonService\Service\Service as PersonService;
use FGTCLB\HisClient\PersonService\Struct\GetAllPersonAttributeTypes;
use FGTCLB\HisClient\PersonService\Struct\GetAllPersonAttributeTypesResponse;
use FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto;
use FGTCLB\HisClient\PersonService\Struct\ReadAllPersonAttributesFromPerson;
use FGTCLB\HisClient\PersonService\Struct\ReadAllPersonAttributesFromPersonResponse;
use FGTCLB\HisClientFacade\Collection\PersonAttributeCollection;
use FGTCLB\HisClientFacade\Exception\Exception;
use FGTCLB\HisClientFacade\Factory\PersonAttributeFactory;
use FGTCLB\HisClientFacade\Model\PersonAttribute;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;

/**
 * @implements RepositoryInterface<PersonAttribute>
 */
readonly class PersonAttributeRepository implements RepositoryInterface
{
    public function __construct(
        private PersonService $personService,
        private PersonAttributeFactory $personAttributeFactory,
        #[Autowire(service: 'cache.runtime')]
        private readonly FrontendInterface $cache,
    ) {}

    public function findByPersonId(int $personId): PersonAttributeCollection
    {
        try {
            /** @var ReadAllPersonAttributesFromPersonResponse */
            $response = $this->personService->readAllPersonAttributesFromPerson(new ReadAllPersonAttributesFromPerson($personId));
        } catch (\SoapFault $e) {
            throw new Exception(sprintf(
                'Unable to fetch attributes of person "%d": %s',
                $personId,
                $e->getMessage(),
            ), 1785421558, $e);
        }
        $personAttributes = [];
        foreach ($response->getPersonAttributeDtos()->getPersonAttributeDto() ?? [] as $attribute) {
            $attributeType = $this->findAttributeTypeById($attribute->getPersonAttributeTypeId());
            if ($attributeType === null) {
                throw new Exception(sprintf(
                    'Invalid person attribute id referenced in attribute "%d" for person "%d": %d',
                    $attribute->getId(),
                    $attribute->getPersonId(),
                    $attribute->getPersonAttributeTypeId(),
                ), 1785429739);
            }
            $personAttributes[] = $this->personAttributeFactory->create($attribute, $attributeType);
        }
        return PersonAttributeCollection::fromArray($personAttributes);
    }

    public function findAttributeTypeById(int $typeId): ?PersonAttributeTypeDto
    {
        $all = $this->findAllAttributeTypes();
        return array_find(
            $all,
            fn(PersonAttributeTypeDto $dto) => $dto->getId() === $typeId,
        );
    }

    /**
     * @return PersonAttributeTypeDto[]
     */
    public function findAllAttributeTypes(): array
    {
        $cacheIdentifier = str_replace('\\', '_', self::class) . '_attributeTypes';
        if (!$this->cache->has($cacheIdentifier)) {
            try {
                /** @var GetAllPersonAttributeTypesResponse */
                $response = $this->personService->getAllPersonAttributeTypes(new GetAllPersonAttributeTypes());
            } catch (\SoapFault $e) {
                throw new Exception(sprintf(
                    'Unable to fetch person attribute types: %s',
                    $e->getMessage(),
                ), 1785429219, $e);
            }
            $this->cache->set($cacheIdentifier, $response->getPersonAttributeTypes()->getPersonAttributeType());
        }
        return $this->cache->get($cacheIdentifier);
    }

    public function getObjectType(): string
    {
        return PersonAttribute::class;
    }
}
