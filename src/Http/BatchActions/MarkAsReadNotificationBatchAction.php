<?php

namespace Dcat\Admin\Http\BatchActions;

use Illuminate\Http\Request;
use Dcat\Admin\Grid\BatchAction;
use Illuminate\Notifications\DatabaseNotification;

class MarkAsReadNotificationBatchAction extends BatchAction
{
    public function __construct($title=null)
    {
        parent::__construct($title);
    }

    public function handle(Request $request)
    {
        $notifications = DatabaseNotification::find($this->getKey());

        if($notifications) {
            $notifications->each(function(DatabaseNotification $notification) {
                $notification->markAsRead();
            });
        }

        return $this->response()
            ->success(trans('admin.mark_as_read_success'))
            ->refresh();
    }

    protected function parameters()
    {
        return [];
    }

}
