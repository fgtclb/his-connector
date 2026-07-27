<?php

declare(strict_types=1);

use FGTCLB\HisClientFacade\DependencyInjection\SoapClientFactoryInterface;
use FGTCLB\HisConnector\DependencyInjection\SoapClientFactory;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use WsdlToPhp\PackageBase\SoapClientInterface;

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

    $services->load(
        'FGTCLB\\HisClient\\',
        __DIR__ . '/../Library/PHP/HisClient/*',
    )
        ->exclude([
            __DIR__ . '/../Library/PHP/HisClient/*/ClassMap.php',
            __DIR__ . '/../Library/PHP/HisClient/*/Struct/*',
        ])
        ->public();

    $services->load(
        'FGTCLB\\HisClientFacade\\',
        __DIR__ . '/../Library/PHP/HisClientFacade/*',
    )
        ->exclude([
            __DIR__ . '/../Library/PHP/HisClientFacade/Model/*.php',
        ]);

    $builder->registerForAutoconfiguration(SoapClientInterface::class)->addTag('hisclient.soapclient');
    $builder->addCompilerPass(new class () implements CompilerPassInterface {
        public function process(ContainerBuilder $container): void
        {
            foreach ($container->findTaggedServiceIds('hisclient.soapclient') as $id => $tags) {
                $container->findDefinition($id)
                    ->setFactory([new Reference(SoapClientFactoryInterface::class), 'create'])
                    ->setArguments([$id])
                    ->setShared(false);
            }
        }
    });

    $services->alias(SoapClientFactoryInterface::class, SoapClientFactory::class);
};
