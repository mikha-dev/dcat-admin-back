<?php

namespace Dcat\Admin\Form\Field;

use Dcat\Admin\DcatIcon;

class Time extends Date
{
    protected $format = 'HH:mm:ss';

    public function render()
    {
        //todo::icon
        //$this->prepend('<i class="fa fa-clock-o fa-fw"></i>')
        $this->prepend(DcatIcon::CALENDAR(true))
            ->defaultAttribute('style', 'width: 200px;flex:none');

        return parent::render();
    }
}
