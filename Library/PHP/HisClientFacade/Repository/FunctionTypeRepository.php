<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\KeyvalueService\Struct\KeyValue;
use FGTCLB\HisClientFacade\Enum\KeyvalueTable;
use FGTCLB\HisClientFacade\Factory\FunctionTypeFactory;
use FGTCLB\HisClientFacade\Model\FunctionType;

/**
 * @implements RepositoryInterface<FunctionType>
 */
readonly class FunctionTypeRepository implements RepositoryInterface
{
    public function __construct(
        private KeyvalueRepository $keyvalueRepository,
        private FunctionTypeFactory $functionTypeFactory,
    ) {}

    public function findByIdForLanguage(int $id, string $language): ?FunctionType
    {
        $items = $this->keyvalueRepository->findByTableForLanguage(KeyvalueTable::AFFILIATIONTYPES, $language);
        $keyValue = array_find($items, fn(KeyValue $item) => $item->getId() === $id);
        return $keyValue !== null ? $this->functionTypeFactory->create($keyValue) : null;
    }

    public function getObjectType(): string
    {
        return FunctionType::class;
    }
}
