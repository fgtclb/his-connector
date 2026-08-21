<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

/**
 * Collection that contains items with a specific date-based validity
 *
 * @template TValue of object
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
