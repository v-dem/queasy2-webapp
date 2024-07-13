<?php

declare(strict_types=1);

namespace app;

use queasy2\framework\App as BaseApp;

class App extends BaseApp
{
    public $user;

    public function initialize()
    {
        session_start();

        if (isset($_SESSION['user'])) {
            $this->user = $_SESSION['user'];
        }
    }

    public function login(array $user)
    {
        $this->user = $user;

        $_SESSION['user'] = $user;
    }

    public function logout()
    {
        $this->user = null;

        unset($_SESSION['user']);
    }

    public function redirect(string $path = '')
    {
        header('Location: ' . preg_replace('/index\.php.*/', '', $this->request->getRequestTarget()) . $path);
    }
}

