<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Soap;

/**
 * Creates an instance of a generated SOAP service class. Implementations
 * of this interface can read necessary credentials for accessing a SOAP endpoint
 * and provide them to the service class (or the underlying PHP SOAP class).
 */
interface SoapServiceFactoryInterface
{
    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T the created instance
     */
    public function create(string $className): object;
}
