<?php

namespace Dcat\Admin\Http\Middleware;

use Dcat\Admin\Admin;

class Application
{
    public function handle($request, \Closure $next, $app = null)
    {
        //todo::debug
//        echo 'Application:'.$app;

//        dd('1');

//dd(config('admin'));
        if ($app) {
            Admin::app()->switch($app);
        }

        return $next($request);
    }
}
