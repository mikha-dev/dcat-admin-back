<?php

namespace Dcat\Admin\Widgets;

use D4T\Core\Enums\StyleClassType;
use Illuminate\Contracts\Support\Renderable;

class BadgeDot implements Renderable
{
    public function __construct(protected StyleClassType $style = StyleClassType::PRIMARY)
    {
    }

    public function render()
    {
        return <<<HTML
        <span class="badge badge-dot bg-{$this->style->value} me-1"></span>
HTML;
    }
}
