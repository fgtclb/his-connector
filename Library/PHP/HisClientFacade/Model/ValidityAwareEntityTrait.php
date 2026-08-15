<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Model;

/**
 * Interface that indicates that an entity has a date-based validity
 */
trait ValidityAwareEntityTrait
{
    public function validFrom(): ?\DateTimeInterface
    {
        return $this->validFrom;
    }

    public function validTo(): ?\DateTimeInterface
    {
        return $this->validTo;
    }

    public function isValidAt(\DateTimeInterface $at): bool
    {
        return
            ($this->validFrom() === null || $at >= $this->validFrom())
            && ($this->validTo() === null || $at <= $this->validTo());
    }
}
