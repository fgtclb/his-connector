<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addTCAcolumns('fe_users', [
    'test_sync_records' => [
        'label' => 'test_sync_records',
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'test_sync_record',
            'foreign_field' => 'parentid',
        ],
    ],
]);
ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'test_sync_records');
