<?php

namespace App\Http\Middleware;

use Closure;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $language = \Session::get('user-language', 'en');

        if(!in_array($language, ['en', 'vi'])) {
            $language = 'en';
        }

        config(['app.locale' => $language]);
        return $next($request);
    }
}
