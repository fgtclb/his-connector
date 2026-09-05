<?php

return [
    'ctrl' => [
        'title' => 'test_sync_record',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'versioningWS' => true,
        'rootLevel' => -1,
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
    ],
    'columns' => [
        'title' => [
            'label' => 'LLL:EXT:styleguide/Resources/Private/Language/locallang.xlf:minimalTableTitleField',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'required' => true,
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => '
            title, description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,--palette--;;timeRestriction,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
         ',
        ],
    ],
];
