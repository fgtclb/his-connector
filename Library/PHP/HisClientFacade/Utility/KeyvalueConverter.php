<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Utility;

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
        foreach ($items as $keyvalue) {
            if ($keyvalue->getId() === $id) {
                return $keyvalue->getUniquename();
            }
        }
        return null;
    }

    public function convertEAddressIdToUniquename(int $id, string $language): ?string
    {
        $items = $this->keyvalueRepository->findByTableForLanguage(KeyvalueTable::EADDRESSTYPES, $language);
        foreach ($items as $keyvalue) {
            if ($keyvalue->getId() === $id) {
                return $keyvalue->getUniquename();
            }
        }
        return null;
    }
}
