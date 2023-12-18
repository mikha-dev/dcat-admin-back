<?php

namespace Dcat\Admin\Http\Middleware;

use Dcat\Admin\Admin;
use Illuminate\Support\Facades\Log;

class Settings
{
    public function handle($request, \Closure $next)
    {
        try {
            Admin::setting()->fromDatabase();
            $settings = array_merge(config('admin'), Admin::setting()->getArray('admin'));
            config(['admin' => $settings]);

        } catch (\Exception $ex) {
            Log::critical($ex->getMessage(), ['ex' => $ex]);
        }

        return $next($request);
    }
}
