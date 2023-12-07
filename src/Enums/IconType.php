<?php

namespace Dcat\Admin\Enums;

use D4T\Core\Contracts\D4TEnum;
use D4T\Core\Traits\D4TEnumTrait;

enum IconType : int implements D4TEnum
{
    use D4TEnumTrait;

    case SVG = 0;
    case FONT = 1;
}
