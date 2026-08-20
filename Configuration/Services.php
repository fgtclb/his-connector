<?php

declare(strict_types=1);

use FGTCLB\HisClientFacade\Soap\SoapClientFactory;
use FGTCLB\HisClientFacade\Soap\SoapClientFactoryInterface;
use FGTCLB\HisClientFacade\Soap\SoapServiceFactoryInterface;
use FGTCLB\HisClientFacade\Soap\SoapServiceInterface;
use FGTCLB\HisConnector\Soap\SoapServiceFactory;
use FGTCLB\HisConnector\Tests\Functional\DependencyInjection\Fixtures\MockSoapClientFactory;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use TYPO3\CMS\Core\Core\Environment;

return static function (
    ContainerConfigurator $configurator,
    ContainerBuilder $builder,
): void {
    $services = $configurator->services();

    // Default configuration: autowire and autoconfigure, keep services private.
    // Services are published and wired through Symfony dependency injection
    // attributes on the classes themselves (#[AsAlias], #[Autoconfigure],
    // #[Autowire], …), not through this file.
    $services->defaults()
        ->autowire()
        ->autoconfigure()
        ->private();

    $services->load(
        'FGTCLB\\HisConnector\\',
        __DIR__ . '/../Classes/*',
    );

    // Add generated SOAP client classes to DI, exclude all non-services
    $services->load(
        'FGTCLB\\HisClient\\',
        __DIR__ . '/../Library/PHP/HisClient/*',
    )
        ->exclude([
            __DIR__ . '/../Library/PHP/HisClient/*/ClassMap.php',
            __DIR__ . '/../Library/PHP/HisClient/*/Struct/*',
        ])
        ->public();

    // Instantiate SOAP client services with a custom factory that creates the
    // underlying PHP SOAP object and provides the credentials from the extension
    // configuration
    $builder->registerForAutoconfiguration(SoapServiceInterface::class)->addTag('hisclient.soapservice');
    $builder->addCompilerPass(new class () implements CompilerPassInterface {
        public function process(ContainerBuilder $container): void
        {
            foreach ($container->findTaggedServiceIds('hisclient.soapservice') as $id => $tags) {
                $container->findDefinition($id)
                    ->setFactory([new Reference(SoapServiceFactoryInterface::class), 'create'])
                    ->setArguments([$id])
                    ->setLazy(true);
            }
        }
    });

    // Add SOAP facade library to DI
    $services->load(
        'FGTCLB\\HisClientFacade\\',
        __DIR__ . '/../Library/PHP/HisClientFacade/*',
    )
        ->exclude([
            __DIR__ . '/../Library/PHP/HisClientFacade/Model/*.php',
        ]);

    if (Environment::getContext()->isTesting()) {
        // Use mock factory that creates SOAP clients that don't actually call the SOAP service
        // This avoids PHP warnings during testing because the SOAP objects attempt to connect to
        // the WSDL endpoint.
        $services->set(MockSoapClientFactory::class);
        $services->alias(SoapClientFactoryInterface::class, MockSoapClientFactory::class);
    } else {
        // Use default implementation of SoapClientFactory, which injects the provided configuration
        // options to a "real" PHP SOAP object, which will then fetch the WSDL
        $services->alias(SoapClientFactoryInterface::class, SoapClientFactory::class);
    }

    // Use TYPO3-specific implementation of the SoapServiceFactory, which reads the SOAP
    // credentials from the extension configuration and relays them to the SOAP client
    $services->alias(SoapServiceFactoryInterface::class, SoapServiceFactory::class);
};
