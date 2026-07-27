<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\DependencyInjection;

use FGTCLB\HisClientFacade\DependencyInjection\SoapClientFactoryInterface;
use FGTCLB\HisClientFacade\Exception\Exception;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use WsdlToPhp\PackageBase\SoapClientInterface;

readonly class SoapClientFactory implements SoapClientFactoryInterface
{
    private const WSS_NAMESPACE_PREFIX = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss';

    public function __construct(private ExtensionConfiguration $extensionConfiguration) {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T the created instance
     */
    public function create(string $className): object
    {
        if (!class_exists($className) || !is_subclass_of($className, SoapClientInterface::class, true)) {
            throw new \RuntimeException("Class $className is not a valid SOAP service.", 1785175278);
        }

        $username = $this->extensionConfiguration->get('his_connector', 'soap/username');
        $password = $this->extensionConfiguration->get('his_connector', 'soap/password');
        $urlPrefix = $this->extensionConfiguration->get('his_connector', 'soap/urlPrefix');

        $parts = explode('\\', $className);
        $serviceName = $parts[2];
        $classMap = '\\FGTCLB\\HisClient\\' . $serviceName . '\\ClassMap';
        $soapOptions = [
            SoapClientInterface::WSDL_URL => $urlPrefix . $serviceName . '?wsdl',
            SoapClientInterface::WSDL_LOCATION => $urlPrefix . $serviceName,
            SoapClientInterface::WSDL_CLASSMAP => $classMap::get(),
        ];
        $service = new $className($soapOptions);
        if (!$service->getSoapClient() instanceof \SoapClient) {
            throw new Exception('Unable to create SOAP client with provided credentials.', 1785174765);
        }
        $service->getSoapClient()->__setSoapHeaders($this->createWssSecurityHeader($username, $password));
        return $service;
    }

    private function createWssSecurityHeader(string $username, string $password): \SoapHeader
    {
        return new \SoapHeader(
            self::WSS_NAMESPACE_PREFIX . '-wssecurity-secext-1.0.xsd',
            'Security',
            new \SoapVar(
                [
                    new \SoapVar(
                        [
                            new \SoapVar($username, XSD_STRING, null, null, 'Username', self::WSS_NAMESPACE_PREFIX . '-wssecurity-secext-1.0.xsd'),
                            new \SoapVar($password, XSD_STRING, self::WSS_NAMESPACE_PREFIX . '-username-token-profile-1.0#PasswordText', null, 'Password', self::WSS_NAMESPACE_PREFIX . '-wssecurity-secext-1.0.xsd'),
                        ],
                        SOAP_ENC_OBJECT,
                        null,
                        null,
                        'UsernameToken',
                        self::WSS_NAMESPACE_PREFIX . '-wssecurity-secext-1.0.xsd'
                    ),
                ],
                SOAP_ENC_OBJECT
            ),
            true,
            '\${#Project#username}'
        );
    }
}
