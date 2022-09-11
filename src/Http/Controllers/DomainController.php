<?php

namespace Dcat\Admin\Http\Controllers;

use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Models\Administrator;

class DomainController extends AdminController
{
    protected function grid()
    {
        $model = config('admin.database.domains_model');

        return new Grid( $model::with('manager'), function (Grid $grid) {

            $grid->column('host')->editable();
            $grid->column('manager.username', trans('admin.manager'));

            $grid->disableFilterButton();
            $grid->disableRefreshButton();
            $grid->disableViewButton();
        });
    }

    protected function form()
    {
        $model = config('admin.database.domains_model');
        return new Form( $model::with('manager'), function (Form $form) {

            $form->text('host')->required();

            $users = Administrator::whereManagerId(Admin::user()->id)->pluck('username', 'id');
            $form->select('manager_id', trans('admin.manager'))->options($users)->required();

            $form->disableViewButton();
        });
    }
}