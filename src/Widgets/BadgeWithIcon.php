<?php

namespace Dcat\Admin\Widgets;

use D4T\Core\Enums\StyleClassType;
use Illuminate\Contracts\Support\Renderable;

class BadgeWithIcon implements Renderable
{
    public function __construct(protected string $title, protected string $description, protected string $icon, protected StyleClassType $style = StyleClassType::PRIMARY)
    {
    }

    public function render()
    {
        $style = $this->style->value;
        return <<<HTML
        <span class="badge rounded-pill bg-{$style}"><strong>{$this->title}:</strong><span class="mx-2">{$this->description}</span>{$this->icon}</span>
HTML;
    }
}
