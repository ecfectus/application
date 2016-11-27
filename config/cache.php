<?php
return [
    'store' => 'array',
    'stores' => [
        'array' => [
            'driver' => 'array',
            'lifetime' => 0,
            'serialize' => true
        ],
        'null' => [
            'driver' => 'null'
        ],
        'file' => [
            'driver' => 'file',
            'path' => null,
            'namespace' => '',
            'lifetime' => 0
        ],
        'phpfiles' => [
            'driver' => 'phpfiles',
            'path' => null,
            'namespace' => '',
            'lifetime' => 0
        ],
        'phparray' => [
            'driver' => 'phparray',
            'path' => null,
            'fallback' => 'file'
        ],
        'apcu' => [
            'driver' => 'apcu',
            'namespace' => '',
            'lifetime' => 0,
            'version' => null
        ],
        'pdo' => [
            'driver' => 'pdo',
            'connection' => '',
            'namespace' => '',
            'lifetime' => 0,
            'options' => [
                'db_table' => 'cache_items',
                'db_id_col' => 'item_id',
                'db_data_col' => 'item_data',
                'db_lifetime_col' => 'item_lifetime',
                'db_time_col' => 'item_time',
                'db_username' => '',
                'db_password' => '',
                'db_connection_options' => []
            ]
        ],
        'redis' => [
            'driver' => 'redis',
            'namespace' => '',
            'lifetime' => 0
        ],
        'chain' => [
            'driver' => 'chain',
            'stores' => [
                'array',
                'file'
            ],
            'lifetime' => 0
        ]
    ]
];