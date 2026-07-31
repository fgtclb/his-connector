<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Soap;

use FGTCLB\HisClientFacade\Soap\SoapClientFactoryInterface;
use FGTCLB\HisClientFacade\Soap\SoapServiceFactoryInterface;
use FGTCLB\HisClientFacade\Soap\SoapServiceInterface;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;

/**
 * Configures generated SOAP service classes in TYPO3's service container
 * using the credentials in the extension configuration
 */
final readonly class SoapServiceFactory implements SoapServiceFactoryInterface
{
    public function __construct(
        private ExtensionConfiguration $extensionConfiguration,
        private SoapClientFactoryInterface $soapClientFactory,
    ) {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T the created instance
     */
    public function create(string $className): object
    {
        if (!class_exists($className) || !is_subclass_of($className, SoapServiceInterface::class, true)) {
            throw new \RuntimeException("Class $className is not a valid SOAP service.", 1785175278);
        }

        $username = $this->extensionConfiguration->get('his_connector', 'soap/username');
        $password = $this->extensionConfiguration->get('his_connector', 'soap/password');
        $urlPrefix = $this->extensionConfiguration->get('his_connector', 'soap/urlPrefix');

        $service = new $className();
        $service->setSoapClient($this->soapClientFactory->createForService($className, $urlPrefix, $username, $password));
        return $service;
    }
}
