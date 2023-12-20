<?php

namespace Dcat\Admin\Widgets;

use Dcat\Admin\Enums\ButtonClassType;
use Dcat\Admin\Enums\ButtonSizeType;
use Illuminate\Contracts\Support\Renderable;

class LinkToolButton implements Renderable
{
    protected string $view = 'admin::widgets.link-tool-button';

    public string $attributes = '';

    public function __construct(public string $id, public string $title, public string $icon, public string $href, public ButtonClassType $style = ButtonClassType::PRIMARY, public ButtonSizeType $size = ButtonSizeType::SM)
    {

    }

    public function attributes(string $value) : LinkToolButton {
        $this->attributes = $value;

        return $this;
    }

    public function render()
    {
        return view($this->view, [
            'id' => $this->id,
            'icon' => $this->icon,
            'title' => $this->title,
            'href' => $this->href,
            'attributes' => $this->attributes,
            'class' => $this->style->_(),
            'size' => $this->size->_(),
        ]);
    }
}
