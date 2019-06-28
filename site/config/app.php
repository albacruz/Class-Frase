<?php 
return [
    'config' => [
        'db' => [
            'mysql' => [
                'driver' => 'mysql',
                'host' => '192.168.1.122:3344',
                'database' => 'db_test',
                'username' => 'testuser',
                'password' => 'testuser@docker',
                'charset'   => 'utf8',
                'collation' => 'utf8_spanish2_ci',
                'prefix'    => ''
            ],
        ],
        'view' => [
            'path' => __DIR__ . '/../src/views',
            'twig' => ['cache' => false]
        ]
    ]
];