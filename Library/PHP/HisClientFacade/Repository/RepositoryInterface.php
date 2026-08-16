<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

/**
 * Contract for a repository
 * @template T of object
 */
interface RepositoryInterface
{
    /**
     * @return class-string<T>
     */
    public function getObjectType(): string;
}
