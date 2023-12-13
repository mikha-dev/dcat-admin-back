<?php

namespace Dcat\Admin\Layout;

use D4T\Core\Contracts\D4TEnumColored;
use Illuminate\Contracts\Support\Renderable;

class ColoredEnumBadge implements Renderable
{
    public function __construct(public D4TEnumColored $value)
    {
    }

    public function render() {
        return "<span class='badge bg-{$this->value->color()->value}'>{$this->value->label()}</span>";
    }
}
