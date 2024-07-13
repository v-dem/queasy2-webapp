<?php

declare(strict_types=1);

namespace app;

use queasy2\framework\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * This method just appends $user to $data
     */
    protected function view($page, array $data = [], int $responseCode = 200)
    {
        return parent::view($page, array_merge($data, [ 'user' => $this->app->user ]), $responseCode);
    }
}

