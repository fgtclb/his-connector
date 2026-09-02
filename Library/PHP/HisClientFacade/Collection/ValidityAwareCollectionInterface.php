<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

use FGTCLB\HisClientFacade\Model\EntityInterface;

/**
 * Collection that contains items with a specific date-based validity
 *
 * @template TValue of EntityInterface
 */
interface ValidityAwareCollectionInterface
{
    /**
     * @return CollectionInterface<TValue>&ValidityAwareCollectionInterface<TValue>
     */
    public function onlyValidAt(\DateTimeInterface $at): CollectionInterface&ValidityAwareCollectionInterface;

    /**
     * @return CollectionInterface<TValue>&ValidityAwareCollectionInterface<TValue>
     */
    public function notValidAt(\DateTimeInterface $at): CollectionInterface&ValidityAwareCollectionInterface;
}
