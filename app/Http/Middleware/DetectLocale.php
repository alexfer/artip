<?php

namespace Framework\Http\Middleware;

use Closure;
use Illuminate\Foundation\Application;
use Xinax\LaravelGettext\Facades\LaravelGettext;

class DetectLocale
{

    /**
     *
     * @var object
     */
    private $app;

    /**
     * 
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = \Auth::user();
        $locale = $this->app['config']['laravel-gettext']['locale'];
        LaravelGettext::setLocale($user ? $user->locale : $locale);

        return $next($request);
    }

}
