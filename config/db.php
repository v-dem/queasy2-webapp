<?php

declare(strict_types=1);

return [
    'connection' => [
        'path' => QUEASY_ROOT_PATH . 'database/database.sqlite'
    ],
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
];

