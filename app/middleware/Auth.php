<?php

declare(strict_types=1);

namespace app\middleware;

use Closure;

use Psr\Http\Message\ServerRequestInterface;

use queasy2\framework\MiddlewareInterface;

class Auth implements MiddlewareInterface
{
    public function handle(ServerRequestInterface $request, Closure $next)
    {
        if ($this->app->user) {
            return $next($request);
        }

        $this->app->redirect('index.php/sign-in');
    }
}

