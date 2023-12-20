<?php

namespace Dcat\Admin\Layout;

use Dcat\Admin\Admin;
use Dcat\Admin\DcatIcon;
use Dcat\Admin\Enums\RouteAuth;
use Dcat\Admin\Support\Helper;
use Illuminate\Support\Collection;
use Dcat\Admin\Traits\HasBuilderEvents;
use Dcat\Admin\Widgets\Navs\DarkModeSwitcherNav;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Renderable;
use Dcat\Admin\Widgets\Navs\DashboardNotificationNav;
use Dcat\Admin\Widgets\Navs\LinkNav;

class Navbar
{
    use HasBuilderEvents;

    protected Collection $elements;
    protected Collection $navs;

    public function __construct()
    {
        $this->elements = collect();
        $this->navs = collect();


        if(Admin::user() && Admin::user()->can('mng.app-settings')) {
            $this->addNav(new LinkNav(DcatIcon::SETTINGS(true), admin_route(RouteAuth::APP_SETTINGS())));
        }

        $this->addNav(new DashboardNotificationNav());

        $this->addNav(new DarkModeSwitcherNav());
    }

    public function addNav( Renderable $nav) : Navbar
    {
        $this->navs->push($nav);

        return $this;
    }

    public function addFree(string|\Closure|Renderable|Htmlable $element) : Navbar
    {
        $this->elements->push($element);

        return $this;
    }

    public function renderNavs() : string
    {
        $this->callComposing('render-navs');

        if ($this->navs->isEmpty()) {
            return '';
        }

        return $this->navs->map([Helper::class, 'render'])->implode('');
    }

    public function renderFree() : string
    {
        $this->callComposing('render-free');

        if ($this->elements->isEmpty()) {
            return '';
        }

        return $this->elements->map([Helper::class, 'render'])->implode('');
    }
}
