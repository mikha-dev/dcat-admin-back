<?php

namespace Dcat\Admin\Http\Middleware;

use Dcat\Admin\Admin;
use Illuminate\Support\Facades\Log;

class Extensions
{
    public function handle($request, \Closure $next)
    {
        //todo::debug
        //echo 'ext:';

        try {
            Admin::extension()->register();
            Admin::extension()->boot();
        } catch (\Exception $ex) {
            Log::critical($ex->getMessage(), ['ex' => $ex]);
        }

        return $next($request);
    }
}
