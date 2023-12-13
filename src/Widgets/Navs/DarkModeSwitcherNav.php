<?php

namespace Dcat\Admin\Widgets\Navs;

use Illuminate\Contracts\Support\Renderable;

class DarkModeSwitcherNav implements Renderable
{
    protected string $view = 'admin::widgets.darkmode-switcher-nav';

    public function __construct()
    {
    }

    public function render()
    {
        return view($this->view);
    }
}
