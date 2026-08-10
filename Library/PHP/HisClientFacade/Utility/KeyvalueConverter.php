<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Utility;

use FGTCLB\HisClient\KeyvalueService\Struct\KeyValue;
use FGTCLB\HisClientFacade\Enum\KeyvalueTable;
use FGTCLB\HisClientFacade\Repository\KeyvalueRepository;

/**
 * Converts keyvalue ids to their unique names
 * This is used for endpoints where this conversion isn't done internally
 * to get a streamlined API result.
 */
readonly class KeyvalueConverter
{
    public function __construct(private KeyvalueRepository $keyvalueRepository) {}

    public function convertAddresstagIdToUniquename(int $id, string $language): ?string
    {
        $items = $this->keyvalueRepository->findByTableForLanguage(KeyvalueTable::ADDRESSTAGS, $language);
        $item = array_find($items, fn(KeyValue $item) => $item->getId() === $id);
        return $item?->getUniquename();
    }

    public function convertEAddressIdToUniquename(int $id, string $language): ?string
    {
        $items = $this->keyvalueRepository->findByTableForLanguage(KeyvalueTable::EADDRESSTYPES, $language);
        $item = array_find($items, fn(KeyValue $item) => $item->getId() === $id);
        return $item?->getUniquename();
    }

    public function convertAffiliationTypeIdToTitle(int $id, string $language): ?string
    {
        $items = $this->keyvalueRepository->findByTableForLanguage(KeyvalueTable::AFFILIATIONTYPES, $language);
        $item = array_find($items, fn(KeyValue $item) => $item->getId() === $id);
        return $item?->getDefaulttext();
    }
}
