<?php

namespace Dcat\Admin\Http\Controllers;

use Carbon\Carbon;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Admin;
use Dcat\Admin\Grid\Filter;
use D4T\Core\SystemNotification;
use Dcat\Admin\Enums\RouteAuth;
use Dcat\Admin\Grid\Displayers\Actions;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Notifications\DatabaseNotification;
use Dcat\Admin\Http\ToolButtons\ClearNotificationToolButton;
use Dcat\Admin\Http\RowActions\MarkAsReadNotificationRowAction;
use Dcat\Admin\Http\BatchActions\MarkAsReadNotificationBatchAction;

class DashboardNotificationController extends AdminController
{
    protected function title()
    {
        return __('admin.notifications');
    }

    protected function grid()
    {
        return new Grid( new DatabaseNotification(), function (Grid $grid) {

            $grid->selector( function(Grid\Tools\Selector $selector) {
                $selector->selectOne('status', [
                    'all' => __('admin.all'),
                    'unread' => __('admin.unread')
                ], function($query, $value) {

                    if($value == 'unread') {
                        $query->unread();
                        return;
                    }
                });

            });

            $grid->rows(function ($rows) {
                $rows->map(function (Grid\Row $row) {
                    if (is_null($row->read_at)) {
                        $row->style('font-wight:bold');
                    }
                });
            });

            $grid->actions(function(Actions $actions) {
                if($actions->row->unread()) {
                    $actions->prepend(new MarkAsReadNotificationRowAction());
                }
            });

            $grid->tools(function (Grid\Tools $tools) {
                $tools->append(new ClearNotificationToolButton(RouteAuth::NOTIFICATIONS(),__('admin.clear')));
            });

            $grid->model()->where('notifiable_id', Admin::user()->id)->orderBy('created_at', 'desc');

            $grid->column('created_at')->display(function ($created_at) {
                /** @var DatabaseNotification $this */
                $t =  Carbon::parse($created_at)->diffForHumans();

                if(is_null($this->read_at)) {
                    return '<span class="label" style="background: #4863bf;">'.$t.'</span>';
                }

                return $t;
            });

            $grid->column('type')->display(function($type) {
                return SystemNotification::labelFor($type);
            });
            $grid->column('data')->display(function($data) {
                return ( isset($data['message']) ? $data['message'] : '' );
            });

            $grid->filter(function(Filter $filter) {
                $types = DatabaseNotification::where('notifiable_id', Admin::user()->id)->distinct()->pluck('type');
                foreach($types as $type) {
                    $label = SystemNotification::labelFor($type);

                    $filter->scope($type, $label)->where('type', $type);
                }

            });

            $grid->tools(function ($tools) {

                $tools->batch(function (Grid\Tools\BatchActions $batch) {
                    $batch->add(new MarkAsReadNotificationBatchAction(__('admin.mark_as_read')));
                });

            });

            //$grid->disableFilterButton();
            $grid->disableViewButton();
            $grid->disableCreateButton();
            $grid->disableViewButton();
            $grid->disableEditButton();
        });
    }

    protected function form() {
        return new Form(new DatabaseNotification(), function($form) {

        });
    }
}
