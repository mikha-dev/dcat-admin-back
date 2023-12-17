<?php

namespace Dcat\Admin\Layout;

use Dcat\Admin\Support\Helper;
use Illuminate\Support\Collection;
use Dcat\Admin\Traits\HasBuilderEvents;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Renderable;
use Dcat\Admin\Widgets\Navs\DashboardNotificationNav;

class Navbar
{
    use HasBuilderEvents;

    protected Collection $elements;
    protected Collection $navs;

    public function __construct()
    {
        $this->elements = collect();
        $this->navs = collect();

        $this->addNav(new DashboardNotificationNav());
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
