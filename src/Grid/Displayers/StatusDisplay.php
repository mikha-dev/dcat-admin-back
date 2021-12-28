<?php

namespace Dcat\Admin\Grid\Displayers;

use Dcat\Admin\Admin;

class StatusDisplay extends AbstractDisplayer
{

    public function display(string $titleOn = 'On', string $titleOff = 'Off')
    {
        $column = $this->column->getName();
        $status = $this->value;

        return Admin::view(
            'admin::grid.displayer.status',
            compact('column', 'status', 'titleOn','titleOff')
        );
    }
}
