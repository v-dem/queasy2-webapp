<?php

declare(strict_types=1);

return [
    [
        'class' => queasy2\log\FileSystemLogger::class,
        'path' => QUEASY_ROOT_PATH . 'logs/debug.%s.log',
        'timeLabel' => 'Y-m-d',
        'minLevel' => Psr\Log\LogLevel::INFO
    ], [
        'class' => queasy2\log\FileSystemLogger::class,
        'path' => QUEASY_ROOT_PATH . 'logs/debug.full.%s.log',
        'timeLabel' => 'Y-m-d',
        'minLevel' => Psr\Log\LogLevel::DEBUG
    ]
];

