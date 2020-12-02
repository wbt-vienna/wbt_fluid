<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'WBT Fluid template',
    'description' => '',
    'category' => 'templates',
    'author' => 'Benjamin Klaus',
    'author_email' => 'klaus@technikum-wien.at',
    'author_company' => 'UAS Technikum Wien',
    'version' => '1.0.0',
    'state' => 'stable',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'fluid_styled_content' => '10.4.0-10.4.99'
        ],
        'conflicts' => [
        ],
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1
];