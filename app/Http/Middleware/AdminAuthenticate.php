<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class AdminAuthenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('admin.auth.login');
        }
    }

    protected function redirect(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('admin.auth.login');
    }

    protected function authenticate($request, array $guards)
    {
        if ($this->auth->guard('admin')->check()) {
            return $this->auth->guard('admin')->user();
        }
        $this->unauthenticated($request, ['admin']);
    }
}
