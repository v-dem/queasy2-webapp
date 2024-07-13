<?php

declare(strict_types=1);

namespace app\controller;

use app\Controller;

class Profile extends Controller
{
    public function get()
    {
        if (!empty($this->app->user)) {
            return $this->view('profile.php');
        }

        $this->app->redirect('index.php/sign-in');
    }
}

