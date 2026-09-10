<?php

use FGTCLB\HisConnector\Controller\ImportMappingController;

return [
    'hisconnector' => [
        'parent' => 'system',
        'position' => ['after' => 'backend_user_management'],
        'access' => 'admin',
        'workspaces' => 'live',
        'path' => '/module/system/hisconnector',
        'labels' => 'LLL:EXT:his_connector/Resources/Private/Language/AdminModule/locallang_mod.xlf',
        'iconIdentifier' => 'module-func',
        'routes' => [
            '_default' => [
                'target' => ImportMappingController::class . '::listAction',
            ],
            'mapping' => [
                'target' => ImportMappingController::class . '::mappingAction',
            ],
            'inspect' => [
                'target' => ImportMappingController::class . '::inspectAction',
            ],
        ],
    ],
];
