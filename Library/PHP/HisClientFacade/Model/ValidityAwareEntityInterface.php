<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

/**
 * Interface that indicates that an entity has a date-based validity
 */
interface ValidityAwareEntityInterface
{
    public function validFrom(): ?\DateTimeInterface;
    public function validTo(): ?\DateTimeInterface;
    public function isValidAt(\DateTimeInterface $at): bool;
}
