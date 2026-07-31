<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Soap;

use WsdlToPhp\PackageBase\SoapClientInterface;

/**
 * Interface that identifies all generated SOAP service classes
 *
 * @see \FGTCLB\HisClientFacade\Soap\AbstractSoapService
 */
interface SoapServiceInterface extends SoapClientInterface
{
    /**
     * Method to inject the configured PHP SOAP client via DI
     */
    public function setSoapClient(\SoapClient $soapClient): void;
}
