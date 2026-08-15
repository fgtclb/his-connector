<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Collection;

/**
 * Collection that contains items with a specific date-based validity
 */
interface ValidityAwareCollectionInterface
{
    public function onlyValidAt(\DateTimeInterface $at): CollectionInterface&ValidityAwareCollectionInterface;
    public function notValidAt(\DateTimeInterface $at): CollectionInterface&ValidityAwareCollectionInterface;
}
