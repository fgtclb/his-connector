<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Soap;

use WsdlToPhp\PackageBase\SoapClientInterface;

/**
 * Base class used for all generated SOAP service classes. By default, the
 * generator library catches and collects all exceptions and results. This makes
 * error and result handling very cumbersome and error-prone, which is why
 * in this alternative implementation the relevant methods are short-circuited
 * to get more reasonable service object behavior. Also, the underlying SOAP
 * client is no longer created within the service class itself, but is created
 * in DI and injected via the setSoapClient() method.
 *
 * @see \FGTCLB\HisClientFacade\Soap\SoapServiceFactoryInterface
 * @see \FGTCLB\HisClientFacade\Soap\SoapClientFactoryInterface
 */
abstract class AbstractSoapService implements SoapServiceInterface
{
    private \SoapClient $soapClient;

    /**
     * Unused, but accessed by child classes
     * @var mixed[]
     */
    protected array $outputHeaders = [];

    /**
     * @param array<string, mixed> $_ignoredOptions  Option is ignored, options are expected to be
     *                                               set directly on the SOAP client object that can
     *                                               be dependency-injected using setSoapClient()
     */
    public function __construct(array $_ignoredOptions = []) {}

    public function setSoapClient(\SoapClient $soapClient): void
    {
        $this->soapClient = $soapClient;
    }

    public function getSoapClient(): \SoapClient
    {
        return $this->soapClient;
    }

    /**
     * Sets a SoapHeader to send
     * taken from original base class provided by the library
     * For more information, please read the online documentation on {@link http://www.php.net/manual/en/class.soapheader.php}
     */
    public function setSoapHeader(string $namespace, string $name, $data, bool $mustUnderstand = false, ?string $actor = null): SoapClientInterface
    {
        $defaultHeaders = (isset($this->getSoapClient()->__default_headers) && is_array($this->getSoapClient()->__default_headers)) ? $this->getSoapClient()->__default_headers : [];
        foreach ($defaultHeaders as $index => $soapHeader) {
            if ($soapHeader->name === $name) {
                unset($defaultHeaders[$index]);
                break;
            }
        }
        $this->getSoapClient()->__setSoapheaders(null);
        if (!empty($actor)) {
            array_push($defaultHeaders, new \SoapHeader($namespace, $name, $data, $mustUnderstand, $actor));
        } else {
            array_push($defaultHeaders, new \SoapHeader($namespace, $name, $data, $mustUnderstand));
        }
        $this->getSoapClient()->__setSoapheaders($defaultHeaders);
        return $this;
    }

    /**
     * @return never
     */
    public function getResult()
    {
        throw new \Exception('SOAP service classes are short-circuited, results are not stored but returned immediately.');
    }

    /**
     * @param mixed $result
     */
    public function setResult($result): SoapClientInterface
    {
        // This is a no-op
        return $this;
    }

    /**
     * @return never
     */
    public function getLastError(): array
    {
        throw new \Exception('SOAP service classes are short-circuited, exceptions not collected but thrown immediately.');
    }

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
