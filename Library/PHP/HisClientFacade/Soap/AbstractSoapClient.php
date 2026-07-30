<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Soap;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use WsdlToPhp\PackageBase\SoapClientInterface;

abstract class AbstractSoapClient extends AbstractSoapClientBase
{
    /**
     * By default, the used SOAP library catches all SOAP exceptions and collects them
     * by function name. This makes exception handling very cumbersome and error-prone,
     * which is why this alternative implementation just throws the exception again,
     * to be catched and dealt with in the facade code.
     */
    public function saveLastError(string $methodName, \SoapFault $soapFault): SoapClientInterface
    {
        throw $soapFault;
    }
}
