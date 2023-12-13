<?php

namespace Dcat\Admin\Widgets;

use Illuminate\Contracts\Support\Renderable;

class IconicLink implements Renderable
{
    public function __construct(protected string $icon, protected string $text, protected string $href)
    {
    }

    public function render()
    {
        return <<<HTML
        <p class="text-nowrap">{$this->icon}<a class="pl-2" href="{$this->href}">{$this->text}</a></p>
HTML;
    }
}
