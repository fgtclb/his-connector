<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

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
};
