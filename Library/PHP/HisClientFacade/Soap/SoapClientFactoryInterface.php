<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Soap;

/**
 * Creates a PHP SOAP object for the specified HisClient service
 * with the supplied credentials. This object will then be injected into
 * the service class via setSoapService().
 *
 * @see \FGTCLB\HisClientFacade\Soap\SoapServiceInterface
 */
interface SoapClientFactoryInterface
{
    public function createForService(string $serviceNameClass, string $urlPrefix, string $wssUsername, string $wssPassword): \SoapClient;
}
