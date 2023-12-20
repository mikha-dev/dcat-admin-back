<?php

namespace Dcat\Admin\Http\Controllers;

use Dcat\Admin\Grid;
use Dcat\Admin\Admin;
use Jenssegers\Agent\Agent;
use D4T\Core\CoreServiceProvider;
use Dcat\Admin\Http\Controllers\AdminController;
use Rappasoft\LaravelAuthenticationLog\Models\AuthenticationLog;

class AuthenticationLogController extends AdminController
{
    protected function grid()
    {
        return new Grid( new AuthenticationLog(), function (Grid $grid) {

            $grid->model()
                ->where('authenticatable_type', CoreServiceProvider::getUserModel())
                ->where('authenticatable_id', Admin::user()->id)
                ->orderBy('login_at', 'desc');

            $grid->column('login_at')->dateForHuman();
            $grid->column('logout_at')->dateForHuman();

            $grid->column('ip_address');
            $grid->column('user_agent')->display(function($value) {
                $agent = tap(new Agent(), fn($agent) => $agent->setUserAgent($value));

                return $agent->platform() . ' - ' . $agent->browser();
            });

            $grid->column('location')->display(function($value) {
                if(is_null($value) || $value['default'] || isset($value['error'])|| !isset($value['country_flag']) || !isset($value['country_name'])) {
                    return '-';
                }

                return "<img width='25px' src='{$value['country_flag']}'> ".$value['country_name'] . ', ' . $value['city'];
            });
            $grid->column('login_successful')->bool();

            $grid->disableFilterButton();
            $grid->disableRefreshButton();
            $grid->disableViewButton();
            $grid->disableCreateButton();
            $grid->disableDeleteButton();
            $grid->disableActions();
            $grid->disableRowSelector();
        });
    }
}
