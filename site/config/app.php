<?php 
return [
    'config' => [
        'db' => [
            'driver' => 'json',
            'path' => __DIR__ . '/../databases'
        ],
        'view' => [
            'path' => __DIR__ . '/../src/views',
            'twig' => ['cache' => false]
        ]
    ]
];