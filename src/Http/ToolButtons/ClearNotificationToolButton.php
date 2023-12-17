<?php

namespace Dcat\Admin\Http\ToolButtons;

use Dcat\Admin\Actions\Action;
use Dcat\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;

class ClearNotificationToolButton extends Action
{

    protected ?string $returnUrl;
    public function __construct(string $returnUrl = null, $title = null)
    {
        $this->returnUrl = $returnUrl;
        parent::__construct($title);
    }

    public function handle(Request $request)
    {
        DatabaseNotification::where('notifiable_type', 'App\Models\User')->where('notifiable_id', Admin::user()->id)->delete();
        $url = $request->get('url');

        return $this->response()
            ->success(__('admin.truncated_success'))
            ->script("location.href = '{$url}';");
    }

    protected function parameters()
    {
        return ['url' => $this->returnUrl];
    }

    protected function html()
    {
        $this->appendHtmlAttribute('class', ' btn btn-primary btn-outline btn-outline');
        $this->defaultHtmlAttribute('href', 'javascript:void(0)');

        return <<<HTML
        <div class="btn-group pull-right" style="margin-right: 10px">
    <a {$this->formatHtmlAttributes()}>
        <i class="fa fa-recycle"></i>&nbsp;&nbsp;{$this->title()}
    </a>
</div>
HTML;
    }
}