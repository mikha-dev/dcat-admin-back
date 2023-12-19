<?php

namespace Dcat\Admin\Http\Middleware;

use Dcat\Admin\Admin;
use Illuminate\Support\Facades\Log;

class Settings
{
    public function handle($request, \Closure $next)
    {
        try {
            //Admin::setting()->fromDatabase();
            //dd(config('admin'));
            //dd(Admin::setting());
            //dd(Admin::setting()->getArray('admin'));
            $settings = array_merge(config('admin'), Admin::setting()->getArray('admin'));
            config(['admin' => $settings]);

            //dd(config('admin'));

        } catch (\Exception $ex) {
            Log::critical($ex->getMessage(), ['ex' => $ex]);
        }

        return $next($request);
    }
}
