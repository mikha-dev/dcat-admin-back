<?php

namespace Dcat\Admin\Enums;

use D4T\Core\Contracts\D4TEnum;
use D4T\Core\Traits\D4TEnumTrait;

enum PlacementType : string implements D4TEnum
{
    use D4TEnumTrait;

    case TOP = 'top';
    case BOTTOM = 'bottom';
    case LEFT = 'left';
    case RIGHT = 'right';
}
