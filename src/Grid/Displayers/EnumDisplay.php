<?php

namespace Dcat\Admin\Grid\Displayers;

use D4T\Core\Contracts\D4TEnum;

class EnumDisplay extends AbstractDisplayer
{

    public function display()
    {

        if(is_null($this->value))
            return '';

        if(class_implements($this->value, D4TEnum::class) ) {
            /** @var D4TEnum $this->value */
            return $this->value->label();
        }
    }
}
