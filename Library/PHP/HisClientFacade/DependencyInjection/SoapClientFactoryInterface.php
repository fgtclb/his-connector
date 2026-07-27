<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\DependencyInjection;

interface SoapClientFactoryInterface
{
    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T the created instance
     */
    public function create(string $className): object;
}
