#!/usr/bin/env php
<?php

declare(strict_types=1);

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\SingleCommandApplication;
use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;

$extensionRootPath = __DIR__ . '/../../';
require_once $extensionRootPath . '.Build/vendor/autoload.php';

$supportedEndpoints = [
    'AccountService',
    'AddressService',
    'FacilityService',
    'KeyvalueService',
    'MimedataService',
    'OrgUnitService',
    'PersonAddressService',
    'PersonOrgunitService',
    'PersonService',
];

$application = new SingleCommandApplication();
$application
    ->setName('Generate Client from WSDL')
    ->setHelp('(Re-)Generates PHP client for supported HIS WSDL services')
    ->addArgument(
        'wsdlUrlPrefix',
        InputArgument::REQUIRED,
        'URL part before the endpoint name, e. g. https://example.com/qisserver/services2/',
    )
    ->addArgument(
        'wsdlUrlSuffix',
        InputArgument::OPTIONAL,
        'URL part after the endpoint name',
        '?wsdl',
    )
    ->setCode(function (OutputInterface $output, InputInterface $input) use ($extensionRootPath, $supportedEndpoints) {
        foreach ($supportedEndpoints as $endpoint) {
            $endpointUrl = $input->getArgument('wsdlUrlPrefix') . $endpoint . $input->getArgument('wsdlUrlSuffix');
            $destinationPath = 'Library/PHP/HisClient/' . $endpoint;
            $options = GeneratorOptions::instance();
            $options
                ->setOrigin($endpointUrl)
                ->setDestination($extensionRootPath . $destinationPath)
                ->setNamespace('FGTCLB\\HisClient\\' . $endpoint)
                ->setNamespaceDictatesDirectories(false)
                ->setStandalone(false)
                ->setGatherMethods(GeneratorOptions::VALUE_NONE)
                ->setStructsFolder('Struct')
                ->setEnumsFolder('Enum')
                ->setServicesFolder('Service')
                ->setArraysFolder('Array')
                ->setGenerateTutorialFile(false)
                ->setSrcDirname('');
            $generator = new Generator($options);
            $output->writeln(sprintf(
                'Generating PHP code for endpoint "%s" in "%s" ...',
                $endpointUrl,
                $destinationPath,
            ));
            $generator->generatePackage();
        }
        $output->writeln('PHP code for all supported endpoint has been generated.');
    });
$application->run();
