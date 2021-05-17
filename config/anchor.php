<?php

return [



    'services' => [

        'php' => [
            /*
             *  For a list of available versions see https://www.php.net/downloads.php
             */
            'version' => env('PHP_VERSION', '8.0.5'),

            /*
             * For a list of available extensions see https://github.com/mlocati/docker-php-extension-installer#supported-php-extensions
             */
            'extensions' => [
//                'get_from_composer' => false,
                'require' => [],
                "require_dev" => ['xdebug'],

            ]
        ],
        'database' => [
            'driver' => env('DB_CONNECTION', 'mysql'),
            'user' => env('DB_USERNAME'),
            'password' => ('DB_PASSWORD')
        ],
        'webserver' => [
            'http_port' => 80,
            'https_port' => 443,
        ],
        'store' => [
            'persistent' => true,
        ],
        'worker' => [

        ],
        'certbot' => [

        ],


    ]

];
