<?php

declare(strict_types=1);

use queasy2\config\Config;

return [
    'viewsPath' => QUEASY_ROOT_PATH . 'views/',

    'services' => [
        'router' => [
            'class' => queasy2\framework\RegexRouter::class,
            '__construct' => [
                new Config(QUEASY_ROOT_PATH . 'config/routes.php')
            ]
        ],

        'db' => [
            'class' => queasy2\db\Db::class,
            '__construct' => [
                new Config(QUEASY_ROOT_PATH . 'config/db.php')
            ]
        ],

        'logger' => [
            'class' => queasy2\log\Logger::class,
            '__construct' => [
                new Config(QUEASY_ROOT_PATH . 'config/logger.php')
            ]
        ],

        'request' => [
            'class' => queasy2\http\ServerRequest::class
        ],

        'response' => [
            'class' => queasy2\http\Response::class
        ],

        'stream' => [
            'class' => queasy2\http\Stream::class
        ],

        'middleware' => [
            'class' => queasy2\framework\MiddlewareHandler::class,
            '__construct' => [
                new Config(QUEASY_ROOT_PATH . 'config/middleware.php'),
                $app
            ]
        ]
    ]
];

