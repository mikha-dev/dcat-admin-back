<?php

namespace Dcat\Admin\Widgets;

use Dcat\Admin\Widgets\Card;
use Illuminate\Support\Facades\Storage;

class Banner extends Card
{

    protected $view = 'admin::widgets.banner';

    public function __construct(
        public string $label,
        public string $value,
        public string $url,
        public string $bgColor = 'blue' // green, yellow, purple 
    ) {
    }

    public function defaultVariables()
    {

        $vars['url'] = $this->url;
        $vars['label'] = $this->label;
        $vars['value'] = $this->value;

        $bgImage = "/images/{$this->bgColor}.png";
        $vars['bg'] = Storage::disk(config('admin.upload.disk'))->url($bgImage);

        return $vars;
    }
}
