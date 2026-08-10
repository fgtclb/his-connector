<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

/**
 * Interface to differentiate objects that have an identity field (= entity)
 * from value objects.
 */
interface EntityInterface
{
    public function getIdentifier(): string;
}
