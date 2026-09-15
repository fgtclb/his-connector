<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'FGTCLB: HIS Connector',
    'description' => 'HIS connector for TYPO3 CMS.',
    'version' => '1.0.1',
    'category' => 'misc',
    'state' => 'alpha',
    'author' => 'FGTCLB',
    'author_email' => 'hello@fgtclb.com',
    'author_company' => 'FGTCLB GmbH',
    'constraints' => [
        'depends' => [
            'php' => '8.2.0-8.5.99',
            'typo3' => '13.4.0-14.3.99',
            'core' => '13.4.0-14.3.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    // Only used in classic mode prior to TYPO3 v14.3, where it replaces the
    // composer.json autoload section. Includes the libraries bundled from
    // contrib/composer.json, required early for the dependency injection
    // container build, before ext_localconf.php is loaded.
    // @todo typo3/cms:>=14.3 Remove, v14.3 uses composer.json providesPackages.
    'autoload' => [
        'psr-4' => [
            'FGTCLB\\HisConnector\\' => 'Classes/',
            'FGTCLB\\HisClient\\' => 'Library/PHP/HisClient/',
            'FGTCLB\\HisClientFacade\\' => 'Library/PHP/HisClientFacade/',
            'WsdlToPhp\\PackageBase\\' => 'contrib/Libraries/wsdltophp/packagebase/src/',
        ],
    ],
];
