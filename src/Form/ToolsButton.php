<?php

namespace Dcat\Admin\Form;

use Illuminate\Contracts\Support\Renderable;

class ToolsButton implements Renderable
{
    protected string $view = 'admin::form.tool-button';

    public function __construct(public string $title, public string $icon, public string $href, public ?string $action = null, public ?string $redirect = null)
    {

    }

    public function render()
    {
        return view($this->view, [
            'icon' => $this->icon,
            'title' => $this->title,
            'href' => $this->href,
            'action' => $this->action,
            'redirect' => $this->redirect,
        ]);
    }
}
