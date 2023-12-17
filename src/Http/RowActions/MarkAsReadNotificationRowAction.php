<?php

namespace Dcat\Admin\Http\RowActions;

use Dcat\Admin\DcatIcon;
use Illuminate\Http\Request;
use Dcat\Admin\Grid\RowAction;
use Illuminate\Notifications\DatabaseNotification;

class MarkAsReadNotificationRowAction extends RowAction
{
    public function title()
    {
        return DcatIcon::EYE(true);
    }

    public function handle(Request $request)
    {
        $id = $this->getKey();

        DatabaseNotification::find($id)->markAsRead();

        return $this->response()->success("read")->refresh();
    }

    public function parameters()
    {
        return [
        ];
    }
}
