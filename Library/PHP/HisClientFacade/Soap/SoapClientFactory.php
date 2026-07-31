<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Soap;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use WsdlToPhp\PackageBase\SoapClientInterface;

/**
 * Default implementation of the SoapClientFactoryInterface, which supports
 * authentication via WSS security headers and resolves the matching WSDL
 * classmap based on the requested HisClient service name.
 */
final readonly class SoapClientFactory implements SoapClientFactoryInterface
{
    private const WSS_NAMESPACE_PREFIX = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss';

    public function createForService(string $serviceClassName, string $urlPrefix, string $wssUsername, string $wssPassword): \SoapClient
    {
        // Extract SOAP endpoint from requested PHP class
        // e. g. FGTCLB\HisClient\PersonService\Service\Service => PersonService
        $parts = explode('\\', trim($serviceClassName, '\\'));
        $serviceName = $parts[2];

        $wsdlUrl = $urlPrefix . $serviceName . '?wsdl';
        $classMap = '\\FGTCLB\\HisClient\\' . $serviceName . '\\ClassMap';
        $options = [
            ...array_filter(AbstractSoapClientBase::getDefaultWsdlOptions(), fn($value) => !is_null($value)),
            SoapClientInterface::WSDL_LOCATION => $urlPrefix . $serviceName,
            SoapClientInterface::WSDL_CLASSMAP => $classMap::get(),
        ];
        // Remove possible non-standard WSDL option from library
        unset($options[SoapClientInterface::WSDL_URL]);

        // Remove prefixes from array keys
        $wsdlOptions = [];
        foreach ($options as $optionName => $optionValue) {
            $wsdlOptions[str_replace(SoapClientInterface::OPTION_PREFIX, '', $optionName)] = $options[$optionName];
        }

        $client = new \SoapClient($wsdlUrl, $wsdlOptions);
        $client->__setSoapHeaders($this->createWssSecurityHeader($wssUsername, $wssPassword));
        return $client;
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
