<?php

namespace extravestibular\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use extravestibular\Edital;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
        // return route('loginComEditais');
    }
}
